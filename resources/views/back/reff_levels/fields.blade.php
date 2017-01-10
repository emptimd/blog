<!-- Reff Level Field -->
<div class="form-group col-sm-6 {{ $errors->has('reff_level') ? 'has-error' : ''}}">
    {!! Form::label('reff_level', 'Reff Level:') !!}
    {!! Form::number('reff_level', null, ['class' => 'form-control']) !!}
    {!! $errors->first('reff_level', '<p class="help-block">:message</p>') !!}
</div>

<!-- Value Field -->
<div class="form-group col-sm-6 {{ $errors->has('value') ? 'has-error' : ''}}">
    {!! Form::label('value', 'Value:') !!}
    {!! Form::number('value', null, ['class' => 'form-control']) !!}
    {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <button class="btn btn-default pull-right"><a href="{!! route('admin.reffLevels.index') !!}">Cancel</a></button>
</div>
