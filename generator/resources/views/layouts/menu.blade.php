<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{!! route('clientes.index') !!}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('comentarios*') ? 'active' : '' }}">
    <a href="{!! route('comentarios.index') !!}"><i class="fa fa-edit"></i><span>Comentarios</span></a>
</li>

