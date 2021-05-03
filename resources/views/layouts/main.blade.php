@extends('layouts.app')

@section('title', 'main')

@section('content')
    <h2>THE MAIN PAGE OF THE SITE</h2>
@endsection

@section('aside')
    @parent
    <p>
        Specific data for the main page,which i displaying only for the main page
    </p>
@endsection
