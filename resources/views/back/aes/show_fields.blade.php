<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $ae->id !!}</div>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $ae->name !!}</div>
</div>

<!-- Path Field -->
<div class="form-group">
    {!! Form::label('path', 'Path:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $ae->path !!}</div>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $ae->created_at !!}</div>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $ae->updated_at !!}</div>
</div>

