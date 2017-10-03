@extends('surverior.layout.app')

@section('content')
 <section class="section main">
    <div class="container">
      <div class="columns">

        <div class="column is-12 ">

          <div class="box">
            <h1 class="title has-text-centered">
        Add Dog Population
      </h1>
        @php
      $household_id = Request::get('household_id');
      $type_id = Request::get('sub_category_id');
      @endphp
      <p>Name: <strong>{{ \App\Household::find($household_id)->fullname }} </strong></p>
      <p>Type: <strong>{{ \App\SubCategory::find($type_id)->name }} </strong></p>



       @if(session('msg'))
           <div class="notification is-success">
      <button class="delete" onclick="((this).parentNode.remove())"></button>
            {{ session('msg')}}
            </div>
          @endif
      @if($errors->any())
           <div class="notification is-danger">
      <button class="delete" onclick="((this).parentNode.remove())"></button>
             <ul>
              @foreach ($errors->all() as $error)
                  <li> <strong>{{ $error }}</strong></li>
              @endforeach
            </ul>
            </div>
          @endif

       <div class="field">
      <div class="control">
        <button class="button is-primary" id="addBtn">
          Add More Dog's
        </button>

      </div>

    </div>
    {{ Form::open(array('method' => 'POST', 'id' => 'add-household-form' , 'route' => 'dog.store'  )) }}
    <input type="hidden" name="house_hold_id" value="{{Request::get('household_id')}}">
<input type="hidden" name="type_id" value="{{ Request::get('sub_category_id')}}">
            <table class="table  is-striped is-narrow is-fullwidth" id="myTable">
  <thead>
    <tr>
      <th >Dog's Name</th>
      <th >Origin</th>
      <th >Breed</th>
      <th>Color</th>
      <th>Age</th>
      <th>Sex</th>
      <th>Neutering</th>
      <th></th>


    </tr>
  </thead>
  <tbody>
@if(!$errors->any())
        <tr>
      <td > <div class="field">

  <div class="control">
    <input class="input is-small" type="text" name="name[]" >
  </div>
</div>
</td>
      <td >
        <div class="field">
  <div class="control">
    <div class="select is-small">
      {{ Form::select('origin[]',['Local' => 'Local', 'Out-sider' => 'Out-sider'], null) }}

    </div>
  </div>
</div>
      </td>
      <td>
        <div class="field">
  <div class="control">
    <div class="select is-small">
      {{ Form::select('breed[]',['Mongrel Native' => 'Mongrel Native', 'Exotic Specify' => 'Exotic Specify'], null) }}

    </div>
  </div>
</div>
      </td>
      <td>
        <div class="field is-narrow">

  <div class="control">
    <input class="input is-small is-narrow" type="text" name="color[]" >
  </div>
</div>
      </td>
 <td>
        <div class="field is-narrow">

  <div class="control">
    <input class="input is-small is-narrow" type="month" name="age[]" value="2017-01-01" >
  </div>
</div>
      </td>
       <td>
        <div class="field">
  <div class="control">
    <div class="select is-small">
      {{ Form::select('sex[]',['M' => 'M', 'F' => 'F'],null) }}
    </div>
  </div>
</div>
      </td>
<td>
        <div class="field">
  <div class="control">
    <div class="select is-small">

      {{ Form::select('neutering[]',['Castrated' => 'Castrated', 'Intact' => 'Intact', 'Spayed' => 'Spayed'], null) }}
    </div>
  </div>
</div>
      </td>

      <td >
        <p class="field is-small">



</p>
      </td>
    </tr>
@endif
@if($errors->any())
@for ($i = 0; $i < count(old('name')); $i++)

     <tr>
      <td > <div class="field">

  <div class="control">
    <input class="input is-small" type="text" name="name[]" value="{{ old('name')[$i]}}">
  </div>
</div>
</td>
      <td >
        <div class="field">
  <div class="control">
    <div class="select is-small">
      {{ Form::select('origin[]',['Local' => 'Local', 'Out-sider' => 'Out-sider'], old('origin')[$i]) }}

    </div>
  </div>
</div>
      </td>
      <td>
        <div class="field">
  <div class="control">
    <div class="select is-small">
      {{ Form::select('breed[]',['Mongrel Native' => 'Mongrel Native', 'Exotic Specify' => 'Exotic Specify'], old('breed')[$i]) }}

    </div>
  </div>
</div>
      </td>
      <td>
        <div class="field is-narrow">

  <div class="control">
    <input class="input is-small is-narrow" type="text" name="color[]" value="{{old('color')[$i]}}">
  </div>
</div>
      </td>
 <td>
        <div class="field is-narrow">

  <div class="control">
    <input class="input is-small is-narrow" type="month" name="age[]" value="{{ old('age')[$i]}}">
  </div>
</div>
      </td>
       <td>
        <div class="field">
  <div class="control">
    <div class="select is-small">
      {{ Form::select('sex[]',['M' => 'M', 'F' => 'F'],old('sex')[$i]) }}
    </div>
  </div>
