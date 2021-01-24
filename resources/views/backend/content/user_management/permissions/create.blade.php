@extends('backend.layouts.master')
@section('page_level_styles')

@stop
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Roles</div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col">
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            <form method="post" id="permission_create" action="{{route('permissions.store')}}" enctype="multipart/form-data">

                                @csrf
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Permission</label>
                                        <input type="text" id="name" name="name" class="form-control" required placeholder="Name"/>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <input type="submit" class="btn btn-primary input-lg" value="Add Permission"/>
                                    </div>
                                </div>

                            </form>
                        </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@stop
@section('page_level_scripts')
    <script>

        $(document).ready(function(){

            $("#permission_create").validate(
                {
                    rules: {

                        name: {
                            required: true,
                            minlength: 3,
                            remote: {
                                url: "/check-permission-existence",
                                type: "get",
                                data: {
                                    name: function () {
                                        return $("#name").val();
                                    }
                                }
                            }
                        },



                    },
                    messages: {

                        name: {
                            required: "Please enter a name",
                            minlength: "Permission must consist of at least 3 characters",
                            remote: "name already used.",
                        },



                    }
                }
            );
        });

    </script>
@stop
