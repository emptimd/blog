@extends("la.layouts.app")

@section("contentheader_title")
    <a href="{!! url('admin/referrals') !!}">Referrals</a> :
@endsection
@section("contentheader_description", $referral->id)
@section("section", "Referrals")
@section("section_url", url('admin/referrals'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Edit Referral : ".$referral->id)

@section("main-content")
    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::model($referral, ['route' => ['admin.referrals.update', $referral->id], 'method' => 'patch', 'id' => 'main-form']) !!}

                    @include('back.referrals.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection


