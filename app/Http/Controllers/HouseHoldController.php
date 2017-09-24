<?php

namespace App\Http\Controllers;

use App\Barangay;
use App\HouseHold;
use App\Purok;
use Illuminate\Http\Request;

class HouseHoldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $households = HouseHold::paginate(1);
        return view('surverior.household.index', compact('households'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $barangay = Barangay::pluck('name', 'id');
        $purok = Purok::pluck('number', 'id');
        return view('surverior.household.create', compact(['barangay','purok']));
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
        $data = request()->validate([
            'firstname' => 'required|string',
            'middlename'    => 'required|string',
            'lastname'  => 'required|string',
            'age'   => 'required|integer',
            'gender'  => 'required|in:m,f',
            'barangay_id' => 'required|exists:barangays,id',
            'purok_id' => 'required|exists:puroks,id',

        ]);
        HouseHold::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HouseHold  $houseHold
     * @return \Illuminate\Http\Response
     */
    public function show(HouseHold $houseHold)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HouseHold  $houseHold
     * @return \Illuminate\Http\Response
     */
    public function edit(HouseHold $houseHold)
    {
        //
        $barangay = Barangay::pluck('name', 'id');
        $purok = Purok::pluck('number', 'id');
        return view('surverior.household.edit', compact(['barangay','purok','houseHold']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HouseHold  $houseHold
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HouseHold $houseHold)
    {
        //
        $data = request()->validate([
            'firstname' => 'required|string',
            'middlename'    => 'required|string',
            'lastname'  => 'required|string',
            'age'   => 'required|integer',
            'gender'  => 'required|in:m,f',
            'barangay_id' => 'required|exists:barangays,id',
            'purok_id' => 'required|exists:puroks,id',

        ]);
        $houseHold->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HouseHold  $houseHold
     * @return \Illuminate\Http\Response
     */
    public function destroy(HouseHold $houseHold)
    {
        //
    }
}
