<?php

namespace App\Http\Controllers;

use App\Survey;
use App\SurveyCrop;
use App\VegetableCrop;
use Illuminate\Http\Request;

class CropsController extends Controller
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
            'vegetables_area.*' =>  'required|numeric|between:0,500.99',
            'vegetables.*' => 'required|string|min:2',
            'casava' => 'nullable',
            'casava_area' => 'required_if:casava,on|numeric|between:0,500.99',
            'mango' => 'nullable',
            'mango_trees' => 'required_if:mango,on|integer|between:0,501',
            'banana' => 'nullable',
            'banana_mats' => 'required_if:banana,on|integer|between:0,501',
            'cacao' => 'nullable',
            'cacao_trees' => 'required_if:cacao,on|integer|between:0,501',
            'coffee' => 'nullable',
            'coffee_trees' => 'required_if:coffee,on|integer|between:0,501',
            'camote' => 'nullable',
            'camote_area' => 'required_if:camote,on|numeric|between:0,500.99',
            'ubi' => 'nullable',
            'ubi_area' => 'required_if:ubi,on|numeric|between:0,500.99'

        ]);
        \DB::beginTransaction();
        try {
            $survey1 = new Survey;
            $survey1->house_hold_id = $request->get('house_hold_id');
            $survey1->type_id = $request->get('type_id');
            $survey1->surverior_id = auth()->id();
            $survey1->save();
            $survey = new SurveyCrop;
            $survey->casava = $request->get('casava') == 'on' ? true:false;
            $survey->casava_area = $request->get('casava_area');

            $survey->mango = $request->get('mango') == 'on' ? true:false;
            $survey->mango_trees = $request->get('mango_trees');
            $survey->banana = $request->get('banana') == 'on' ? true:false;
            $survey->banana_mats = $request->get('banana_mats');
            $survey->cacao = $request->get('cacao') == 'on' ? true:false;
            $survey->cacao_trees = $request->get('cacao_trees');
            $survey->coffee = $request->get('coffee') == 'on' ? true:false;
            $survey->coffee_trees = $request->get('coffee_trees');
            $survey->camote = $request->get('camote') == 'on' ? true:false;
            $survey->camote_area = $request->get('camote_area');
            $survey->carnava = $request->get('carnava') == 'on' ? true:false;
            $survey->carnava_trees = $request->get('carnava_trees');
            $survey->ubi = $request->get('ubi') == 'on' ? true:false;
            $survey->ubi_area = $request->get('ubi_area');
            $survey->survey_id = $survey1->id;
            $survey->save();
            for ($i=0; $i < count($request->get('vegetables')); $i++) {
                # code...
                $vegetables = new VegetableCrop;
                $vegetables->name =  $request->get('vegetables')[$i];
                $vegetables->area = $request->get('vegetables_area')[$i];
                $vegetables->crop_id = $survey->id;
                $vegetables->save();
            }
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
            return redirect()->back()
            ->withErrors($e->getErrors())
            ->withInput();
        }


        return redirect()->back()->with('msg', 'Record added succesfully');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        request()->validate([
            'vegetables_area.*' =>  'required|numeric|between:0,500.99',
            'vegetables.*' => 'required|string|min:2',
            'casava' => 'nullable',
            'casava_area' => 'required_if:casava,on|numeric|between:0,500.99',
            'mango' => 'nullable',
            'mango_trees' => 'required_if:mango,on|integer|between:0,501',
            'banana' => 'nullable',
            'banana_mats' => 'required_if:banana,on|integer|between:0,501',
            'cacao' => 'nullable',
            'cacao_trees' => 'required_if:cacao,on|integer|between:0,501',
            'coffee' => 'nullable',
            'coffee_trees' => 'required_if:coffee,on|integer|between:0,501',
            'camote' => 'nullable',
            'camote_area' => 'required_if:camote,on|numeric|between:0,500.99',
            'ubi' => 'nullable',
            'ubi_area' => 'required_if:ubi,on|numeric|between:0,500.99'

        ]);
        \DB::beginTransaction();
        try {
            $survey1 = Survey::find($id);
            $survey1->updated_at = \Carbon\Carbon::now()->toDateTimeString();
            $survey1->save();
            $survey = $survey1->crop_survey;
            $survey->casava = $request->get('casava') == 'on' ? true:false;
            $survey->casava_area = $request->get('casava_area');

            $survey->mango = $request->get('mango') == 'on' ? true:false;
            $survey->mango_trees = $request->get('mango_trees');
            $survey->banana = $request->get('banana') == 'on' ? true:false;
            $survey->banana_mats = $request->get('banana_mats');
            $survey->cacao = $request->get('cacao') == 'on' ? true:false;
            $survey->cacao_trees = $request->get('cacao_trees');
            $survey->coffee = $request->get('coffee') == 'on' ? true:false;
            $survey->coffee_trees = $request->get('coffee_trees');
            $survey->camote = $request->get('camote') == 'on' ? true:false;
            $survey->camote_area = $request->get('camote_area');
            $survey->carnava = $request->get('carnava') == 'on' ? true:false;
            $survey->carnava_trees = $request->get('carnava_trees');
            $survey->ubi = $request->get('ubi') == 'on' ? true:false;
            $survey->ubi_area = $request->get('ubi_area');
            $survey->survey_id = $survey1->id;
            $survey->save();
            VegetableCrop::where('crop_id', $survey->id)->delete();
            for ($i=0; $i < count($request->get('vegetables')); $i++) {
                # code...
                $vegetables = new VegetableCrop;
                $vegetables->name =  $request->get('vegetables')[$i];
                $vegetables->area = $request->get('vegetables_area')[$i];
                $vegetables->crop_id = $survey->id;
                $vegetables->save();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
