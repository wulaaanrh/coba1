@extends('layouts/main')

{{-- container didapat dari @yield('container') yang ada di file main/container ini dikirimkan ke file main lalu dipanggil oleh yield('container') --}}
@section('container')
{{-- <link rel="stylesheet" type="text/css" href="css/postncate.css">  --}}
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/postncate.css'); }}">
<body>
    <h1 class="mb-3">{{ $post->title }}</h1>

    <p>By. <a href="//blog?author={{ $post->author->username }}" class="text-decoration-none" style="color:#a52a2a;">{{ $post->author->name }}</a> in <a href="/blog?categories={{ $post->category->slug }}" class="text-decoration-none" style="color:#a52a2a;">{{ $post->category->name }}</a><p>


    @if ($post->image)
        <div style="max-height : 360px; overflow:hidden;">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
        </div>
    @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
    @endif

    <article class="my-3 fs-5">
        {!! $post->body !!}
    </article>

    <a href="/blog" class="text-decoration-none btn btn-outline-danger">Back To Post</a><br><br>
</body>
@endsection