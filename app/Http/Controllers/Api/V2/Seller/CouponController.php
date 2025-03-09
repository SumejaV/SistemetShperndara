<?php

namespace App\Http\Controllers\Api\V2\Seller;


use App\Http\Requests\CouponRequest;
use App\Http\Resources\V2\Seller\CouponResource;
use App\Http\Resources\V2\Seller\ProductCollection;
use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Models\Product;

class CouponController extends Controller
{
    
    public function index()
    {
        $coupons = Coupon::where('user_id', auth()->user()->id)->orderBy('id','desc')->get();
        return CouponResource::collection($coupons);
    }
    
   
    public function store(CouponRequest $request)
    {
        $user_id = auth()->user()->id;
        Coupon::create($request->validated() + [
            'user_id' => $user_id,
        ]);

        return $this->success(translate('Coupon has been saved successfully'));
    }

   
    public function edit($id)
    {
        $coupon = Coupon::where('id', $id)->where('user_id', auth()->user()->id)->first();
        return new CouponResource($coupon);
    }

    
    public function update(CouponRequest $request, Coupon $coupon)
    {
        $coupon->update($request->validated());
        return $this->success(translate('Coupon has been updated successfully'));
    }

    
    public function destroy($id)
    {
        Coupon::where('id', '=', $id)->where('user_id', auth()->user()->id)->delete();
        return $this->success(translate('Coupon has been deleted successfully'));
    }

    public function coupon_for_product(Request $request)
    {
        if($request->coupon_type == "product_base") {
            $products = Product::where('name','LIKE',"%".$request->name."%")->where('user_id', auth()->user()->id)->paginate(10);
            return new ProductCollection($products);
        }
    }
}
