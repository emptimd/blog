<!-- Reff Level Field -->
<div class="form-group col-sm-12 {{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>

<!-- Reff Level Field -->
<div class="form-group col-sm-12 {{ $errors->has('refferal_id') ? 'has-error' : ''}}">
    {!! Form::label('refferal_id', 'Referral ID:') !!}
    {!! Form::number('refferal_id', null, ['class' => 'form-control']) !!}
    {!! $errors->first('refferal_id', '<p class="help-block">:message</p>') !!}
</div>

<!-- Reff Level Field -->
<div class="form-group col-sm-12 {{ $errors->has('reff_level') ? 'has-error' : ''}}">
    {!! Form::label('reff_level', 'Reff Level:') !!}
    {!! Form::number('reff_level', null, ['class' => 'form-control']) !!}
    {!! $errors->first('reff_level', '<p class="help-block">:message</p>') !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <button class="btn btn-default pull-right"><a href="{!! route('admin.referrals.index') !!}">Cancel</a></button>
</div>
