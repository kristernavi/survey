@extends('surverior.layout.app')



@section('content')
 <section class="section main">
    <div class="container">
      <div class="columns">

        <div class="column is-12 ">

          <div class="box">
            <h1 class="title has-text-centered">
        Add Household
      </h1>
 {{ Form::open(array('method' => 'POST', 'id' => 'add-household-form' , 'route' => 'house-hold.store'  )) }}
  <div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Name</label>
  </div>
  <div class="field-body">
    <div class="field">
      <div class="control is-expanded has-icons-left">
        <input class="input {{ $errors->has('firstname') ? ' is-danger' : '' }}" type="text" placeholder="Firstname" name="firstname" value="{{ old('firstname')}}">
        <span class="icon is-small is-left">
          <i class="fa fa-user"></i>
        </span>
      </div>
       @if ($errors->has('firstname'))
        <p class="help is-danger">
        {{ $errors->first('firstname') }}
        </p>
         @endif

    </div>
     <div class="field">
      <p class="control is-expanded has-icons-left">
        <input class="input {{ $errors->has('middlename') ? ' is-danger' : '' }}" type="text" placeholder="Middlename" {{ $errors->has('middlename') ? ' is-danger' : '' }} name="middlename" value="{{ old('middlename')}}">
        <span class="icon is-small is-left">
          <i class="fa fa-user"></i>
        </span>
      </p>
       @if ($errors->has('middlename'))
        <p class="help is-danger">
        {{ $errors->first('middlename') }}
        </p>
         @endif
    </div>
     <div class="field">
      <p class="control is-expanded has-icons-left">
        <input class="input {{ $errors->has('lastname') ? ' is-danger' : '' }}" type="text" placeholder="Lastname" name="lastname" value="{{ old('lastname')}}">
        <span class="icon is-small is-left">
          <i class="fa fa-user"></i>
        </span>
      </p>
      @if ($errors->has('lastname'))
        <p class="help is-danger">
        {{ $errors->first('lastname') }}
        </p>
         @endif
    </div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Age</label>
  </div>
  <div class="field-body">
    <div class="field is-narrow"">
      <p class="control is-expanded has-icons-left">
        <input class="input {{ $errors->has('age') ? ' is-danger' : '' }}" type="text" placeholder="Age" name="age" value="{{ old('age')}}">
        <span class="icon is-small is-left">
          <i class="fa fa-user"></i>
        </span>
      </p>
       @if ($errors->has('age'))
        <p class="help is-danger">
        {{ $errors->first('age') }}
        </p>
         @endif
    </div>

  </div>
</div>



<div class="field is-horizontal">
  <div class="field-label">
    <label class="label">Gender</label>
  </div>
  <div class="field-body">
    <div class="field is-narrow">
      <div class="control">
        <label class="radio">
          <input type="radio" name="gender" value="m" checked>
          Male
        </label>
        <label class="radio">
          <input type="radio" name="gender" value="f">
          Female
        </label>
      </div>
    </div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Barangay</label>
  </div>
  <div class="field-body">
    <div class="field is-narrow">
      <div class="control">
        <div class="select is-fullwidth {{ $errors->has('barangay_id') ? ' is-danger' : '' }}">

          {{ Form::select('barangay_id',$barangay,old('barangay_id'), ['placeholder' => 'Select Barangay'])}}
        </div>
         @if ($errors->has('barangay_id'))
        <p class="help is-danger">
        {{ str_replace(array("barangay_id"), "barangay", $errors->first('barangay_id')) }}
        </p>
         @endif
      </div>

    </div>
  </div>

</div>
<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Purok</label>
  </div>
  <div class="field-body">
    <div class="field is-narrow">
      <div class="control">
        <div class="select is-fullwidth {{ $errors->has('purok_id') ? ' is-danger' : '' }}">

          {{ Form::select('purok_id',$purok,old('purok_id'), ['placeholder' => 'Select Purok'])}}

        </div>
        @if ($errors->has('purok_id'))
        <p class="help is-danger">
        {{ str_replace(array("purok_id"), "purok", $errors->first('purok_id')) }}
        </p>
         @endif
      </div>
    </div>
  </div>

</div>


<div class="field is-horizontal">
  <div class="field-label">
    <!-- Left empty for spacing -->
  </div>
  <div class="field-body">
    <div class="field">
      <div class="control">
        <button class="button is-primary">
          Submit
        </button>
        <a class="button is-danger" type="button" href="{{ route('house-hold.index')}}">
          Cancel
        </a>
      </div>

    </div>


  </div>


</div>
{{ Form::close()}}



          </div>
        </div>

      </div>
    </div>
  </section>
@stop

