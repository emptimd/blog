@extends("la.layouts.app")

@section("contentheader_title", "Aes")
@section("contentheader_description", "Aes listing")
@section("section", "Aes")
@section("sub_section", "Listing")
@section("htmlheader_title", "Aes Listing")


@section("headerElems")
    <a class="btn btn-success btn-sm pull-right" href="{!! route('admin.aes.create') !!}">Add ae</a>
@endsection

@section('main-content')
    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-success">
        <div class="box-body">
            @include('back.aes.table')
        </div>
    </div>
@endsection

