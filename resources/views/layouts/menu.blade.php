<li class="{{ Request::is('areas*') ? 'active' : '' }}">
    <a href="{!! route('areas.index') !!}"><i class="fa fa-edit"></i><span>Areas</span></a>
</li>

<li class="{{ Request::is('libros*') ? 'active' : '' }}">
    <a href="{!! route('libros.index') !!}"><i class="fa fa-edit"></i><span>Libros</span></a>
</li>

<li class="{{ Request::is('prestamos*') ? 'active' : '' }}">
    <a href="{!! route('prestamos.index') !!}"><i class="fa fa-edit"></i><span>Prestamos</span></a>
</li>


