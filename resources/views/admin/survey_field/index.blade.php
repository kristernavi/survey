@extends('admin.layout.app')
@section('styles')
    <link href="{{ url('/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">


    <!-- Select2 -->
    <link href="{{ url('/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ url('/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <style type="text/css">
      .dataTables_filter input{
        margin-left: 10px;
      }


      .dataTables_processing {
          position: absolute;
          width: 60px;
          height: 50px;
          text-align: center;
          color: #fff;
          background-color: rgb(92, 184, 92);
          padding: 5px !important;
          right: 0px;
          left: 0px;
          margin: 0 auto;
          margin-top: -25px;
          border: 0px;
          border-radius: 0px;
          box-shadow: 0px 1px 4px 0px #000;
          border-radius: 5px;
      }
      .dataTables_processing i {
          font-size: 35px;
          margin-top: 2px;
      }
    </style>

@endsection
@section('content')
 <!-- page content -->

        <div class="right_col" role="main">
         <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Field List of {{ ucwords($category->name)}} </h2>
                    <ul class="nav navbar-right panel_toolbox">
                       <a href="{{ route('admin.survey-field.create', $category->id)}}" role="button" type="button" class="btn btn-success" > ADD</a>

                      </li>

                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @include('admin.survey_field.table')
                  </div>
                </div>
              </div>

        </div>
        <!-- /page content -->


@section('scripts')
<script src="{{ url('/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ url('/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ url('/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>

    <!-- Switchery -->
    <script src="{{ url('/vendors/switchery/dist/switchery.min.js')}}"></script>
    <!-- Select2 -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js
"></script>



<script type="text/javascript">

        var table = $("#fields-table").DataTable({
            bProcessing: true,
            bServerSide: true,
            sServerMethoed: "GET",
            'ajax': '{{ route('admin.survey-field.category',$category->id)}}',
            searching: true,
            paging: true,
            filtering:true,
            responsive: true,
            bInfo: false,
            "language": {
                "processing":     "<i class='fa fa-spin fa-spinner'></i>",
            },

            "columns": [
              {data: 'name',  name: 'name', className: 'col-md-2 text-left',   searchable: true, sortable: true},
               {data: 'type',  name: 'type', className: 'col-md-2 text-left',   searchable: true, sortable: true},
                {data: 'dynamic',  name: 'dynamic', className: 'col-md-5 text-left',   searchable: false, sortable: true},
                {data: 'actions',   name: 'actions', className: ' text-center col-md-3',   searchable: false,  sortable: false},
            ],
            "fnDrawCallback": function (oSettings) {
                $('[data-toggle="tooltip"]').tooltip();
            }
          });


  $(document).off('click', '.delete').on('click', '.delete', function(x){
            var that = this;
            bootbox.confirm({
              title: "Confirm Delete SubCategory?",
              className: "del-bootbox",
              message: "Are you sure you want to delete the <b>"+that.dataset.name +"</b>?",
              buttons: {
                  confirm: {
                      label: 'Yes',
                      className: 'btn-success'
                  },
                  cancel: {
                      label: 'Cancel',
                      className: 'btn-danger'
                  }
              },
              callback: function (result) {
                 if(result){
                  var token = '{{csrf_token()}}';

                  $.ajax({
                  url:'/admin/survey-field/'+that.dataset.id,
                  type: 'post',
                  data: {_method: 'delete', _token :token},
                  success:function(data){
                   table.draw();
                    notiff('Success!', 'success', 'Record Deleted Successfully', 'fa fa-check');
                  }
                  });
                 }
              }
          });
      });


</script>




@endsection
@endsection

