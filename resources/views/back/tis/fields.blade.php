<!-- Name Field -->
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>

<!-- Desc Field -->
<div class="form-group {{ $errors->has('desc') ? 'has-error' : ''}}">
    {!! Form::label('desc', 'Desc:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
    {!! $errors->first('desc', '<p class="help-block">:message</p>') !!}
</div>

<!-- Desc Ro Field -->
<div class="form-group {{ $errors->has('desc_ro') ? 'has-error' : ''}}">
    {!! Form::label('desc_ro', 'Desc Ro:') !!}
    {!! Form::textarea('desc_ro', null, ['class' => 'form-control']) !!}
    {!! $errors->first('desc_ro', '<p class="help-block">:message</p>') !!}
</div>

<!-- Desc En Field -->
<div class="form-group {{ $errors->has('desc_en') ? 'has-error' : ''}}">
    {!! Form::label('desc_en', 'Desc En:') !!}
    {!! Form::textarea('desc_en', null, ['class' => 'form-control']) !!}
    {!! $errors->first('desc_en', '<p class="help-block">:message</p>') !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <button class="btn btn-default pull-right"><a href="{!! route('admin.tis.index') !!}">Cancel</a></button>
</div>
