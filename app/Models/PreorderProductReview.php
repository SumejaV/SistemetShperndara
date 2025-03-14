<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\PreventDemoModeChanges;

class PreorderProductReview extends Model
{
  use PreventDemoModeChanges;

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function preorderProduct(){
    return $this->belongsTo(PreorderProduct::class);
  }
}
