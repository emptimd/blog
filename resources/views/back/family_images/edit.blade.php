@extends("la.layouts.app")

@section("contentheader_title")
    <a href="{!! url('admin/familyImages') !!}">Family Images</a> :
@endsection
@section("contentheader_description", $familyImages->id)
@section("section", "Family Images")
@section("section_url", url('admin/familyImages'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Edit Family Images : ".$familyImages->id)

@section("main-content")
    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::model($familyImages, ['route' => ['admin.familyImages.update', $familyImages->id], 'method' => 'patch']) !!}

                    @include('back.family_images.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection


