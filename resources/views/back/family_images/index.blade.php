@extends("la.layouts.app")

@section("contentheader_title", "Family Images")
@section("contentheader_description", "Family Images listing")
@section("section", "Family Images")
@section("sub_section", "Listing")
@section("htmlheader_title", "Family Images Listing")


@section("headerElems")
    <a class="btn btn-success btn-sm pull-right" href="{!! route('admin.familyImages.create') !!}">Add familyImages</a>
@endsection

@section('main-content')
    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-success">
        <div class="box-body">
            @include('back.family_images.table')
        </div>
    </div>
@endsection

