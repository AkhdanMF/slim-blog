@extends('layouts.appblog')

@section('content')
    <h1>{{ $post->title }}</h1>
    <h5>{{ $post->created_at->format('M jS Y g:ia') }}</h5>
    <hr>
    <div class="gambar-post text-center"></div>
    {!! nl2br(e($post->content)) !!}
    <hr>
    <button class="btn btn-primary" onclick="history.go(-1)">
      &laquo; Kembali
    </button>
@endsection
