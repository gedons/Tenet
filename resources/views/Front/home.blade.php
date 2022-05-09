@extends('layouts.main')

@section('content')
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Microsoft Imagine Academy</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">A student attendance management system for all ND and HND students </h2>
                    <a class="btn btn-primary" href="{{route('login')}}">Get Started</a>
                </div>
            </div>
        </div>
    </header>
@endsection