<!-- Test Field -->

<div class="form-group col-sm-6">
    {!! Form::label('test', 'Test:') !!}
    {!! Form::select('test', ['Daily','Weekly','Monthly'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <button class="btn btn-default pull-right"><a href="{!! route('admin.yous.index') !!}">Cancel</a></button>
</div>
