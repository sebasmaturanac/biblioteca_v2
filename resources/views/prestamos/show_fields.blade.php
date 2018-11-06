<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $prestamos->id !!}</p>
</div>

<!-- n_prestamo Field -->
<div class="form-group">
    {!! Form::label('n_prestamo', 'n_prestamo:') !!}
    <p>{!! $prestamos->n_prestamo !!}</p>
</div>



<div class="form-group">
    {!! Form::label('Area', 'Area:') !!}
    <p>{!! $prestamos->area->area !!}</p>
</div>

<div class="form-group">
    {!! Form::label('Departamento', 'Departamento:') !!}
    <p>{!! $prestamos->libro->departamento !!}</p>
</div>

<div class="form-group">
    {!! Form::label('Serie', 'Serie:') !!}
    <p>{!! $prestamos->libro->serie !!}</p>
</div>

<div class="form-group">
    {!! Form::label('Tomo', 'Tomo:') !!}
    <p>{!! $prestamos->libro->tomo !!}</p>
</div>


<div class="form-group">
    {!! Form::label('Nombre Usuario', 'Nombre Usuario:') !!}
    <p>{!! $prestamos->user->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $prestamos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $prestamos->updated_at !!}</p>
</div>

