<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::insert([
            [
                'sub_name' => 'First Plan',
                'name' => 'One Session',
                'single_price' => '3000',
                'single_discount' => '0',
                'couple_price' => '6000',
                'couple_discount' => '10',
                'family_price' => '12000',
                'family_discount' => '25'
            ],
            [
                'sub_name' => 'Second Plan',
                'name' => 'Monthly',
                'single_price' => '10000',
                'single_discount' => '0',
                'couple_price' => '20000',
                'couple_discount' => '10',
                'family_price' => '40000',
                'family_discount' => '25'
            ],
            [
                'sub_name' => 'Third Plan',
                'name' => 'Quarterly',
                'single_price' => '25000',
                'single_discount' => '0',
                'couple_price' => '50000',
                'couple_discount' => '10',
                'family_price' => '100000',
                'family_discount' => '25'
            ],
            [
                'sub_name' => 'Fourth Plan',
                'name' => 'Semi Annually',
                'single_price' => '48000',
                'single_discount' => '0',
                'couple_price' => '96000',
                'couple_discount' => '10',
                'family_price' => '192000',
                'family_discount' => '25'
            ],
            [
                'sub_name' => 'Fifth Plan',
                'name' => 'Yearly',
                'single_price' => '90000',
                'single_discount' => '5',
                'couple_price' => '180000',
                'couple_discount' => '15',
                'family_price' => '360000',
                'family_discount' => '30'
            ]
        ]);
    }
}
