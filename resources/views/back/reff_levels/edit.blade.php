@extends("la.layouts.app")

@section("contentheader_title")
    <a href="{!! url('admin/reffLevels') !!}">Reff Levels</a> :
@endsection
@section("contentheader_description", $reffLevel->id)
@section("section", "Reff Levels")
@section("section_url", url('admin/reffLevels'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Edit Reff Level : ".$reffLevel->id)

@section("main-content")
    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::model($reffLevel, ['route' => ['admin.reffLevels.update', $reffLevel->id], 'method' => 'patch', 'id' => 'main-form']) !!}

                    @include('back.reff_levels.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection


