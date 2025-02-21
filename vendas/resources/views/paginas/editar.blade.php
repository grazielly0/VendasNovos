<x-layout titulo="editar">
    <form action="" method="get">
        <label>Código</label>
        <input type="number" id="number" value="" disabled require/>
        
        <label>Produto<label>
        <input type="text" name="produtoTexto" value=""  require/>
        <br><br>

        
        <label>Quantidade<label>
        <input type="number" name="estoque" value=""  require/>
        <br><br>


        <label>Categoria<label>
        <input type="text" name="categoriaTexto" value=""  require/>

        <label>Data Válidade<label>
        <input type="date" name="dataValidade" value=""  require/>
        <br><br>

        <button type="submit">Atualizar</button>
    </form>


    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Excluir
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Tem certeza que deseja excluir: ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <a type="button" class="btn btn-primary" href="/excluir/">Sim</a>
      </div>
    </div>
  </div>
</div>

<a href="/"><button>Voltar</button></a>
</x-layout>