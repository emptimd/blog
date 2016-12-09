@extends("la.layouts.app")

@section("contentheader_title")
    <a href="{!! url('admin/news') !!}">News</a> :
@endsection
@section("contentheader_description", 'Create News')
@section("section", "News")
@section("section_url", url('admin/news'))
@section("sub_section", "Create")

@section("htmlheader_title", "Create News")

@section("main-content")
    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(['route' => 'admin.news.store', 'id' => 'main-form']) !!}

                    @include('back.news.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

