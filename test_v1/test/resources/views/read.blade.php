{{-- direktori file name main --}}
@extends('layouts.main')

{{-- pembuka section --}}
@section('container')
<div class="container">
    <div class="row mt-4">
        <div class="col">

            @foreach ($posts as $post)
            <article class="mb-5">
                <h2>
                    <a href="/read/{{ $post["slug"] }}">{{ $post["title"] }}</a>
                </h2>
                <h5>by: {{ $post["penerbit"] }}</h5>
                <p>{{ $post["body"] }}</p>
            </article>
            @endforeach

        </div>
    </div>
</div>

{{-- penutup section --}}
@endsection