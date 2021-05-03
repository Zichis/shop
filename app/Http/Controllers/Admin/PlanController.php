<?php

namespace App\Http\Controllers\Admin;

use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::all();

        return view('admin.plan.index', [
            'plans' => $plans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        return view('admin.plan.edit', [
            'plan' => $plan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        $validated = $request->validate([
            'name' => 'required',
            'sub_name' => 'required',
            'single_price' => 'required|numeric',
            'single_discount' => 'required|numeric',
            'couple_price' => 'required|numeric',
            'couple_discount' => 'required|numeric',
            'family_price' => 'required|numeric',
            'couple_discount' => 'required|numeric'
        ]);

        $plan->update([
            'name' => $request->name,
            'sub_name' => $request->sub_name,
            'single_price' => $request->single_price,
            'single_discount' => $request->single_discount,
            'couple_price' => $request->couple_price,
            'couple_discount' => $request->couple_discount,
            'family_price' => $request->family_price,
            'family_discount' => $request->family_discount
        ]);

        return redirect()->route('admin.plans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
