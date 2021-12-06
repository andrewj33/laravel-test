<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {

        $posts = json_encode(DB::table('post')->get());

        return view('welcome')->with('posts', $posts);
    }
}
