<?php

namespace App\Http\Controllers;

use App\DogPopulation;
use App\Survey;
use Illuminate\Http\Request;

class DogPopulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        request()->validate([
            'name.*' => 'required|string',
            'age.*' => 'required',
            'color.*' => 'required|string'
        ]);
        $survey1 = new Survey;
        $survey1->house_hold_id = $request->get('house_hold_id');
        $survey1->type_id = $request->get('type_id');
        $survey1->surverior_id = auth()->id();
        $survey1->save();

        for ($i=0; $i < count($request->get('name')); $i++) {
            # code...
            $dog = new DogPopulation;
            $dog->name = $request->get('name')[$i];
            $dog->age = $request->get('age')[$i].'-01';
            $dog->origin = $request->get('origin')[$i];
            $dog->breed = $request->get('breed')[$i];
            $dog->sex = $request->get('sex')[$i];
            $dog->color = $request->get('color')[$i];
            $dog->neutering = $request->get('neutering')[$i];
            $dog->survey_id = $survey1->id;
            $dog->save();
        }
        return redirect()->back()->with('msg', 'Record added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DogPopulation  $dogPopulation
     * @return \Illuminate\Http\Response
     */
    public function show(DogPopulation $dogPopulation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DogPopulation  $dogPopulation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $survey = Survey::find($id);

        return view('surverior.survey.dog_edit', compact('survey'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DogPopulation  $dogPopulation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        request()->validate([
            'name.*' => 'required|string',
            'age.*' => 'required',
            'color.*' => 'required|string'
        ]);
        \DB::beginTransaction();
        try {
            $survey1 = Survey::find($id);
            $survey1->updated_at = \Carbon\Carbon::now()->toDateTimeString();
            $survey1->save();
            DogPopulation::where('survey_id', $survey1->id)->delete();
            for ($i=0; $i < count($request->get('name')); $i++) {
                # code...
                $dog = new DogPopulation;
                $dog->name = $request->get('name')[$i];
                $dog->age = $request->get('age')[$i].'-01';
                $dog->origin = $request->get('origin')[$i];
                $dog->breed = $request->get('breed')[$i];
                $dog->sex = $request->get('sex')[$i];
                $dog->color = $request->get('color')[$i];
                $dog->neutering = $request->get('neutering')[$i];
                $dog->survey_id = $survey1->id;
                $dog->save();
            }
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
            return redirect()->back()
            ->withErrors($e->getErrors())
            ->withInput();
        }
        return redirect()->back()->with('msg', 'Record updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DogPopulation  $dogPopulation
     * @return \Illuminate\Http\Response
     */
    public function destroy(DogPopulation $dogPopulation)
    {
        //
    }
}
