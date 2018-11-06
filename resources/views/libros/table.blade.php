<table class="table table-responsive" id="libros-table">
    <thead>
        <tr>
            <th>Departamento</th>
        <th>Serie</th>
        <th>Tomo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($libros as $libro)
        <tr>
            <td>{!! $libro->departamento !!}</td>
            <td>{!! $libro->serie !!}</td>
            <td>{!! $libro->tomo !!}</td>
            <td>
                {!! Form::open(['route' => ['libros.destroy', $libro->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('libros.show', [$libro->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('libros.edit', [$libro->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>