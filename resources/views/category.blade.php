@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Category : {{ $category }}</h1>

    @foreach ($posts as $item)
        <article class="mb-5">
            <h2>
                <a href="/blog/{{ $item->slug }}">{{ $item->title }}</a>
            </h2>
            <p>{{ $item->excerpt }}</p>
        </article>
    @endforeach
@endsection
