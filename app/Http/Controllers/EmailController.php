<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{
    public function store()
    {
        $posts = DB::table('login')->get();
        return view('email', ['posts' => $posts]);
    }
    public function insert(Request $request)
    {
        DB::table('login')->insert([
            'email' => $request->email,
            'password' => $request->password,

        ]);
        // return response('succefull');
    }
    public function create()
    {
        return view('create');
    }
}
