<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::query()
            ->orderBy('rating', 'desc')
            ->paginate(12);


        return view('website.testimonial.index')->with([
            'testimonials' => $testimonials
        ]);
    }

    public function show($id)
    {
        $testimonial = Testimonial::query()
            ->where('id', $id)
            ->first();
        return view('website..show')->with([
            'testimonial' => $testimonial
        ]);
    }
}
