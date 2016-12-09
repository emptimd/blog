<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $ti->id !!}</div>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $ti->name !!}</div>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Desc:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $ti->desc !!}</div>
</div>

<!-- Desc Ro Field -->
<div class="form-group">
    {!! Form::label('desc_ro', 'Desc Ro:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $ti->desc_ro !!}</div>
</div>

<!-- Desc En Field -->
<div class="form-group">
    {!! Form::label('desc_en', 'Desc En:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $ti->desc_en !!}</div>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $ti->created_at !!}</div>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $ti->updated_at !!}</div>
</div>

