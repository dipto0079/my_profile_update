<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    public function index()
    {
        $data["blogs"] = Blogs::get();
        return view("backend.Blog.blogPost.index", $data);
    }

    public function create()
    {
        return view('backend.Blog.blogPost.createAndEdit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
            'contents' => 'required'
        ]);

        if ($request->id) {
            $blog = Blogs::where('id', $request->id)->first();

            if ($request->hasFile('images')) {
                if ($blog->images) {
                    unlink(storage_path() . '/app/public/' . $blog->images);
                }
                $image = $request->file('images')->store('upload');
                $blog->images = $image;
            }

            $blog->title = $request->title;
            $blog->slug = Str::slug($request->title);
            $blog->meta_keywords = $request->meta_keywords;
            $blog->meta_description = $request->meta_description;
            $blog->contents = $request->contents;
            $blog->save();
            return redirect()->route('home.blog');

        } else {
            $path = [];
            if ($request->hasFile('images')) {
                $path = $request->file('images')->store('upload');
            }
            Blogs::create([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'images' => $path,
                'tags' => "tags",
                'meta_keywords' => $request->meta_keywords,
                'meta_description' => $request->meta_description,
                'contents' => $request->contents,
                'status' => 0,
            ]);
            return redirect()->route('home.blog');
        }
    }


    public function edit($slug)
    {
        $data['blog'] = Blogs::where('slug', $slug)->first();
        return view('backend.Blog.blogPost.createAndEdit', $data);
    }

    public function seeFirst($id)
    {
        $blog = Blogs::where('id', $id)->first();
        $blog->see_first = 1;
        $blog->update();
        Blogs::where('id', '!=', $id)->update(['see_first' => 0]);
        return back();
    }

    public function status($id, $status)
    {
        $blog = Blogs::where('id', $id)->first();
        if ($blog->status == $status) {
            return back();
        } else {
            $blog->status = $status;
            $blog->update();
        }
        return back();
    }

    public function del($id)
    {

        $blog = Blogs::where('id', $id)->first();

        if ($blog->images) {
            unlink(storage_path() . '/app/public/' . $blog->images);
        }

        $blog->delete();
        return back();
    }

}
