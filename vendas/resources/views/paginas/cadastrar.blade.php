<x-layout titulo="Cadastrar">
<form action="/cadastrar/salvar" method="GET">
@csrf <!-- Abrir as portas do servidor-->

<br><br>
<label name="produto">Produto</label>
<textArea type="text" name="produto"></textArea>
<br><br>

<label name="estoque">Quantidade</label>
<input type="number" name="quantidade">
<br><br>
<label name="categoria">Categoria</label>
<textArea type="text" name="categoria"></textArea>
<br><br>

<label name="dataValiade">Data Válidade</label>
<input type="date" name="dataValiade">
<br><br>
<label name="preco">Preço</label>
<textArea type="number" name="preco"></textArea>
<br><br>


<button type="submit">Salvar</button>

</form>
<a href="/"><button>Voltar</button></a>








</x-layout>