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
                    {!! Form::open(['route' => 'admin.aes.store', 'files' => true]) !!}
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
    var arr = [];
    var token = $('input[name="_token"]').val();

    $('a').on('click', function() {
        $('[type="file"]').click();
    });

    $('[type="file"]').on('change',function(){
    	var $this = $(this),
            arr = [];

        var preview = $('#wrap-img').empty();
        var files    = $this[0].files;

        console.log(files);

        var reader  = new FileReader();

        var i = 0;


        reader.onload = function () {
            var div = document.createElement("div");
            var $div = $(div).attr("class", "uploaded_image").append('<img src="'+reader.result+'"/>').append('<i title="Remove Image" class="fa fa-times remove i-" data-i="'+ i +'" >');

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
        arr[$this.data("i")] = $this.data("i");
        $this.parent().remove();
    });

    $('form').on('submit',function(e){
    	var $this = $(this);
        var files = $('[type="file"]')[0].files;
        var formdata = new FormData($this[0]);
        formdata.delete('path[]');

        //IF HAVE IMAGES.
        if(files.length) {
            for(var i = 0; i < files.length; i++) {
                if(arr.indexOf(i) === -1) {
                    formdata.append('path[]', files[i]);
                }
            }
        }

//        formdata.set('path[]', files[0]);
//        formdata.append('path[]', files[1]);
//        console.log(formdata.get('path[]'));
//        e.preventDefault();
//        return;
//        alert(22);
        e.preventDefault();
//        alert(11);
        $.ajax({
            type: 'POST',
            url: location.protocol+'//'+location.host+'/admin/aes',
            data: formdata,
            contentType: false,
            processData: false
        }).done(function( data ) {
            console.log(data);
        });

//        {_token: token, name: '1233'}


    });

</script>

@endpush

