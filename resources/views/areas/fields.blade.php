<!-- Area Field -->
<div class="form-group col-sm-12">
    {!! Form::label('area', 'Area:') !!}
    {!! Form::text('area', null, ['class' => 'form-control']) !!}
</div>

<!-- Responsable Field -->
<div class="form-group col-sm-12">
    {!! Form::label('responsable', 'Responsable:') !!}
    {!! Form::text('responsable', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Interno Field -->
<div class="form-group col-sm-12">
    {!! Form::label('telefono_interno', 'Telefono Interno:') !!}
    {!! Form::text('telefono_interno', null, ['class' => 'form-control']) !!}
</div>

<!-- N Oficina Field -->
<div class="form-group col-sm-12">
    {!! Form::label('n_oficina', 'N Oficina:') !!}
    {!! Form::text('n_oficina', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<!-- <div class="form-group col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Submit Field -->
<div class="form-group col-sm-6">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areas.index') !!}" class="btn btn-default">Cancel</a>
</div>
