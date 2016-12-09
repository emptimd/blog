<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $familyImages->id !!}</div>
</div>

<!-- Family Id Field -->
<div class="form-group">
    {!! Form::label('family_id', 'Family Id:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $familyImages->family_id !!}</div>
</div>

<!-- Path Field -->
<div class="form-group">
    {!! Form::label('path', 'Path:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $familyImages->path !!}</div>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $familyImages->created_at !!}</div>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $familyImages->updated_at !!}</div>
</div>

