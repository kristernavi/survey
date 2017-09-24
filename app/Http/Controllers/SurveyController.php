<?php

namespace App\Http\Controllers;

use App\HouseHold;
use App\SubCategory;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    //

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
        return view('surverior.survey.add_step2');
    }
    public function households()
    {
        return HouseHold::selectRaw("id, CONCAT(firstname, ' ', middlename ,' ', lastname)  AS value")->get();
    }
}
