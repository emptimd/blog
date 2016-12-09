@extends("la.layouts.app")

@section("contentheader_title", "News")
@section("contentheader_description", "News listing")
@section("section", "News")
@section("sub_section", "Listing")
@section("htmlheader_title", "News Listing")


@section("headerElems")
    <a class="btn btn-success btn-sm pull-right" href="{!! route('admin.news.create') !!}">Add news</a>
@endsection

@section('main-content')
    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-success">
        <div class="box-body">
            @include('back.news.table')
        </div>
    </div>
@endsection

