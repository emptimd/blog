@extends("la.layouts.app")

@section("contentheader_title", "Referrals")
@section("contentheader_description", "Referrals listing")
@section("section", "Referrals")
@section("sub_section", "Listing")
@section("htmlheader_title", "Referrals Listing")


@section("headerElems")
    <a class="btn btn-success btn-sm pull-right" href="{!! route('admin.referrals.create') !!}">Add referral</a>
@endsection

@section('main-content')
    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-success">
        <div class="box-body">
            @include('back.referrals.table')
        </div>
    </div>
@endsection

