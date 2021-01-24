@extends('backend.layouts.master')
@section('page_level_styles')
    <link href="{{asset('theme/backend/assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

@stop
@section('content')
<div class="row">
    <table class="table table-responsive table-bordered table-striped" id="users-table">
        <thead>
        <tr>
            <th id="remo"><i class="fa fa-plus-circle"></i></th>

            <th>Id</th>
            <th>amount</th>


        </tr>
        </thead>
    </table>
</div>


<script id="details-template" type="text/x-handlebars-template">
    <div class="label label-info">Posts</div>
    <table class="table details-table" id="posts-1">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
        </tr>
        </thead>
    </table>
</script>
@stop
@section('scripts')
    <script src="{{asset('theme/backend/assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        var template = Handlebars.compile($("#details-template").html());
        var table = $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{route('test.master.detail')}}',
            columns: [
                {
                    "className":      'details-control',
                    "orderable":      false,
                    "searchable":      false,
                    "data":           null,
                    "defaultContent": ''
                },
                {data: 'id', name: 'id'},
                {data: 'amount', name: 'amount'},
                // {data: 'email', name: 'email'},
                // {data: 'created_at', name: 'created_at'},
                // {data: 'updated_at', name: 'updated_at'}
            ],
            order: [[1, 'asc']]
        });

        // Add event listener for opening and closing details
        $('#users-table tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row(tr);
            // var tableId = 'posts-1' + row.data().id;
            var tableId = 'posts-1';

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            } else {
                // Open this row
                row.child(template(row.data())).show();
                initTable(tableId, row.data());
                tr.addClass('shown');
                tr.next().find('td').addClass('no-padding bg-gray');
            }
        });

        function initTable(tableId, data) {
            console.table(data);
            $('#' + tableId).DataTable({
                "paging":   false,
                "ordering": false,
                "info":     false,
                "searching":false,
                processing: true,
                serverSide: true,
                ajax: data.details_url,
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'product_id', name: 'product_id' }
                ]
            })
        }

    </script>


@stop
