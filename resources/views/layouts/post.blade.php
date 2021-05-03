@extends('layouts.app')

@section('content')
    <div class="info">
        <span class="date">{{ $post['date'] }}</span>
        <span class="author">{{ $post['author'] }}</span>
    </div>
    <div class="text">
        {{ $post['text'] }}
    </div>
@endsection

@section('aside')
    @parent
    <p>
        posts
    </p>
@endsection
