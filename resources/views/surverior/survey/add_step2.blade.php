@extends('surverior.layout.app')



@section('content')
 <section class="section main">
    <div class="container">
      <div class="columns">

        <div class="column is-10 ">

          <div class="box">
            <h1 class="title has-text-centered">
        Add Household
      </h1>
 {{ Form::open(array('method' => 'POST', 'id' => 'add-household-form' , 'route' => 'house-hold.store'  )) }}
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
        <input class="input " type="text" placeholder="Area" name="vegetables_area[]" >
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
    <label class="label">Casava</label>
  </div>
  <div class="field-body ">
    <div class="field is-narrow">
      <div class="control is-expanded has-icons-left">
        <input class="input " type="text" placeholder="Casava" name="casava" value="">
        <span class="icon is-small is-left">
          <i class="fa fa-leaf"></i>
        </span>
      </div>


    </div>
     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input " type="text" placeholder="Area" name="casava_area" >
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
    <div class="field is-narrow">
      <div class="control is-expanded has-icons-left">
        <input class="input " type="text" placeholder="Mango" name="mango[]" value="">
        <span class="icon is-small is-left">
          <i class="fa fa-leaf"></i>
        </span>
      </div>


    </div>
     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input " type="text" placeholder="Number of trees" name="number_tree" >
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
    <div class="field is-narrow">
      <div class="control is-expanded has-icons-left">
        <input class="input " type="text" placeholder="Banana" name="banana" value="{{ old('banana')}}">
        <span class="icon is-small is-left">
          <i class="fa fa-leaf"></i>
        </span>
      </div>


    </div>
     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input " type="text" placeholder="No. of mats" name="mat"  value="{{ old('mat')}}">
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
    <div class="field is-narrow">
      <div class="control is-expanded has-icons-left">
        <input class="input " type="text" placeholder="Cacao" name="cacao" value="{{ old('cacao')}}">
        <span class="icon is-small is-left">
          <i class="fa fa-leaf"></i>
        </span>
      </div>


    </div>
     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input " type="text" placeholder="No. of trees" name="cacao_trees"  value="{{ old('cacao_trees')}}">
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
    <div class="field is-narrow">
      <div class="control is-expanded has-icons-left">
        <input class="input " type="text" placeholder="Coffee" name="coffee" value="{{ old('coffee')}}">
        <span class="icon is-small is-left">
          <i class="fa fa-leaf"></i>
        </span>
      </div>


    </div>
     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input " type="text" placeholder="No. of trees" name="coffee_tree" value="{{ old('coffee_tree')}}">
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
    <label class="label">Carnava</label>
  </div>
  <div class="field-body ">
    <div class="field is-narrow">
      <div class="control is-expanded has-icons-left">
        <input class="input " type="text" placeholder="Carnava" name="carnava" value="">
        <span class="icon is-small is-left">
          <i class="fa fa-leaf"></i>
        </span>
      </div>


    </div>
     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input " type="text" placeholder="No. of trees" name="carnava_tree" >
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
    <div class="field is-narrow">
      <div class="control is-expanded has-icons-left">
        <input class="input " type="text" placeholder="Ubi" name="ubi" value="">
        <span class="icon is-small is-left">
          <i class="fa fa-leaf"></i>
        </span>
      </div>


    </div>
     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input " type="text" placeholder="Area" name="ubi" >
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
    <div class="field is-narrow">
      <div class="control is-expanded has-icons-left">
        <input class="input " type="text" placeholder="Camote" name="camote" value="">
        <span class="icon is-small is-left">
          <i class="fa fa-leaf"></i>
        </span>
      </div>


    </div>
     <div class="field is-narrow">
      <p class="control is-expanded has-icons-left ">
        <input class="input " type="text" placeholder="Area" name="camote_area" >
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
vegetables += "        <input class=\"input \" type=\"text\" placeholder=\"Vegetables\" name=\"vegetables[]\" >";
vegetables += "        <span class=\"icon is-small is-left\">";
vegetables += "          <i class=\"fa fa-leaf\"><\/i>";
vegetables += "        <\/span>";
vegetables += "      <\/div>";
vegetables += "";
vegetables += "";
vegetables += "    <\/div>";
vegetables += "     <div class=\"field is-narrow\">";
vegetables += "      <p class=\"control is-expanded has-icons-left\">";
vegetables += "        <input class=\"input \" type=\"text\" placeholder=\"Area\" name=\"vegetables_area[]\" >";
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

  </script>
@stop

