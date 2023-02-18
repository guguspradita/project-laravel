@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>
    <p>By. Gugus Pradita in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->nama }}</a></p>

   {!! $post->body !!}

    <div class="mt-4">
        <a href="/blog">Back to posts</a>
    </div>
@endsection
