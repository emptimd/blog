@extends('la.layouts.app')


@section("contentheader_title")
    <a href="{!! url('admin/families') !!}">Families</a> :
@endsection
@section("contentheader_description", $family->id)
@section("section", "Families")
@section("section_url", url('admin/families'))
@section("sub_section", "Show")

@section("htmlheader_title", "Show Family : ".$family->id)

@section('main-content')

    <div id="page-content" class="profile2">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active fade in" id="tab-info">
                <div class="tab-content">
                    <div class="panel infolist">
                        <div class="panel-default panel-heading">
                            <h4>General Info</h4>
                        </div>
                        <div class="panel-body">
                            @include('back.families.show_fields')
                        </div>

                        <div class="panel-default panel-heading">
                            <h4>Images</h4>
                        </div>
                        <div class="panel-body">
                            @if($family->images)
                                @foreach($family->images as $image)
                                    <div class="uploaded_image"><img src="{{asset($image['path'])}}" alt=""></div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
