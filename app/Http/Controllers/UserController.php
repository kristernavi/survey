<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        return Datatables::of(User::all())
            ->addColumn('actions', function ($user) {
                return '<a href="'.route('admin.user.edit', $user->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="#" class="btn btn-xs btn-danger delete" data-id="'.$user->id.'" data-name="'.$user->fullname.'"><i class="glyphicon glyphicon-trash"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->rawColumns(['actions'])
            ->make(true);
    }
    public function index()
    {
        //
        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.user.create');
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
        $user = request()->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'type'  => 'required|in:admin,surverior',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user['password'] = bcrypt($user['password']);
        $user = User::create($user);
        return redirect()->back()->with('name', $user->fullname);
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
        $user = User::find($id);
        if (!$user) {
            abort(404);
        }
        return view('admin.user.edit', compact('user'));
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
        $user = User::find($id);
        if (!$user) {
            abort(404);
        }
        //
        request()->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'type'  => 'required|in:admin,surverior',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->type = $request->get('type');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();
        return redirect()->back()->with('name', $user->fullname);
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
        if (User::find($id)->delete()) {
        }
    }
}
