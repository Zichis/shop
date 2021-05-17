<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Database\Seeder;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Information::create([
            'shop_banner' => "You don't have to stress yourself to get items you need at home. Shop with us at your convinience.",
            'fitness_banner' => "We can help you get your dream body. Our instructors are there to guide you step by step through different schedules. We have diffrent price plans for individuals, couple and families. Contact us today!"
        ]);
    }
}
