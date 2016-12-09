<!-- Family Id Field -->
<div class="form-group {{ $errors->has('family_id') ? 'has-error' : ''}}">
    {!! Form::label('family_id', 'Family Id:') !!}
    {{ Form::select('family_id',\App\Models\Back\Family::orderBy('id', 'desc')->pluck('title', 'id')) }}
    {!! $errors->first('family_id', '<p class="help-block">:message</p>') !!}
</div>


<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <button class="btn btn-default pull-right"><a href="{!! route('admin.familyImages.index') !!}">Cancel</a></button>
</div>


