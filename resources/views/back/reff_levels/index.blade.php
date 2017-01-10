@extends("la.layouts.app")

@section("contentheader_title", "Reff Levels")
@section("contentheader_description", "Reff Levels listing")
@section("section", "Reff Levels")
@section("sub_section", "Listing")
@section("htmlheader_title", "Reff Levels Listing")


@section("headerElems")
    <a class="btn btn-success btn-sm pull-right" href="{!! route('admin.reffLevels.create') !!}">Add reffLevel</a>
@endsection

@section('main-content')
    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-success">
        <div class="box-body">
            @include('back.reff_levels.table')
        </div>
    </div>
@endsection

