{{-- @dd($posts) --}}


@extends('layouts.main')

@section('container')
    <h2>Halaman Post Blog</h2>
    <article class="mb-5">
        @foreach ($posts as $post)
            <h2>
                <a href="/posts/{{ $post["slug"] }}"> {{ $post["title"] }} </a>
            </h2>
            <h5>by : {{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p>
        @endforeach
    </article>
@endsection
