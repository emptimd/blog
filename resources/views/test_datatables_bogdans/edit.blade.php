@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Test Datatables Bogdan
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($testDatatablesBogdan, ['route' => ['admin.testDatatablesBogdans.update', $testDatatablesBogdan->id], 'method' => 'patch']) !!}

                        @include('test_datatables_bogdans.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection