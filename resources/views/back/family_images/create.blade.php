@extends("la.layouts.app")

@section("contentheader_title")
    <a href="{!! url('admin/familyImages') !!}">Family Images</a> :
@endsection
@section("contentheader_description", 'Create Family Images')
@section("section", "Family Images")
@section("section_url", url('admin/familyImages'))
@section("sub_section", "Create")

@section("htmlheader_title", "Create Family Images")

@section("main-content")
    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(['route' => 'admin.familyImages.store']) !!}

                    @include('back.family_images.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

