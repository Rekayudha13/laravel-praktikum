<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function blogs()
    {
        $data = Blog::all();
        return view('blogs', compact('data'));
    }

    public function create()
    {
        return view('create');
    }

    public function save(Request $request)
    {
        Blog::create($request->all());
        return redirect('blogs');
    }
}
