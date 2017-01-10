@extends("la.layouts.app")

@section("contentheader_title")
    <a href="{!! url('admin/reffLevels') !!}">Reff Levels</a> :
@endsection
@section("contentheader_description", 'Create Reff Level')
@section("section", "Reff Levels")
@section("section_url", url('admin/reffLevels'))
@section("sub_section", "Create")

@section("htmlheader_title", "Create Reff Level")

@section("main-content")
    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(['route' => 'admin.reffLevels.store', 'id' => 'main-form']) !!}

                    @include('back.reff_levels.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

