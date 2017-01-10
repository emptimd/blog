<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $reffLevel->id !!}</div>
</div>

<!-- Reff Level Field -->
<div class="form-group">
    {!! Form::label('reff_level', 'Reff Level:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $reffLevel->reff_level !!}</div>
</div>

<!-- Value Field -->
<div class="form-group">
    {!! Form::label('value', 'Value:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $reffLevel->value !!}</div>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $reffLevel->created_at !!}</div>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $reffLevel->updated_at !!}</div>
</div>

