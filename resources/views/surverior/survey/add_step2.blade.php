@extends('surverior.layout.app')



@section('content')
 <section class="section main">
    <div class="container">
      <div class="columns">

        <div class="column is-10 ">

          <div class="box">
            <h1 class="title has-text-centered">
        Add Crop Survey
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


 {{ Form::open(array('method' => 'POST', 'id' => 'add-household-form' , 'route' => 'crops.store'  )) }}
 <input type="hidden" name="house_hold_id" value="{{Request::get('household_id')}}">
<input type="hidden" name="type_id" value="{{ Request::get('sub_category_id')}}">
 <div class="field is-horizontal">
  <div class="field-label">
    <!-- Left empty for spacing -->
  </div>
  <div class="field-body">
    <div class="field">
      <div class="control">
        <button class="button is-primary" id="add-vetetables">
          Add Vegetables
        </button>

      </div>

    </div>


  </div>


</div>
<div class="field container2">
@if($errors->any())
@for ($i = 0; $i < count(old('vegetables')); $i++)

  <div class="field is-horizontal ">
  <div class="field-label is-normal">
    <label class="label">Vegetables</label>
  </div>
  <div class="field-body ">
    <div class="field is-narrow">
      <div class="control is-expanded has-icons-left">
        <input class="input " type="text" placeholder="Vegetables" name="vegetables[]" value="{{old('vegetables')[$i]}}">
        <span class="icon is-small is-left">
          <i class="fa fa-leaf"></i>
        </span>
      </div>


    </div>
     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input" type="number" min="0.1" step="0.1" placeholder="Area" name="vegetables_area[]" value="{{old('vegetables_area')[$i]}}">
        <span class="icon is-small is-left">
          <i class="fa fa-area-chart"></i>
        </span>
      </p>

    </div>
  @if($i > 0)
  <div class="field-body">    <div class="field is-narrow">      <div class="control">        <button class="button is-danger delete-vegetable">         X        </button>      </div>    </div>  </div>
  @endif
  </div>

</div>
@endfor
@else
   <div class="field is-horizontal ">
  <div class="field-label is-normal">
    <label class="label">Vegetables</label>
  </div>
  <div class="field-body ">
    <div class="field is-narrow">
      <div class="control is-expanded has-icons-left">
        <input class="input " type="text" placeholder="Vegetables" name="vegetables[]" value="">
        <span class="icon is-small is-left">
          <i class="fa fa-leaf"></i>
        </span>
      </div>


    </div>
     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input" type="number" min="0.1" step="0.1" placeholder="Area" name="vegetables_area[]" >
        <span class="icon is-small is-left">
          <i class="fa fa-area-chart"></i>
        </span>
      </p>

    </div>

  </div>
</div>
@endif
</div>

<div class="field ">

   <div class="field is-horizontal ">
  <div class="field-label is-normal">
    <label class="label">Casava</label>
  </div>
  <div class="field-body ">
    <div class="field is-narrow" style="margin-top: 7px;">


<div class="field">
  <input id="casava" type="checkbox"  class="switch is-medium"  name="casava" {{ old('casava') ? 'checked':''}} >
  <label for="casava"></label>
</div>

    </div>

     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input associate-input" type="number" min="0.1" step="0.1" {{ old('casava') ? '':'disabled'}} placeholder="Area" name="casava_area" value="{{ old('casava_area')}}">
        <span class="icon is-small is-left">
          <i class="fa fa-area-chart"></i>
        </span>
      </p>

    </div>

  </div>
</div>
</div>
<div class="field ">

   <div class="field is-horizontal ">
  <div class="field-label is-normal">
    <label class="label">Mango</label>
  </div>
  <div class="field-body ">
    <div class="field is-narrow" style="margin-top: 7px;">


<div class="field">
  <input id="mango" type="checkbox" class="switch is-medium"  name="mango" {{ old('mango') ? 'checked':''}}>
  <label for="mango"></label>
