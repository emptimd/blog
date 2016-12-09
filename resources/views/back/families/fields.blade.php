<!-- Title Field -->
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>

<!-- Desc Field -->
<div class="form-group {{ $errors->has('desc') ? 'has-error' : ''}}">
    {!! Form::label('desc', 'Desc:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control', 'required']) !!}
    {!! $errors->first('desc', '<p class="help-block">:message</p>') !!}
</div>



<!-- Path Field -->
<div class="form-group hide">
    {!! Form::label('path', 'Path:') !!}
    {!! Form::file('path[]', ['id' => 'path', 'multiple' => 'true', 'accept' => 'image/jpeg,image/png']) !!}
</div>

<div class="form-group" id="file">
    <label for="path" style="display:block;">Path :</label>
    {{--<input class="form-control" placeholder="Enter Profile Image" data-rule-maxlength="250" name="profile_image" type="hidden" value="0">--}}
    <a class="btn btn-default btn_upload_image" file_type="image" selecter="path">Upload <i class="fa fa-cloud-upload"></i></a>
</div>

<div id="wrap-img">
    @if(isset($family))
        <?php $i=0?>
        @foreach($family->images as $img)
            <div class="uploaded_image">
                <img src="{{ asset($img['path']) }}"/>
                <i title="Remove Image" class="fa fa-times remove old" data-i="{{$i}}" data-id="{{$img['id']}}"> </i>
            </div>
            <?php $i++?>
        @endforeach

    @endif

</div>

<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <button class="btn btn-default pull-right"><a href="{!! route('admin.families.index') !!}">Cancel</a></button>
</div>
