<?php

namespace App\Http\Controllers;

use App\Category;
use App\SurveyField;
use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;

class SuveryFieldController extends Controller
{
    //
    public function category($id)
    {
        $category = Category::find($id);
        return Datatables::of($category->fields())
            ->addColumn('actions', function ($field) {
                return '<a href="'.route('admin.survey-field.edit', $field->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="#" class="btn btn-xs btn-danger delete" data-id="'.$field->id.'" data-name="'.$field->name.'"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })
            ->addColumn('dynamic', function ($field) {
                return $field->is_dynamic ? 'Yes':'No';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['actions'])
            ->make(true);
    }
    public function index($id)
    {
        $category = Category::find($id);
        return view('admin.survey_field.index', compact('category'));
    }
    public function create($id)
    {
        $category = Category::find($id);
        return view('admin.survey_field.create', compact('category'));
    }
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'type' => 'required',
            'category_id' => 'required|exists:categories,id',
            'is_dynamic' => 'required'
        ]);
        $field = SurveyField::create($data);
        return redirect()->back()->with('name', $field->name);
    }
    public function edit($id)
    {
        $field = SurveyField::find($id);
        if (!$field) {
            abort(404);
        }
        return view('admin.survey_field.edit', compact('field'));
    }

    public function update($id)
    {
        $field = SurveyField::find($id);
        if (!$field) {
            abort(404);
        }
        $data = request()->validate([
            'name' => 'required',
            'type' => 'required',
            'is_dynamic' => 'required'
        ]);

        SurveyField::find($id)->update($data);
        $field = SurveyField::find($id);
        return redirect()->back()->with('name', $field->name);
    }
    public function destroy($id)
    {
        if (SurveyField::find($id)->delete()) {
        } else {
            abort(404);
        }
    }
}
