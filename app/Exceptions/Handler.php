<?php

namespace App\Exceptions;

use App\Utility\NgeniusUtility;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
   
    protected $dontReport = [
        //
    ];

   
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
        if ($e instanceof Redirectingexception) {
            return redirect()->back();
        }

        if($this->isHttpException($e))
        {
            if ($request->is('customer-products/admin')) {
                return NgeniusUtility::initPayment();
            }
            
            return parent::render($request, $e);
        }
        else
        {
            return parent::render($request, $e);
        }
    }
}
