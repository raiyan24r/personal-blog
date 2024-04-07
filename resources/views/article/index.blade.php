@extends('layouts.app')

@section('content')
    @component('particals.jumbotron')
        <h3>{{ config('blog.article.title') }}</h3>
        <h6>{{ config('blog.article.description') }}</h6>
        @component('particals.socials')
        @endcomponent
    @endcomponent

    @include('widgets.article')

    {{ $articles->links('pagination.default') }}

@endsection