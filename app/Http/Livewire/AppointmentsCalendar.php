<?php

namespace App\Http\Livewire;

use Asantibanez\LivewireCalendar\LivewireCalendar;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class AppointmentsCalendar extends LivewireCalendar
{
    public function events(): Collection
    {
        return collect([
            [
                'id' => 1,
                'title' => 'Breakfast',
                'description' => 'Pancakes',
                'date' => Carbon::today()
            ],
            [
                'id' => 2,
                'title' => 'Meeting',
                'description' => 'Work Stuff',
                'date' => Carbon::tomorrow()
            ]
        ]);
    }
}