</div>

    </div>

     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input associate-input" type="number" min="1"  {{ old('mango') ? '':'disabled'}} placeholder="No. of trees" name="mango_trees" value="{{old('mango_trees')}}" >
        <span class="icon is-small is-left">
          <i class="fa fa-area-chart"></i>
        </span>
      </p>

    </div>

  </div>
</div>
</div>
<div class="field ">

   <div class="field is-horizontal ">
  <div class="field-label is-normal">
    <label class="label">Banana</label>
  </div>
  <div class="field-body ">
    <div class="field is-narrow" style="margin-top: 7px;">


<div class="field">
  <input id="banana" type="checkbox" class="switch is-medium"  name="banana" {{ old('banana') ? 'checked':''}}>
  <label for="banana"></label>
</div>

    </div>

     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input associate-input" type="number" min="1"  {{ old('banana') ? '':'disabled'}} placeholder="No. of mats" name="banana_mats" value="{{old('banana_mats')}}">
        <span class="icon is-small is-left">
          <i class="fa fa-area-chart"></i>
        </span>
      </p>

    </div>

  </div>
</div>
</div>
<div class="field ">

   <div class="field is-horizontal ">
  <div class="field-label is-normal">
    <label class="label">Cacao</label>
  </div>
  <div class="field-body ">
    <div class="field is-narrow" style="margin-top: 7px;">


<div class="field">
  <input id="cacao" type="checkbox" class="switch is-medium"  name="cacao" {{ old('cacao') ? 'checked':''}}>
  <label for="cacao"></label>
</div>

    </div>

     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input associate-input" type="number" min="1"  placeholder="No. of trees" name="cacao_trees" {{ old('cacao') ? '':'disabled'}} value="{{old('cacao_trees')}}">
        <span class="icon is-small is-left">
          <i class="fa fa-area-chart"></i>
        </span>
      </p>

    </div>

  </div>
</div>
</div>
<div class="field ">

   <div class="field is-horizontal ">
  <div class="field-label is-normal">
    <label class="label">Coffee</label>
  </div>
  <div class="field-body ">
    <div class="field is-narrow" style="margin-top: 7px;">


<div class="field">
  <input id="coffee" type="checkbox"  class="switch is-medium"  name="coffee" {{ old('coffee') ? 'checked':''}}>
  <label for="coffee"></label>
</div>

    </div>

     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input associate-input" type="number" min="1" placeholder="No. of trees" name="coffee_trees" {{ old('coffee') ? '':'disabled'}} value="{{old('coffee_trees')}}">
        <span class="icon is-small is-left">
          <i class="fa fa-area-chart"></i>
        </span>
      </p>

    </div>

  </div>
</div>
</div>
<div class="field ">

   <div class="field is-horizontal ">
  <div class="field-label is-normal">
    <label class="label">Caranava</label>
  </div>
  <div class="field-body ">
    <div class="field is-narrow" style="margin-top: 7px;">


<div class="field">
  <input id="carnava" type="checkbox" class="switch is-medium"  name="carnava" {{ old('carnava') ? 'checked':''}}>
  <label for="carnava"></label>
</div>

    </div>

     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input associate-input" type="number" min="1" placeholder="No. of trees" name="carnava_trees" {{ old('carnava') ? '':'disabled'}} value="{{old('carnava_trees')}}">
        <span class="icon is-small is-left">
          <i class="fa fa-area-chart"></i>
        </span>
      </p>

    </div>

  </div>
</div>
</div>
<div class="field ">

   <div class="field is-horizontal ">
  <div class="field-label is-normal">
    <label class="label">Camote</label>
  </div>
  <div class="field-body ">
    <div class="field is-narrow" style="margin-top: 7px;">


<div class="field">
  <input id="camote" type="checkbox"  class="switch is-medium"  name="camote" {{ old('camote') ? 'checked':''}} >
  <label for="camote"></label>
