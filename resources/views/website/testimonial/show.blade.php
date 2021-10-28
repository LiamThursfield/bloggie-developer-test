@extends('layouts.app', ['class' => 'bg-white'])

@section('content')
    <div class="header bg-gradient-primary py-3">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">
                            {{ $testimonial->user_name }}
                        </h1>
                        <h2 class="text-white">
                            {{ $testimonial->created_at ? $testimonial->created_at->diffForHumans() : '' }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <featured-blogs></featured-blogs>
@endsection
