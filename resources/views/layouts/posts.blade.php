@extends('layouts.app')

@section('content')
    <main>
        @foreach($posts as $id => $post)
            <div class="post">
                <h2>{{ $post['title'] }}</h2>
                <div class="info">
                    <span class="date">{{ $post['date'] }}</span>
                    <span class="author">{{ $post['author'] }}</span>
                </div>
                <div class="text">
                    {{ $post['text'] }}
                </div>
                <div class="more">
                    <a href="/post/{{ $id }}/">подробнее...</a>
                </div>
            </div>
        @endforeach
    </main>
@endsection

@section('aside')
    @parent
    <p>
        posts
    </p>
@endsection
