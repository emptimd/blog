@extends("la.layouts.app")

@section("contentheader_title")
    <a href="{!! url('admin/aes') !!}">Aes</a> :
@endsection
@section("contentheader_description", $ae->id)
@section("section", "Aes")
@section("section_url", url('admin/aes'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Edit Ae : ".$ae->id)

@section("main-content")
    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::model($ae, ['route' => ['admin.aes.update', $ae->id], 'method' => 'patch', 'class' =>'dropzone', 'id' =>'dr','files' => true]) !!}

                    @include('back.aes.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection


@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
{{--<script>--}}
{{--$('a').on('click', function() {--}}
{{--$('[type="file"]').click();--}}
{{--});--}}
{{--</script>--}}

<script>
    (function() {
        alert(11);
    });
    Dropzone.options.dr = { // The camelized version of the ID of the form element

        // The configuration we've talked about above
//        autoProcessQueue: false,
//        uploadMultiple: true,
//        parallelUploads: 100,
//        maxFiles: 100,
        paramName : 'path',
        maxFilesize : 35,
        acceptedFiles : '.jpg, .jpeg, .png',
//        url: "/admin/aes/store",

        // The setting up of the dropzone
        init: function() {
            var myDropzone = this;

            // First change the button to actually tell Dropzone to process the queue.
            this.element.querySelector("button").addEventListener("click", function(e) {
                // Make sure that the form isn't actually being sent.
                e.preventDefault();
                e.stopPropagation();
                myDropzone.processQueue();
            });

            // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
            // of the sending event because uploadMultiple is set to true.
            this.on("sendingmultiple", function() {
                // Gets triggered when the form is actually being sent.
                // Hide the success button or the complete form.
            });
            this.on("successmultiple", function(files, response) {
                // Gets triggered when the files have successfully been sent.
                // Redirect user or notify of success.
            });
            this.on("errormultiple", function(files, response) {
                // Gets triggered when there was an error sending the files.
                // Maybe show form again, and notify user of error
            });
        }

    }

</script>

@endpush