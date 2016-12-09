@extends("la.layouts.app")

@section("contentheader_title")
    <a href="{!! url('admin/news') !!}">News</a> :
@endsection
@section("contentheader_description", $news->id)
@section("section", "News")
@section("section_url", url('admin/news'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Edit News : ".$news->id)

@section("main-content")
    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::model($news, ['route' => ['admin.news.update', $news->id], 'method' => 'patch', 'id' => 'main-form']) !!}

                    @include('back.news.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection


