<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccessController extends Controller
{

    public function create()
    {
        return view('access.create');
    }

    public function index()
    {
        $access = DB::table('access')->get();
        return view('access.index', compact('access'));
    }
    public function insert(Request $request)
    {
        DB::table('access')->insert([
            'name' => $request->name,
            'img' => $request->img,
            'price' => $request->price,
            'discount' => $request->discount,

        ]);
        return redirect('/');
    }
    public function edit($id)
    {
        $post = DB::table('access')->where('id', $id)->first();
        return view('access.edit', ['post' => $post]);
    }
    public function update(Request $request, $id)
    {
        DB::table('access')->where('id', $id)->update([
            'name' => $request->name,
            'img' => $request->img,
            'price' => $request->price,
            'discount' => $request->discount,
        ]);
        return redirect()->route('access.index');
    }
    public function delete($id)
    {
        DB::table('access')->where('id', $id)->delete();
        return redirect()->route('access.index');
    }
}
