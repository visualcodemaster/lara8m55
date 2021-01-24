@extends('backend.layouts.master')
@section('page_level_styles')
    <link href="{{asset('theme/backend/assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

@stop
@section('content')
    <div class="row">
        <button id="logs">Test 1</button>
        <table class="table table-responsive table-bordered table-striped" id="users-table">

        </table>
    </div>

@stop
@section('scripts')
    <script src="{{asset('theme/backend/assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
    <script type="text/javascript">

        $('#logs').on('click',function () {
            var routeUrl = '{{ route("ajax") }}';
            ajaxcall()(routeUrl);
        })
        function ajaxcall() {
            return function (routeName)
            {
                $('#users-table').DataTable( {
                    processing: false,
                    serverSide: true,
                   sorting:false,
                    paging:true,
                    ajax:{
                        url : routeName,
                        success: function (data)
                        {
                            var data = data.data;

                            $("#users-table").html("");
                            var markup = '<thead><tr>';
                                Object.entries(data[0]).forEach(([key,value])=>{
                                    markup+= '<th>'+key+ '</th>';
                                })

                            markup+= '</tr></thead><tbody>';
                            for(i=0; i<=data.length-1;i++ ) {
                                markup += '<tr>';
                                Object.entries(data[i]).forEach(([key,value])=>{
                                    markup+= '<td>'+value+ '</td>';
                                })
                                markup+= '</tr>';
                            }
                            markup+= '</tbody>';
                            console.log(markup)
                            $('#users-table').append(markup);
                        }
                    },
                });
            }
        }

    </script>


@stop
