<x-layout titulo="Cadastrar">
<form action="" method="GET">
@csrf <!-- Abrir as portas do servidor-->
<label name="codigo">Código</label>
<input type="password" name="password">
<br><br>
<label name="produto">Produto</label>
<textArea type="text" name="produtoTexto"></textArea>
<br><br>

<label name="estoque">Quantidade</label>
<input type="number" name="estoque">
<br><br>
<label name="categoria">Categoria</label>
<textArea type="text" name="categoria"></textArea>
<br><br>

<label name="dataValidade">Data Válidade</label>
<input type="date" name="dataValidade">
<br><br>
<label name="preco">Preço</label>
<textArea type="number" name="preco"></textArea>
<br><br>


<button type="submit">Salvar</button>

</form>
<a href="/"><button>Voltar</button></a>
</x-layout>