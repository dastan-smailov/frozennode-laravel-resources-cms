<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/fontawesome-all.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <title>Blog Template</title>
</head>
<body>
<div class="container" id="wrap">
    <header id="page-header">
        <div id="logo_img">
            <img class="img-fluid" src="{{ asset('/uploads/'. $general->site_logo)  }}" alt="Logo image">
        </div><!-- /#logo_img -->
        {{-- inclding navigation bar --}}
        @include('template-parts.navigation-top')
    </header> <!-- /#page-header -->
    <div class="row">