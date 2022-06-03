@extends('layouts.app')

@section('content')
    @component('particals.jumbotron')
        <h1>{{ config('blog.article.title') }}</h3>

            <h5 style=" color:#fa6496;">{{ config('blog.article.description') }}</h5>
        @endcomponent

        @include('widgets.article')

        {{ $articles->links('pagination.default') }}
    @endsection
