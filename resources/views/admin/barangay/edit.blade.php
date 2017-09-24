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
          <h2>Edit Barangay</h2>
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
                {{ session('name') }} successfully updated <a href={{ route('admin.barangay.index')}}>Click here to view </a>
                </div>
          @endif


          {{ Form::open(array('method' => 'PUT', 'id' => 'edit-barangay-form' ,'url' => route('admin.barangay.update', $barangay->id)  , 'class' => 'form-horizontal form-label-left')) }}

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name',$barangay->name)}}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
            <div class="col-md-6 col-sm-6 col-xs-12">

              <textarea class="form-control" placeholder="Description" name="description">{{ old('description', $barangay->description)}} </textarea>
            </div>
          </div>


          <div class="ln_solid"></div>
          <div class="form-group">
          <div class="col-md-12 col-sm-12col-xs-12 text-center">
            <a href="{{ route('admin.barangay.index')}}" role="button" type="button" class="btn btn-danger" >Cancel</a>
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

