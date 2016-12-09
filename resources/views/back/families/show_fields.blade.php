<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $family->id !!}</div>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $family->title !!}</div>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Desc:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $family->desc !!}</div>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $family->created_at !!}</div>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $family->updated_at !!}</div>
</div>

