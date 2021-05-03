@extends('layouts.app')

@section('content')
    <h2>PRODUCT PAGE</h2>

    {{ $product['name'] }}
    <br>
    {{ $product['cost'] }}
    <br>
    <p>
    @if ($product['inStock'])
        In stock
    @else
        Not in stock
    @endif
    </p>
    {{ $product['desc'] }}
@endsection

@section('aside')
    @parent
    <p>Information about product</p>
@endsection
