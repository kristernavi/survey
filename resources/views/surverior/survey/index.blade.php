@extends('surverior.layout.app')

@section('content')
 <section class="section main">
    <div class="container">
      <div class="columns">

        <div class="column is-12 ">

          <div class="box">
            <table class="table  is-striped is-narrow is-fullwidth">
  <thead>
    <tr>
      <th >House Hold</th>
      <th >Type</th>
      <th >Created Date</th>
      <th>Last Update</th>
      <th >Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($survies as $survey)
        <tr>
      <td > {{ $survey->household->fullname }}</td>
      <td >{{ $survey->type->name }}</td>
      <td>{{ $survey->created_at->format('j M, Y h:i:s A') }}</td>
      <td>{{ $survey->updated_at->format('j M, Y h:i:s A') }}</td>


      <td >
        <p class="field">

  <a class="button is-success is-outlined is-small" href="{{ route('survey.edit',$survey->id)}}">
    <span class="icon is-small">
      <i class="fa fa-edit"></i>
    </span>
    <span>Edit</span>
  </a>
  <a class="button is-danger is-outlined is-small">
    <span>Delete</span>
    <span class="icon is-small">
      <i class="fa fa-times"></i>
    </span>
  </a>
</p>
      </td>
    </tr>
    @endforeach

  </tbody>
  <tfoot>

  </tfoot>
  <tbody>

  </tbody>
</table>
{{ $survies->links('vendor.pagination.default') }}


          </div>
        </div>

      </div>
    </div>
  </section>
@stop
