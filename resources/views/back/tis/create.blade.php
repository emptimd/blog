@extends("la.layouts.app")

@section("contentheader_title")
    <a href="{!! url('admin/tis') !!}">Tis</a> :
@endsection
@section("contentheader_description", 'Create Ti')
@section("section", "Tis")
@section("section_url", url('admin/tis'))
@section("sub_section", "Create")

@section("htmlheader_title", "Create Ti")

@section("main-content")
    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(['route' => 'admin.tis.store', 'id' => 'main-form']) !!}

                    @include('back.tis.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

