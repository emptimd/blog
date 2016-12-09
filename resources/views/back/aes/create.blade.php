@extends("la.layouts.app")

@section("contentheader_title")
    <a href="{!! url('admin/aes') !!}">Aes</a> :
@endsection
@section("contentheader_description", 'Create Ae')
@section("section", "Aes")
@section("section_url", url('admin/aes'))
@section("sub_section", "Create")

@section("htmlheader_title", "Create Ae")

@section("main-content")
    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(['route' => 'admin.aes.store', 'id' => 'main-form']) !!}
                    @include('back.aes.fields')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection

@push('styles')
<style>
    #wrap-img {
        margin-bottom: 10px;
    }
    #wrap-img .uploaded_image {
        margin-right: 10px;
    }
</style>

@endpush


@push('scripts')
<script>
    var route = $('#main-form').attr('action');


    $('a.btn_upload_image').on('click', function() {
        $('[type="file"]').click();
    });

    $('[type="file"]').on('change',function(){
        var $this = $(this);

        var preview = $('#wrap-img').empty();
        var files    = $this[0].files;
        var reader  = new FileReader();
        var i = 0;


        reader.onload = function () {
            var div = document.createElement("div");
            var $div = $(div).attr("class", "uploaded_image").append('<img src="'+reader.result+'"/>').append('<i title="Remove Image" class="fa fa-times remove" />');

            preview.append($div);

            if(files[++i]) {
                reader.readAsDataURL(files[i]);
            }
        }

        if (files[i]) {
            reader.readAsDataURL(files[i]);
        }

    });

    $('form').on('click', 'i.remove', function(){
        var $this = $(this);
        $this.parent().remove();
    });

    $('form').on('submit',function(e){
        var $this = $(this);
        var files = $('[type="file"]')[0].files;
        var formdata = new FormData($this[0]);
        formdata.delete('path');
        e.preventDefault();


        $('.has-error').removeClass('has-error').find('p.help-block').remove();

        //IF HAVE IMAGES.
        if(files.length) {
            formdata.append('path', files[0]);
        }


        $.ajax({
            type: 'POST',
            url: route,
            data: formdata,
            contentType: false,
            processData: false,
        }).done(function( data, status, request ) {
            if(request.status == 200) {
                location = route;
            }
        }).error(function (request, status, error) {
            if(request.status == 422) {
                console.log(request.responseJSON);
                var data = request.responseJSON;
                for(var obj in data) {
                    $this.find('[name="'+obj+'"]').after('<p class="help-block">'+data[obj]+'</p>').parent().addClass('has-error');
                    if(obj.indexOf('path') !== -1) {
                        $this.find('.btn_upload_image').after('<p class="help-block">'+data[obj]+'</p>').parent().addClass('has-error');
                    }
                }

            }
        });

    });

</script>

@endpush
