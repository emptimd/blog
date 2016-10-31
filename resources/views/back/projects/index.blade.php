@extends("la.layouts.app")

@section("contentheader_title", "Projects")
@section("contentheader_description", "Projects listing")
@section("section", "Projects")
@section("sub_section", "Listing")
@section("htmlheader_title", "Projects Listing")


@section("headerElems")
    <a class="btn btn-success btn-sm pull-right" href="{!! route('admin.projects.create') !!}">Add project</a>
@endsection

@section('main-content')
    <div class="box box-success">
        <div class="box-body">
            @include('back.projects.table')
        </div>
    </div>
@endsection

