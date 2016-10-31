@extends('la.layouts.app')


@section("contentheader_title")
    <a href="{{ url(config('laraadmin.adminRoute') . '/cities') }}">Cities</a> :
@endsection
@section("contentheader_description", $city->name)
@section("section", "Cities")
@section("section_url", url(config('laraadmin.adminRoute') . '/cities'))
@section("sub_section", "View")

@section("htmlheader_title", "City View : ".$city->name)

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
                            @include('cities.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
