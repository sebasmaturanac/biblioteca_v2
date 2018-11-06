<!-- Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departamento', 'Departamento:') !!}
    {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Serie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('serie', 'Serie:') !!}
    {!! Form::text('serie', null, ['class' => 'form-control']) !!}
</div>

<!-- Tomo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tomo', 'Tomo:') !!}
    {!! Form::text('tomo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('libros.index') !!}" class="btn btn-default">Cancel</a>
</div>
