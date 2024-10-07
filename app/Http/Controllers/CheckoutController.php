<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function create()
    {
        return view('checkout');
    }
    public function index()
    {
        $check = DB::table('checkout')->get();
        return view('check', ['check', $check]);
    }
    public function insert(Request $request)
    {
        DB::table('checkout')->insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'code' => $request->code,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'order' => $request->order,
        ]);
        return  redirect('check');
    }
}
