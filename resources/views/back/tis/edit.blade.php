@extends("la.layouts.app")

@section("contentheader_title")
    <a href="{!! url('admin/tis') !!}">Tis</a> :
@endsection
@section("contentheader_description", $ti->id)
@section("section", "Tis")
@section("section_url", url('admin/tis'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Edit Ti : ".$ti->id)

@section("main-content")
    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::model($ti, ['route' => ['admin.tis.update', $ti->id], 'method' => 'patch', 'id' => 'main-form']) !!}

                    @include('back.tis.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection


