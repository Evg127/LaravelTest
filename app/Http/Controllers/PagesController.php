<?php

namespace App\Http\Controllers;

use DateTime;
use App\Http\Requests\FormValidate;

class PagesController extends Controller
{
    public function main()
    {
        return view('layouts.main', ['title' => 'main']);
    }

    public function about()
    {
        return view('layouts.about', ['title' => 'about']);
    }

    public function contacts()
    {
        return view('layouts.contacts', ['title' => 'contacts']);
    }

    public function submit(FormValidate $request)
    {

    }

    public function test()
    {
        $users = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'banned' => true,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'banned' => false,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'banned' => true,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'banned' => false,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'banned' => false,
            ],
        ];

        return view('layouts.test',
            [
                'title' => 'test',
                'users' => $users,
            ]
        );
    }

    public function calendar()
    {
        $currentDate = new DateTime('now');
        $daysInCurrentMonth = $currentDate->format('t');
        $currentDay = $currentDate->format('j');
        $currentMonth = $currentDate->format('n');
        $currentYear = $currentDate->format('Y');
        $firstDayOfCurrentMonth = new DateTime("{$currentYear}-{$currentMonth}-1");
        $firstWeekDayOfCurrentMonth = $firstDayOfCurrentMonth->format('w');
        if ($firstWeekDayOfCurrentMonth > 0 && $firstWeekDayOfCurrentMonth < 7) {
            $dayOfMonthCounter = 2 - $firstWeekDayOfCurrentMonth;
        }
        if ($firstWeekDayOfCurrentMonth == 0) {
            $dayOfMonthCounter = - 5;
        }

        $rows = ceil($daysInCurrentMonth / 7);
        $calendar =
            [
                'startCount' => $dayOfMonthCounter,
                'currentDay' => $currentDay,
                'endCount' => $daysInCurrentMonth,
                'rowNumber' => $rows
            ];

        return view('layouts.calendar',
            [
                'title' => 'Calendar',
                'calendar' => $calendar,
            ]
        );
    }
}
