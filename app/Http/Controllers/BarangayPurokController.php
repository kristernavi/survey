<?php

namespace App\Http\Controllers;

use App\Barangay;
use App\BarangayPurok;
use App\Purok;
use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;

class BarangayPurokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        return Datatables::of(BarangayPurok::all())
            ->addColumn('actions', function ($barangay_purok) {
                return '<a href="'.route('admin.barangay-purok.edit', [$barangay_purok->barangay_id, $barangay_purok->purok_id]).'" class="btn btn-xs btn-primary" ><i class="glyphicon glyphicon-edit" ></i> Edit</a>
                    <a href="#" class="btn btn-xs btn-danger delete" data-name="'.$barangay_purok->barangay->name.' Purok '.$barangay_purok->purok->number.'" data-barangay="'.$barangay_purok->barangay_id.'" data-purok="'.$barangay_purok->purok_id.'"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })
            ->addColumn('barangay', function ($barangay_purok) {
                return $barangay_purok->barangay->name;
            })
            ->addColumn('purok', function ($barangay_purok) {
                return $barangay_purok->purok->number;
            })
            ->removeColumn('password')
            ->rawColumns(['actions'])
            ->make(true);
    }
    public function index()
    {
        //
        return view('admin.barangay_purok.index');
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
        return view('admin.barangay_purok.create', compact(['barangay','purok']));
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
        $barangay_purok = request()->validate([
            'barangay_id' => 'required|exists:barangays,id',
            'purok_id' => 'required|exists:puroks,id',
        ]);
        $barangay_purok = BarangayPurok::firstOrNew($barangay_purok)->save();

        return redirect()->back()->with('name', $barangay_purok);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BarangayPurok  $barangayPurok
     * @return \Illuminate\Http\Response
     */
    public function show(BarangayPurok $barangayPurok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BarangayPurok  $barangayPurok
     * @return \Illuminate\Http\Response
     */
    public function edit($barangay_id, $purok_id)
    {
        //
        $barangay = Barangay::pluck('name', 'id');
        $purok = Purok::pluck('number', 'id');
        $barangay_purok = BarangayPurok::where('barangay_id', $barangay_id)->where('purok_id', $purok_id)->first();
        if (!$barangay_purok) {
            abort(404);
        }
        return view('admin.barangay_purok.edit', compact(['barangay','purok','barangay_purok']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BarangayPurok  $barangayPurok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $barangay_id, $purok_id)
    {
        //
        $barangay_purok = BarangayPurok::where('barangay_id', $barangay_id)->where('purok_id', $purok_id)->first();
        if (!$barangay_purok) {
            abort(404);
        }
        $data = request()->validate([
            'barangay_id' => 'required|exists:barangays,id',
            'purok_id' => 'required|exists:puroks,id',
        ]);
        $barangay_purok = BarangayPurok::where('barangay_id', $barangay_id)->where('purok_id', $purok_id)->update($data);
        $barangay_purok = BarangayPurok::where('barangay_id', $data['barangay_id'])->where('purok_id', $data['purok_id'])->first();

        return redirect(route('admin.barangay-purok.edit', [$barangay_purok->barangay_id,$barangay_purok->purok_id]))->with('name', ucFirst($barangay_purok->barangay->name));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BarangayPurok  $barangayPurok
     * @return \Illuminate\Http\Response
     */
    public function destroy($barangay_id, $purok_id)
    {
        //
        $barangay_purok = BarangayPurok::where('barangay_id', $barangay_id)->where('purok_id', $purok_id);
        if ($barangay_purok->delete()) {
        } else {
            abort(404);
        }
    }
}