</div>

    </div>

     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input associate-input" type="number" min="0.1" step="0.1" {{ old('camote') ? '':'disabled'}} placeholder="Area" name="camote_area" value="{{old('camote_area')}}" >
        <span class="icon is-small is-left">
          <i class="fa fa-area-chart"></i>
        </span>
      </p>

    </div>

  </div>
</div>
</div>

<div class="field ">

   <div class="field is-horizontal ">
  <div class="field-label is-normal">
    <label class="label">Ubi</label>
  </div>
  <div class="field-body ">
    <div class="field is-narrow" style="margin-top: 7px;">


<div class="field">
  <input id="ubi" type="checkbox"  class="switch is-medium"  name="ubi" {{ old('ubi') ? 'checked':''}}>
  <label for="ubi"></label>
</div>

    </div>

     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input associate-input" type="number" min="0.1" step="0.1"  {{ old('ubi') ? '':'disabled'}} placeholder="Area" name="ubi_area" value="{{old('ubi_area')}}">
        <span class="icon is-small is-left">
          <i class="fa fa-area-chart"></i>
        </span>
      </p>

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
@section('scripts')
  <script type="text/javascript">
var vegetables="";
vegetables += " <div class=\"field is-horizontal\">";
vegetables += "  <div class=\"field-label is-normal\">";
vegetables += "    <label class=\"label\">Vegetables<\/label>";
vegetables += "  <\/div>";
vegetables += "  <div class=\"field-body\">";
vegetables += "    <div class=\"field is-narrow\">";
vegetables += "      <div class=\"control is-expanded has-icons-left\">";
vegetables += "        <input class=\"input \" type=\"text\"  placeholder=\"Vegetables\" name=\"vegetables[]\" >";
vegetables += "        <span class=\"icon is-small is-left\">";
vegetables += "          <i class=\"fa fa-leaf\"><\/i>";
vegetables += "        <\/span>";
vegetables += "      <\/div>";
vegetables += "";
vegetables += "";
vegetables += "    <\/div>";
vegetables += "     <div class=\"field is-narrow\">";
vegetables += "      <p class=\"control is-expanded has-icons-left\">";
vegetables += "        <input class=\"input \" type=\"number\" min=\"0.1\" step=\"0.1\" placeholder=\"Area\" name=\"vegetables_area[]\" >";
vegetables += "        <span class=\"icon is-small is-left\">";
vegetables += "          <i class=\"fa fa-area-chart\"><\/i>";
vegetables += "        <\/span>";
vegetables += "      <\/p>";
vegetables += "";
vegetables += "    <\/div>";
vegetables += "      <div class=\"field-body\">";
vegetables += "    <div class=\"field is-narrow\">";
vegetables += "      <div class=\"control\">";
vegetables += "        <button class=\"button is-danger delete-vegetable\">";
vegetables += "         X";
vegetables += "        <\/button>";
vegetables += "";
vegetables += "      <\/div>";
vegetables += "";
vegetables += "    <\/div>";
vegetables += "";
vegetables += "";
vegetables += "  <\/div>";
vegetables += "  <\/div>";
vegetables += "<\/div>";



 var max_fields      = 10;
        var wrapper         = $(".container2");
        var add_button      = $("#add-vetetables");

        var x = 1;
        $(add_button).click(function(e){
            e.preventDefault();
            if(x < max_fields){
                x++;
                $(wrapper).append(vegetables); //add input box
            }
      else
      {
      alert('You Reached the limits')
      }
        });

        $(wrapper).on("click",".delete-vegetable", function(e){
            e.preventDefault();
            $(this).closest('.is-horizontal').remove(); x--;
        })




$("input:checkbox").on("change", function () {
   $(this).parent().parent().parent().find('.associate-input').prop("disabled", !$(this).prop("checked"));
   if(!$(this).prop("checked")){
    $(this).parent().parent().parent().find('.associate-input').val('')
   }
});



  </script>
@stop

