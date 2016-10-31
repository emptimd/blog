@extends('la.layouts.app')


@section("contentheader_title")
    <a href="{!! url('admin/yous') !!}">Yous</a> :
@endsection
@section("contentheader_description", $you->id)
@section("section", "Yous")
@section("section_url", url('admin/yous'))
@section("sub_section", "Show")

@section("htmlheader_title", "Show You : ".$you->id)

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
                            @include('back.yous.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
