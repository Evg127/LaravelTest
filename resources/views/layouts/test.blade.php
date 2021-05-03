@extends('layouts.app')

@section('content')
    <h2>TEST PAGE</h2>

    <table class="table table-hover">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Status</th>
        </tr>
        @for($i = 0; $i < count($users); $i++)
            <tr class= {{ $users[$i]['banned'] == true ? 'text-danger' : 'text-success' }} >
                <td>{{ $i + 1}}</td>
                <td>{{ $users[$i]['name'] }}</td>
                <td>{{ $users[$i]['surname'] }}</td>
                <td>
                    @if($users[$i]['banned'] == true)
                        banned
                    @else
                        active
                    @endif
                </td>
            </tr>
        @endfor
    </table>
@endsection

@section('aside')
    @parent
    <p>Information about test</p>
@endsection
