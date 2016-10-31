<!-- Title Field -->
<div class="form-group col-sm-6 {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>

<!-- Dd Field -->
<div class="form-group col-sm-12 col-lg-12 {{ $errors->has('dd') ? 'has-error' : ''}}">
    {!! Form::label('dd', 'Dd:') !!}
    {!! Form::textarea('dd', null, ['class' => 'form-control']) !!}
    {!! $errors->first('dd', '<p class="help-block">:message</p>') !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <button class="btn btn-default pull-right"><a href="{!! route('admin.projects.index') !!}">Cancel</a></button>
</div>
