@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left"><p>Libros</p></h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('libros.create') !!}">Add New</a>
        </h1>



{!!  Form::open(array('url' => 'buscar', 'method' => 'GET')) !!}
        <h1 class="pull-left">
            <div class="input-group">
                <input type="text" name="libro" class="form-control" placeholder="Libro...">
            </div>
        </h1>

        <h1 class="pull-left">
            <div class="input-group">
                <input type="text" name="serie" class="form-control" placeholder="Serie...">
            </div>
        </h1>
        <h1 class="pull-left">
            <div class="input-group">
                <input type="text" name="tomo" class="form-control" placeholder="Tomo...">
            </div>
       

<h1 class="pull-left">
<span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
 </h1>
</form>


    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('libros.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

