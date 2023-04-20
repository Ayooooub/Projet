@extends('layouts.auth-master')

@section('content')

    <style>
         .slider {
            width: 90%;
            height: 500px;
            position: relative;
            overflow: hidden;
            
            border-radius: 15px;
            /* margin-right: 20px; */
        }

        .slide {
            
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .slide.active {
            opacity: 1;
        }

    
    </style>
    <body>
    <div class="slider" style="margin-top: 3%;">
        @foreach($images as $image)
            <div class="slide @if($loop->first) active @endif">
                <img src="{{ asset('storage/land_images/' . $image->path) }}" alt="{{ $image->name }}" width="100%" height="100%" loading="lazy">
            </div>
        @endforeach    
    </body>

@endsection