</div>
      </td>
<td>
        <div class="field">
  <div class="control">
    <div class="select is-small">

      {{ Form::select('neutering[]',['Castrated' => 'Castrated', 'Intact' => 'Intact', 'Spayed' => 'Spayed'],old('neutering')[$i]) }}
    </div>
  </div>
</div>
      </td>

      <td >
        <p class="field is-small">

@if($i > 0)
  <a class="button delete-btn is-danger is-outlined is-small">
    <span class="icon is-small">
      <i class="fa fa-times"></i>
    </span>
  </a>
  @endif
</p>
      </td>
    </tr>
@endfor

@endif
  </tbody>
  <tfoot>

  </tfoot>
  <tbody>

  </tbody>
</table>
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
{{ Form::close()}}


          </div>
        </div>

      </div>
    </div>
  </section>
@stop
@section('scripts')
  <script type="text/javascript">
    var dog_input="";
dog_input += "<tr>";
dog_input += "      <td> <div class=\"field\">";
dog_input += "";
dog_input += "  <div class=\"control\">";
dog_input += "    <input class=\"input is-small\" type=\"text\" name=\"name[]\" value=\"\">";
dog_input += "  <\/div>";
dog_input += "<\/div>";
dog_input += "<\/td>";
dog_input += "      <td>";
dog_input += "        <div class=\"field\">";
dog_input += "  <div class=\"control\">";
dog_input += "    <div class=\"select is-small\">";
dog_input += "      <select name=\"origin[]\"><option value=\"Local\">Local<\/option><option value=\"Out-sider\">Out-sider<\/option><\/select>";
dog_input += "";
dog_input += "    <\/div>";
dog_input += "  <\/div>";
dog_input += "<\/div>";
dog_input += "      <\/td>";
dog_input += "      <td>";
dog_input += "        <div class=\"field\">";
dog_input += "  <div class=\"control\">";
dog_input += "    <div class=\"select is-small\">";
dog_input += "      <select name=\"breed[]\"><option value=\"Mongrel Native\">Mongrel Native<\/option><option value=\"Exotic Specify\">Exotic Specify<\/option><\/select>";
dog_input += "";
dog_input += "    <\/div>";
dog_input += "  <\/div>";
dog_input += "<\/div>";
dog_input += "      <\/td>";
dog_input += "      <td>";
dog_input += "        <div class=\"field is-narrow\">";
dog_input += "";
dog_input += "  <div class=\"control\">";
dog_input += "    <input class=\"input is-small is-narrow\" type=\"text\" name=\"color[]\" value=\"\">";
dog_input += "  <\/div>";
dog_input += "<\/div>";
dog_input += "      <\/td>";
dog_input += " <td>";
dog_input += "        <div class=\"field is-narrow\">";
dog_input += "";
dog_input += "  <div class=\"control\">";
dog_input += "    <input class=\"input is-small is-narrow\" type=\"month\" name=\"age[]\" value=\"\">";
dog_input += "  <\/div>";
dog_input += "<\/div>";
dog_input += "      <\/td>";
dog_input += "       <td>";
dog_input += "        <div class=\"field\">";
dog_input += "  <div class=\"control\">";
dog_input += "    <div class=\"select is-small\">";
dog_input += "      <select name=\"sex[]\"><option value=\"M\">M<\/option><option value=\"F\">F<\/option><\/select>";
dog_input += "    <\/div>";
dog_input += "  <\/div>";
dog_input += "<\/div>";
dog_input += "      <\/td>";
dog_input += "<td>";
dog_input += "        <div class=\"field\">";
dog_input += "  <div class=\"control\">";
dog_input += "    <div class=\"select is-small\">";
dog_input += "";
dog_input += "      <select name=\"neutering[]\"><option value=\"Castrated\">Castrated<\/option><option value=\"Intact\">Intact<\/option><option value=\"Spayed\">Spayed<\/option><\/select>";
dog_input += "    <\/div>";
dog_input += "  <\/div>";
dog_input += "<\/div>";
dog_input += "      <\/td>";
dog_input += "";
dog_input += "      <td>";
dog_input += "        <p class=\"field is-small\">";
dog_input += "";
dog_input += "";
dog_input += "  <a class=\"button delete-btn is-danger is-outlined is-small\">";
dog_input += "    <span class=\"icon is-small\">";
dog_input += "      <i class=\"fa fa-times\"><\/i>";
dog_input += "    <\/span>";
dog_input += "  <\/a>";
dog_input += "<\/p>";
dog_input += "      <\/td>";
dog_input += "    <\/tr>";

    $('#addBtn').click( function(e){
      e.preventDefault();
      $('#myTable tr:last').after(dog_input);
    });

     $('#myTable').on("click",".delete-btn", function(e){
            e.preventDefault();
            $(this).parents("tr").remove();

        });
  </script>
@stop
