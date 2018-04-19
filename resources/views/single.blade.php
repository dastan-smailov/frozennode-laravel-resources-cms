@extends('layouts.app')
@section('content')
    @if($post->post_type == 'post')
        @include('template-parts.content-post', ['post' => $post])
    @else
        @include('template-parts.content-page', ['post' => $post])
    @endif
@endsection