<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($id)
    {
        // جلب تفاصيل المنتج بناءً على $id
        $product = DB::table('loptops')->where('id', $id)->first();

        // التحقق من وجود المنتج
        if (!$product) {
            abort(404, 'Product not found');
        }

        return view('show', compact('product'));
    }
    public function store($id)
    {
        // جلب تفاصيل المنتج بناءً على $id
        $items = DB::table('camera')->where('id', $id)->first();

        // التحقق من وجود المنتج
        if (!$items) {
            abort(404, 'Product not found');
        }
        return view('camera.showcamera', compact('items'));
    }
    public function index($id)
    {
        // جلب تفاصيل المنتج بناءً على $id
        $smart = DB::table('smartphone')->where('id', $id)->first();

        // التحقق من وجود المنتج
        if (!$smart) {
            abort(404, 'Product not found');
        }
        return view('smart.showsmart', compact('smart'));
    }


    public function edit($id)
    {
        // جلب تفاصيل المنتج بناءً على $id
        $access = DB::table('access')->where('id', $id)->first();

        // التحقق من وجود المنتج
        if (!$access) {
            abort(404, 'Product not found');
        }
        return view('access.showaccess', compact('access'));
    }

    public function one($id)
    {
        // جلب تفاصيل المنتج بناءً على $id
        $car = DB::table('car')->where('id', $id)->first();

        // التحقق من وجود المنتج
        if (!$car) {
            abort(404, 'Product not found');
        }
        return view('car.showcar', compact('car'));
    }
}
