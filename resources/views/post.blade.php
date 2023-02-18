@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>

   {!! $post->body !!}

    <div class="mt-4">
        <a href="/blog">Back to posts</a>
    </div>
@endsection
