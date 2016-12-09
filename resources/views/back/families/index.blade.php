@extends("la.layouts.app")

@section("contentheader_title", "Families")
@section("contentheader_description", "Families listing")
@section("section", "Families")
@section("sub_section", "Listing")
@section("htmlheader_title", "Families Listing")


@section("headerElems")
    <a class="btn btn-success btn-sm pull-right" href="{!! route('admin.families.create') !!}">Add family</a>
@endsection

@section('main-content')
    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-success">
        <div class="box-body">
            @include('back.families.table')
        </div>
    </div>
@endsection

