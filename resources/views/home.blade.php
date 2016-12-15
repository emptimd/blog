@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <h3>{{ trans('messages.welcomeDude') }}</h3>
        <h3>{{ trans('messages.aae') }}</h3>
        <h3>{{ trans('mega1.aae') }}</h3>
        <h3>{{ trans('mega1.you') }}</h3>


        <select name="test" id="test">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="asd">asd</option>
        </select>
    </div>
</div>
@endsection


you halloe boy


<?= $variable;?>