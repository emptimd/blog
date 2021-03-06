<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $news->id !!}</div>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $news->name !!}</div>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $news->description !!}</div>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $news->created_at !!}</div>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $news->updated_at !!}</div>
</div>

