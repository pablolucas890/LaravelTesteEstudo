<h1>Listagem dos clientes</h1>
<button>
    <a href="{{ route('clientes.create') }}">Novo Cliente</a>
    <br>
</button>
<ol>
    @foreach ($clientes as $cliente)
        <li>  {{ $cliente['nome'] }} 
        |
        <a href="{{ route('clientes.edit', $cliente['id']) }}">Editar</a>
        </li> 
    @endforeach
</ol>