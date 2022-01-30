@extends('pages_layouts.user_layout')

@section('main')
    <div class="container">
        <div class="alert alert-info">
            <div>
                <h5>{{ $article->id }}</h5>
                <h2>{{ $article->title }}</h2>
                <h6>{{ $article->created_at }}</h6>
                <h6>{{$article->content}}</h6>
            </div>
        </div>
    </div>
@endsection
