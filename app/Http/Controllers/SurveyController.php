<?php

namespace App\Http\Controllers;

use App\HouseHold;
use App\SubCategory;
use App\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    //

    public function index()
    {
        $survies = auth()->user()->survies()->paginate(10);
        return view('surverior.survey.index', compact('survies'));
    }
    public function edit($id)
    {
        $survey = Survey::find($id);
        if ($survey->type_id == 1) {
            return view('surverior.survey.crop_edit', compact('survey'));
        } else {
            return view('surverior.survey.dog_edit', compact('survey'));
        }
    }
    public function step1()
    {
        $sub_categories = SubCategory::pluck('name', 'id');
        return view('surverior.survey.add_step1', compact('sub_categories'));
    }
    public function step2()
    {
        $data = request()->validate([
            'sub_category_id' => 'required|exists:sub_categories,id',
            'household_id' => 'required|exists:house_holds,id'
        ]);
        if ($data['sub_category_id'] == 1) {
            return view('surverior.survey.add_step2');
        } else {
            return view('surverior.survey.dog_population_add');
        }
    }
    public function households()
    {
        return HouseHold::selectRaw("id, CONCAT(firstname, ' ', middlename ,' ', lastname)  AS value")->get();
    }
}
