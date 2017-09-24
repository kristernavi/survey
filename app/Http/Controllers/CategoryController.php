<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        return Datatables::of(Category::all())
            ->addColumn('actions', function ($category) {
                return '<a href="'.route('admin.category.edit', $category->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="#" class="btn btn-xs btn-danger delete" data-id="'.$category->id.'" data-name="'.$category->name.'"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['actions'])
            ->make(true);
    }
    public function index()
    {
        //
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.create');
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
            'name'  => 'required|unique:categories',
            'description' => 'nullable|min:6',
        ]);
        $category = Category::create($data);
        return redirect()->back()->with('name', $category->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $data = request()->validate([
            'name'  => 'required|unique:categories,id,'.$category->id,
            'description' => 'nullable|min:6',
        ]);
        $id = $category->id;
        $category = $category->update($data);

        return redirect()->back()->with('name', Category::find($id)->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        if ($category->delete()) {
        } else {
            abort(401);
        }
    }
}
