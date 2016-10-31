@extends("la.layouts.app")

@section("contentheader_title")
    <a href="{!! url('admin/yous') !!}">Yous</a> :
@endsection
@section("contentheader_description", 'Create You')
@section("section", "Yous")
@section("section_url", url('admin/yous'))
@section("sub_section", "Create")

@section("htmlheader_title", "Create You")

@section("main-content")
    @include('adminlte-templates::common.errors')
    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(['route' => 'admin.yous.store']) !!}

                    @include('back.yous.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection




