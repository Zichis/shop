<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Schedule;
use App\Models\Plan;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function fitness()
    {
        $schedules = Schedule::all();
        $plans = Plan::all();
        $information = Information::first();

        return view('fitness', [
            'schedules' => $schedules,
            'plans' => $plans,
            'information' => $information
        ]);
    }
}
