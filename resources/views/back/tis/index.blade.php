@extends("la.layouts.app")

@section("contentheader_title", "Tis")
@section("contentheader_description", "Tis listing")
@section("section", "Tis")
@section("sub_section", "Listing")
@section("htmlheader_title", "Tis Listing")


@section("headerElems")
    <a class="btn btn-success btn-sm pull-right" href="{!! route('admin.tis.create') !!}">Add ti</a>
@endsection

@section('main-content')
    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-success">
        <div class="box-body">
            @include('back.tis.table')
        </div>
    </div>
@endsection

