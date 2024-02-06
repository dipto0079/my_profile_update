<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FontController extends Controller
{
    public function index()
    {
        $date = Carbon::parse('2020-01-01');
        $data['diffYears'] = Carbon::now()->diffInYears($date);
        $data['today'] = Carbon::now()->format('M-Y');
        return view('welcome', $data);
    }

    public function blog()
    {
        $data["blogs"] = Blogs::all();
        $data["res"] = Blogs::orderBy('id', 'DESC')->limit(5)->get();
        return view('mBlog.blog', $data);
    }

    public function singleBlog($slug)
    {
        $data["blogs"] = Blogs::where('slug', $slug)->first();
        return view('mBlog.blogPost', $data);
    }
}

