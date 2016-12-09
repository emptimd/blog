<!-- Name Field -->
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<!-- Path Field -->
<div class="form-group hide">
    {!! Form::label('path', 'Path:') !!}
    {!! Form::file('path', ['id' => 'path', 'accept' => 'image/jpeg,image/png']) !!}
</div>

<div class="form-group" id="file">
    <label for="path" style="display:block;">Path :</label>
    {{--<input class="form-control" placeholder="Enter Profile Image" data-rule-maxlength="250" name="profile_image" type="hidden" value="0">--}}
    <a class="btn btn-default btn_upload_image" file_type="image" selecter="path">Upload <i class="fa fa-cloud-upload remove"></i></a>
</div>

<div id="wrap-img">
    @if(isset($ae->path) && $ae->path)
        <div class="uploaded_image">
            <img src="{{ asset($ae['path']) }}"/>
            <i title="Remove Image" class="fa fa-times remove old" data-id="{{$ae['id']}}"> </i>
        </div>
    @endif
</div>

<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <button class="btn btn-default pull-right"><a href="{!! route('admin.aes.index') !!}">Cancel</a></button>
</div>
