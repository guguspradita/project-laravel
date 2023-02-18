@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>
    <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->nama }}</a></p>

   {!! $post->body !!}

    <div class="mt-4">
        <a href="/blog" class="text-decoration-none">Back to posts</a>
    </div>
@endsection
