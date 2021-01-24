@extends('backend.layouts.master')
@section('page_level_styles')
    <link href="{{ URL::asset('theme/vendors/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="col text-right mb-2">
        <a href="{{route('permissions.create')}}" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
												<span>
													<i class="la la-plus"></i>
													<span>New Permission</span>
												</span>
        </a>
    </div>
    <div class="card">
        <div class="card-header">Permissions</div>

        <div class="card-body">

            <table class="table table-striped- table-bordered table-hover table-checkable" id="permissionsTable" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Permission</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                @foreach($permissions as $permission)
                    <tr>

                        <td>{{$permission->name}}</td>
                        <td>
                            <form action="{{ route('permissions.delete', $permission->id) }}" method="post">
                                <a href="{{ route('permissions.edit', $permission->id) }}"
                                   class="btn btn-warning">Edit</a>
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>
@endsection
@section('page_level_scripts')
    <script src="{{asset('theme/vendors/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
    <script>
        $('#permissionsTable').DataTable();
    </script>
@endsection
