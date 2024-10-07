<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaptopsController extends Controller
{
    public function index()
    {
        $posts = DB::table('loptops')->get();
        return view('laptop.laptops', ['posts' => $posts]);
    }
    public function create()
    {
        return view('laptop.create');
    }
    public function insert(Request $request)
    {
        DB::table('loptops')->insert([
            'name' => $request->name,
            'img' => $request->img,
            'price' => $request->price,
            'discount' => $request->discount,
        ]);

        return redirect()->route('laptop.index')->with('success', 'تمت إضافة اللابتوب بنجاح');
    }

    public function show($id)
    {
        $post = DB::table('loptops')->where('id', $id)->first();
        return view('laptop.show', ['post' => $post]);
    }
    public function edit($id)
    {
        $post = DB::table('loptops')->where('id', $id)->first();
        return view('laptop.edit', ['post' => $post]);
    }
    public function update(Request $request, $id)
    {
        DB::table('loptops')->where('id', $id)->update([
            'name' => $request->name,
            'img' => $request->img,
            'price' => $request->price,
            'discount' => $request->discount,
        ]);

        return redirect('/')->with('success', 'تم تحديث اللابتوب بنجاح');
    }


    public function delete($id)
    {
        DB::table('loptops')->where('id', $id)->delete();
        return redirect()->route('laptop.index')->with('success', 'تم حذف اللابتوب بنجاح');
    }
}
