<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::create(
            [
                'day' => 'Monday',
                'morning' => 'Body Tone/Aerobics',
                'evening' => 'Tummy Blast'
            ],
            [
                'day' => 'Tuesday',
                'morning' => 'Tummy Blast',
                'evening' => 'Tabata'
            ],
            [
                'day' => 'Wednesday',
                'morning' => 'Circuit Training',
                'evening' => 'Body Tone/Aerobics'
            ],
            [
                'day' => 'Thursday',
                'morning' => 'Tabata',
                'evening' => 'Tummmy Blast'
            ],
            [
                'day' => 'Friday',
                'morning' => 'Tummy Blast',
                'evening' => 'Circuit Training'
            ],
            [
                'day' => 'Saturday',
                'morning' => 'Taebo Aerobics/Bootcamp',
                'evening' => 'All Cardio Workout'
            ],
            [
                'day' => 'Sunday',
                'morning' => '',
                'evening' => "Self Workout With Instructor's Supervision"
            ]
        );
    }
}
