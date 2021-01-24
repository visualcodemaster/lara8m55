@extends('backend.layouts.master')
@section('page_level_styles')

@endsection

@section('content')
    <div class="row ">
        <div class="col">
            <h3>Hi User, {{\Illuminate\Support\Facades\Auth::user()->name}}</h3>
        </div>
    </div>
@endsection

@section('page_level_scripts')


   @endsection
