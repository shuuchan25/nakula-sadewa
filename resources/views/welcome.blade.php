@extends('layouts.master')
@section('content')
    <section class="hero">
        @foreach ($articles as $article)
        <div class="article-card">
            <img src="{{ $article->image }}" alt="">
            <h1>{{ $article->title }}</h1>
        </div>
        @endforeach
    </section>
@endsection
