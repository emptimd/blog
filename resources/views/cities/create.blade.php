@extends("la.layouts.app")

@section("contentheader_title")
    <a href="{{ url(config('laraadmin.adminRoute') . '/cities') }}">Cities</a> :
@endsection
@section("contentheader_description", 'Create City')
@section("section", "Cities")
@section("section_url", url(config('laraadmin.adminRoute') . '/cities'))
@section("sub_section", "Create")

@section("htmlheader_title", "Create City")

@section("main-content")
    @include('adminlte-templates::common.errors')
    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(['route' => 'admin.cities.store']) !!}

                    @include('cities.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
