@extends('layouts.app')

@section('content')
    <h2>Calendar PAGE</h2>
    <table class="table table-bordered">
        <tr>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
        @for($i = 0; $i < $calendar['rowNumber']; $i++)
            <tr>
                @for($j = 1; $j <= 7; $j++, $calendar['startCount']++)
                    <td
                        @if($calendar['currentDay'] == $calendar['startCount'])
                            {{ 'class = bg-secondary' }}
                        @endif
                        @if($j == 6 || $j == 7)
                            {{ 'class = text-danger' }}
                        @endif
                        >
                        @if($calendar['startCount'] > 0 && $calendar['startCount'] <= $calendar['endCount'])
                            {{ $calendar['startCount']}}
                        @endif
                    </td>
                @endfor
            </tr>
        @endfor
    </table>
@endsection

@section('aside')
    @parent
    <p>Information about test</p>
@endsection
