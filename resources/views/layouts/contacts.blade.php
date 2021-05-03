@extends('layouts.app')

@section('title', 'contacts')

@section('content')
    <h2>CONTACTS</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('formHandler') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter name:</label>
            <input class="form-control" type="text" name="name" placeholder="name" id="name">
        </div>
        <div class="form-group">
            <label for="email">Enter email:</label>
            <input class="form-control" type="text" name="email" placeholder="email" id="email">
        </div>
        <div class="form-group">
            <label for="subj">Enter subject:</label>
            <input class="form-control" type="text" name="subj" placeholder="subject" id="subj">
        </div>
        <div class="form-group">
            <label for="mess">Enter message:</label>
            <textarea class="form-control" name="mess" placeholder="message" id="mess"></textarea>
        </div>
        <button class="btn btn-success" type="submit">SUBMIT</button>
    </form>
@endsection

@section('aside')
    @parent
    <p>
        Contacts block
    </p>
@endsection
