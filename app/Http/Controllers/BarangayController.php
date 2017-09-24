<?php

namespace App\Http\Controllers;

use App\Barangay;
use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;

class BarangayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        return Datatables::of(Barangay::all())
            ->addColumn('actions', function ($barangay) {
                return '<a href="'.route('admin.barangay.edit', $barangay->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="#" class="btn btn-xs btn-danger delete" data-id="'.$barangay->id.'" data-name="'.$barangay->name.'"><i class="glyphicon glyphicon-trash"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->rawColumns(['actions'])
            ->make(true);
    }
    public function index()
    {
        //
        return view('admin.barangay.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.barangay.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $barangay = request()->validate([
            'name' => 'required|min:5|unique:barangays,name',
            'description' => 'min:6',
        ]);
        $barangay = Barangay::create($barangay);
        return redirect()->back()->with('name', $barangay->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function show(Barangay $barangay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function edit(Barangay $barangay)
    {
        //
        return view('admin.barangay.edit', compact('barangay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barangay $barangay)
    {
        //
        request()->validate([
            'name' => 'required|min:5|unique:barangays,name,'.$barangay->id,
            'description' => 'min:6',
        ]);
        $barangay->name = $request->get('name');
        $barangay->description = $request->get('description');
        $barangay->save();
        return redirect()->back()->with('name', $barangay->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barangay $barangay)
    {
        //
    }
}
