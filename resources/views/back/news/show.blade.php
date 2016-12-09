@extends('la.layouts.app')


@section("contentheader_title")
    <a href="{!! url('admin/news') !!}">News</a> :
@endsection
@section("contentheader_description", $news->id)
@section("section", "News")
@section("section_url", url('admin/news'))
@section("sub_section", "Show")

@section("htmlheader_title", "Show News : ".$news->id)

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
                            @include('back.news.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
