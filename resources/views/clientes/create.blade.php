<h3>Novo cliente</h3>


<form action="{{route('cliente.store')}}" method="POST">
    @csrf
    <input type="text" name="cliente">
    <input type="submit" value="salvar">
</form>