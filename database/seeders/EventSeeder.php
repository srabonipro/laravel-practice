<?php

namespace Database\Seeders;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'id' => 1,
            'title' => 'Title One',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'date' => Carbon::today()
        ]);
        Event::create([
            'id' => 2,
            'title' => 'Title Two',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'date' => Carbon::tomorrow()

        ]);
        Event::create([
            'id' => 3,
            'title' => 'Title Three',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'date' => Carbon::yesterday()
        ]);
        Event::create([
            'id' => 4,
            'title' => 'Title Four',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'date' => Carbon::now()
        ]);
        Event::create([
            'id' => 5,
            'title' => 'Title Five',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'date' => Carbon::tomorrow()
        ]);
        Event::create([
            'id' => 6,
            'title' => 'Title Six',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'date' => Carbon::today()
        ]);
    }
}
