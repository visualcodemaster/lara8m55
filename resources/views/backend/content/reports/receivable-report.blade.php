@extends('backend.layouts.master')
@section('page_level_styles')
    <link href="{{asset('theme/vendors/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('content')
    <h3 class="page-title">
        Receivables
        <small>Receivables Report</small>
    </h3>
    <div class="card">
        <div class="card-header">Receivables Report</div>
        <div class="card-body">
            <span hidden id="js-hidden-ajax-receivables-print-url">{{route('prints.receivables.print')}}</span>
            <div class="row">
                <div class="col-md-2">
                    <h5 >Total Receivable</h5>
                </div>
                <div class="col-md-2 ">
                    <h5 id="receivable-sum"class="special-label-large">0</h5>
                </div>
                <div class="text-right">
                    <button id="btnPrint">Print</button>
                </div>
            </div>
            <div class="m-separator m-separator--space m-separator--dashed"></div>
            <div class="row">
                <div class="col">
                <div class="table-responsive">
                    <table id="receivableReportTable" class="table table-striped- table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>SR. NO</th>
                            <th>Name</th>
                            <th>Debit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($receivables as $receivable)
                            <tr>
                                <td>{{$receivable->id}}</td>
                                <td>{{$receivable->customer_name}}</td>
                                <td>{{$receivable->customer_previous}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('page_level_scripts')
    <script src="{{asset('theme/vendors/datatables/datatables.bundle.js')}}" type="text/javascript"></script>

    <script>

      $(document).ready(function () {

        var receivable_sum  = 0;
        var receivables = $('#receivableReportTable').DataTable({
            lengthMenu: [ [100, 250, 500, -1], [100, 250, 500, "All"] ],
            dom: '<"datatableButtons"B>lfrtip',
            buttons: ['colvis', 'excel', 'pdf', 'print'],
          });
        var data = receivables.rows().data();
        data.each(function (value, index) {
          receivable_sum += parseFloat(value[2]);
        });
        document.getElementById('receivable-sum').innerText = receivable_sum;
          $('body').on('click','#btnPrint', function (event){


              var receivables_print_url = $('#js-hidden-ajax-receivables-print-url').text();
              $.ajax({
                  type:'get',
                  url:receivables_print_url,
                  data:{
                  },
                  success:function (response) {
                      if(response.success) {
                          var originalContents = document.body.innerHTML;
                          window.document.body.innerHTML = response.html;
                          window.print();
                          setTimeout(function(){
                              window.location.reload();
                          }, 100);
                      }
                  }
              });
          });

      });

    </script>
@stop
