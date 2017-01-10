<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $referral->id !!}</div>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $referral->user_id !!}</div>
</div>

<!-- Refferal Id Field -->
<div class="form-group">
    {!! Form::label('refferal_id', 'Refferal Id:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $referral->refferal_id !!}</div>
</div>

<!-- Reff Level Field -->
<div class="form-group">
    {!! Form::label('reff_level', 'Reff Level:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $referral->reff_level !!}</div>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $referral->created_at !!}</div>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:', ['class' =>'col-md-2']) !!}
    <div class="col-md-10">{!! $referral->updated_at !!}</div>
</div>

