<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function latest(Request $request) : JsonResponse
    {
        $testimonials = Testimonial::query()->latest()
            ->limit($request->get('limit', 3))
            ->take(3)
            ->get();

        return response()->json($testimonials);
    }
}
