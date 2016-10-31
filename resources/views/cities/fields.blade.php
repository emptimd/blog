<!-- Name Field -->
<div class="form-group col-sm-6 {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => "form-control"]) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}

</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12 {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <button class="btn btn-default pull-right"><a href="{!! route('admin.cities.index') !!}">Cancel</a></button>
</div>
