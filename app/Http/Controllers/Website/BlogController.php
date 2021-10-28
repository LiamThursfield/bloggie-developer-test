<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $now = Carbon::now();
        $blogs = Blog::query()->where('published_at', '<=', $now)
            ->latest('published_at')
            ->paginate(12);

        return view('website.blog.index')->with([
            'blogs' => $blogs
        ]);
    }

    public function show($slug)
    {
        $blog = Blog::query()
            ->where('slug', $slug)
            ->first();
        return view('website.blog.show')->with([
            'blog' => $blog
        ]);
    }

}
