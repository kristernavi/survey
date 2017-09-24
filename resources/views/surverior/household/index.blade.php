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
      <th >Firstname</th>
      <th >Middlename</th>
      <th >Lastname</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Barangay</th>
      <th>Purok</th>

      <th >Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($households as $household)
        <tr>
      <td > {{ $household->firstname }}</td>
      <td >{{ $household->middlename }}</td>
      <td>{{ $household->lastname }}</td>
      <td class="is-center">{{ $household->age }}</td>
      <td>{{ ucfirst($household->gender) }}</td>
      <td>{{ $household->barangay->name }}</td>
      <td>{{ $household->purok->number }}</td>


      <td >
        <p class="field">

  <a class="button is-success is-outlined is-small" href="{{ route('house-hold.edit',$household->id)}}">
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
{{ $households->links('vendor.pagination.default') }}


          </div>
        </div>

      </div>
    </div>
  </section>
@stop
