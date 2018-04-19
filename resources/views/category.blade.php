@extends('layouts.app')
@section('content')
    <h1 class="h5">{{ $category->title  }}</h1>
    <hr />
    @foreach( $category['posts'] as $post )
        @include('template-parts.content', ['post' => $post])
    @endforeach
    <hr>
@endsection