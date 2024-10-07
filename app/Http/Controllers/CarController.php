<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {
        $car = DB::table('car')->get();
        return view('car.cars', ['car' => $car]);
    }
    public function create()
    {
        return view('car.create');
    }
    public function insert(Request $request)
    {
        DB::table('car')->insert([
            'name' => $request->name,
            'img' => $request->img,
            'price' => $request->price,
            'discount' => $request->discount,
        ]);

        return redirect('/')->with('success', 'تمت إضافة اللابتوب بنجاح');
    }

    public function show($id)
    {
        $post = DB::table('car')->where('id', $id)->first();
        return view('car.show', ['post' => $post]);
    }
    public function edit($id)
    {
        $post = DB::table('car')->where('id', $id)->first();
        return view('car.edit', ['post' => $post]);
    }
    public function update(Request $request, $id)
    {
        DB::table('car')->where('id', $id)->update([
            'name' => $request->name,
            'img' => $request->img,
            'price' => $request->price,
            'discount' => $request->discount,
        ]);

        return redirect('/')->with('success', 'تم تحديث اللابتوب بنجاح');
    }


    public function delete($id)
    {
        DB::table('car')->where('id', $id)->delete();
        return redirect('car/index')->with('success', 'تم حذف اللابتوب بنجاح');
    }
}
