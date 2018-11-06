<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $libro->id !!}</p>
</div>

<!-- Departamento Field -->
<div class="form-group">
    {!! Form::label('departamento', 'Departamento:') !!}
    <p>{!! $libro->departamento !!}</p>
</div>

<!-- Serie Field -->
<div class="form-group">
    {!! Form::label('serie', 'Serie:') !!}
    <p>{!! $libro->serie !!}</p>
</div>

<!-- Tomo Field -->
<div class="form-group">
    {!! Form::label('tomo', 'Tomo:') !!}
    <p>{!! $libro->tomo !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $libro->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $libro->updated_at !!}</p>
</div>

