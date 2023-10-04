<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    //

    public function index()
    {
        return Coupon::all();
    }

    public function store(Request $request)
    {
        return Coupon::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $coupon = Coupon::find($id);
        $coupon->update($request->all());

        return $coupon;
    }
}
