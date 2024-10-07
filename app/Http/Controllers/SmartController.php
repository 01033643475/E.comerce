<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SmartController extends Controller
{
    public function index()
    {
        $users = DB::table('smartphone')->get();
        return view('smart.index', ['users' => $users]);
    }
    public function create()
    {
        return view('smart.create');
    }
    public function insert(Request $request)
    {
        DB::table('smartphone')->insert([
            'name' => $request->name,
            'img' => $request->img,
            'price' => $request->price,
            'discount' => $request->discount,

        ]);
        return redirect('/');
    }
    public function show($id)
    {
        $posts = DB::table('smartphone')->where('id', $id)->first();
        return view('smart.show', ['posts' => $posts]);
    }
    public function edit($id)
    {
        $post = DB::table('smartphone')->where('id', $id)->first();
        return view('smart.edit', ['post' => $post]);
    }
    public function update(Request $request, $id)
    {
        DB::table('smartphone')->where('id', $id)->update([
            'name' => $request->name,
            'img' => $request->img,
            'price' => $request->price,
            'discount' => $request->discount,
        ]);
        return redirect('/');
    }
    public function delete($id)
    {
        DB::table('smartphone')->where('id', $id)->delete();
        return redirect('/');
    }
}
