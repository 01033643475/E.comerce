<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CameraController extends Controller
{
    public function store()
    {
        $items = DB::table('camera')->get();
        return view('index', ['items' => $items]);
    }
    public function index()
    {
        $camera = DB::table('camera')->get();
        return view('camera.cameraa', ['camera' => $camera]);
    }
    public function create()
    {
        return view('camera.create');
    }
    public function insert(Request $request)
    {
        DB::table('camera')->insert([
            'name' => $request->name,
            'img' => $request->img,
            'price' => $request->price,
            'discount' => $request->discount,

        ]);
        return redirect('/');
    }
    public function show($id)
    {
        $camera = DB::table('camera')->where('id', $id)->first();
        return view('camera.show', ['camera' => $camera]);
    }
    public function edit($id)
    {
        $post = DB::table('camera')->where('id', $id)->first();
        return view('laptop.edit', ['post' => $post]);
    }
    public function update(Request $request, $id)
    {
        DB::table('camera')->where('id', $id)->update([
            'name' => $request->name,
            'img' => $request->img,
            'price' => $request->price,
            'discount' => $request->discount,
        ]);
        return redirect()->route('camera.index');
    }
    public function delete($id)
    {
        DB::table('camera')->where('id', $id)->delete();
        return redirect('camera/index');
    }
}
