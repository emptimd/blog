@extends("la.layouts.app")

@section("contentheader_title", "Cities")
@section("contentheader_description", "cities listing")
@section("section", "Cities")
@section("sub_section", "Listing")
@section("htmlheader_title", "Cities Listing")


@section("headerElems")
    <a class="btn btn-success btn-sm pull-right" href="{!! route('admin.cities.create') !!}">Add City</a>
@endsection

@section('main-content')
    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-success">
        <div class="box-body">
            @include('cities.table')
        </div>
    </div>
@endsection
