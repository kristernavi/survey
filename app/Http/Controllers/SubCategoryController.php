<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;

class SubCategoryController extends Controller
{
    //
    public function all()
    {
        return Datatables::of(SubCategory::all())
            ->addColumn('actions', function ($category) {
                return '<a href="'.route('admin.sub-category.edit', $category->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="#" class="btn btn-xs btn-danger delete" data-id="'.$category->id.'" data-name="'.$category->name.'"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })
            ->addColumn('parent', function ($category) {
                return $category->parent->name;
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['actions'])
            ->make(true);
    }
    public function index()
    {
        return view('admin.sub_category.index');
    }
    public function create()
    {
        $category = Category::pluck('name', 'id');

        return view('admin.sub_category.create', compact('category'));
    }
    public function store()
    {
        $data = request()->validate([
            'name'  => 'required|unique:sub_categories',
            'description' => 'nullable|min:6',
            'category_id'   => 'required|exists:categories,id'
        ]);
        $category = SubCategory::create($data);
        return redirect()->back()->with('name', $category->name);
    }
    public function edit($id)
    {
        $category = Category::pluck('name', 'id');
        $subCategory = SubCategory::find($id);
        return view('admin.sub_category.edit', compact(['category','subCategory']));
    }
    public function update($id)
    {
        $data = request()->validate([
            'name'  => 'required|unique:sub_categories,id,'.$id,
            'description' => 'nullable|min:6',
            'category_id'   => 'required|exists:categories,id'
        ]);
        SubCategory::where('id', $id)->update($data);
        $category = SubCategory::find($id);
        return redirect()->back()->with('name', $category->name);
    }
    public function destory($id)
    {
        if (SubCategory::find($id)->delete()) {
        } else {
            abort(401);
        }
    }
}
