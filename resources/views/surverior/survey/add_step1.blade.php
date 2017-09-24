@extends('surverior.layout.app')
@section('styles')
  <style type="text/css">
    .dropdown-menu {
      background-color: #f0f0ee;
      width: 100%;
    }
  </style>
@stop
@section('content')
 <section class="section main">
    <div class="container">
      <div class="column is-12">


        <div class="column is-12 ">
          <div class="tile is-ancestor">
  <div class="tile is-2">
    <!-- 1/3 -->
  </div>
  <div class="tile is-parent is-vertical">
    <!-- This tile will take the rest: 2/3 -->
       <div class="box">

        {{ Form::open(array('method' => 'GET', 'id' => 'add-household-form' , 'route' => 'survey.add.step2'  )) }}
        <input type="hidden" name="household_id" id="household">
  <div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Name</label>
  </div>
  <div class="field-body">
    <div class="field">
      <div class="control is-expanded has-icons-left">
         <input class="typeahead input is-medium {{ $errors->has('household_id') ? ' is-danger' : '' }}" type="text" id="name" name="name" type="text" placeholder="Search a name..." autocomplete="off">
        <span class="icon is-small is-left">
          <i class="fa fa-user"></i>
        </span>
      </div>
       @if ($errors->has('household_id'))
        <p class="help is-danger">
        {{ str_replace(array("household id"), "name", $errors->first('household_id')) }}
        </p>
         @endif

    </div>

  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Sub Category</label>
  </div>
<div class="field-body">
    <div class="field ">
      <div class="control">
        <div class="select is-fullwidth is-medium {{ $errors->has('sub_category_id') ? ' is-danger' : '' }}">

          {{ Form::select('sub_category_id',$sub_categories,old('sub_category_id'), ['placeholder' => 'Select Sub Category'])}}

        </div>
        @if ($errors->has('sub_category_id'))
        <p class="help is-danger">
        {{ str_replace(array("sub category id"), "sub category", $errors->first('sub_category_id')) }}
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
  <div class="tile is-2">
    <!-- 1/3 -->
  </div>



        </div>
</div>
      </div>
    </div>
  </section>
@stop
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript">
    var path = "{{ route('survey.household.autocomplete') }}";
    $('input.typeahead').typeahead({
        items: 4,
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        },
        autoSelect: true,
        displayText: function(item){ return item.value;},
        afterSelect: function(selected, element) {
                   $('#household').val(selected.id);
                }
    });
</script>
@stop
