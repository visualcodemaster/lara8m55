@extends('backend.layouts.master')
@section('styles')
@endsection

@section('content')
    <div class="row ">
        <div class="col">
            <h3>Hi User, {{\Illuminate\Support\Facades\Auth::user()->name}}</h3>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
