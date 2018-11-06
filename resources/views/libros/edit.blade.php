@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Libro
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($libro, ['route' => ['libros.update', $libro->id], 'method' => 'patch']) !!}

                        @include('libros.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection