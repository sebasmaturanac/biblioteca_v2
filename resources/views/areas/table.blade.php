<table class="table table-responsive" id="areas-table">
    <thead>
        <tr>
            <th>Area</th>
        <th>Responsable</th>
        <th>Telefono Interno</th>
        <th>N Oficina</th>
        <th>User Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($areas as $area)
        <tr>
            <td>{!! $area->area !!}</td>
            <td>{!! $area->responsable !!}</td>
            <td>{!! $area->telefono_interno !!}</td>
            <td>{!! $area->n_oficina !!}</td>
            <td>{!! $area->user_id !!}</td>
            <td>
                {!! Form::open(['route' => ['areas.destroy', $area->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('areas.show', [$area->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areas.edit', [$area->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>