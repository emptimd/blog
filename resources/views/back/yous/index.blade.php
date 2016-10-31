@extends("la.layouts.app")

@section("contentheader_title", "Yous")
@section("contentheader_description", "Yous listing")
@section("section", "Yous")
@section("sub_section", "Listing")
@section("htmlheader_title", "Yous Listing")


@section("headerElems")
    <a class="btn btn-success btn-sm pull-right" href="{!! route('admin.yous.create') !!}">Add You</a>
@endsection

@section('main-content')
    <div class="box box-success">
        <div class="box-body">
            @include('back.yous.table')
        </div>
    </div>
@endsection

