@extends('admin.layout.app')
@section('styles')
    <link href="{{ url('/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">


    <!-- Select2 -->
    <link href="{{ url('/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ url('/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">


@endsection
@section('content')
 <!-- page content -->

  <div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Add User</h2>
          <ul class="nav navbar-right panel_toolbox"></ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">


            @if($errors->any())
            <div class="alert alert-danger">
             <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
            </div>
          @endif
          @if(session('name'))
                <div class="alert alert-success">
                {{ session('name') }} successfully updated <a href={{ route('admin.user.index')}}>Click here to view </a>
                </div>
          @endif


          {{ Form::open(array('method' => 'PUT', 'id' => 'edit-user-form' ,'url' => route('admin.user.update', $user->id)  , 'class' => 'form-horizontal form-label-left')) }}

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Firstname</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" class="form-control" placeholder="Firstname" name="firstname" value="{{ old('firstname',$user->firstname)}}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Middlename</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" class="form-control" placeholder="Middlename" name="middlename" value="{{ old('middlename',$user->middlename)}}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lastname</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" class="form-control" placeholder="Lastname" name="lastname" value="{{ old('lastname',$user->lastname)}}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="email" class="form-control" placeholder="Email Addres" name="email" value="{{ old('email', $user->email)}}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              {{ Form::select('type',['surverior' => 'Surverior' , 'admin' => 'Admin'], old('type' ,$user->type),['class' => 'form-control'])}}
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
          <div class="col-md-12 col-sm-12col-xs-12 text-center">
            <a href="{{ route('admin.user.index')}}" role="button" type="button" class="btn btn-danger" >Cancel</a>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
          </div>

          {{ Form::close() }}
        </div>
      </div>
    </div>

  </div>
        <!-- /page content -->
<div id="add-user-modal" class="modal fade"></div>
<div id="edit-user-modal" class="modal fade"></div>
<div id="view-user-modal" class="modal fade"></div>


@endsection

