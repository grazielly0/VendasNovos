<x-layout titulo="editar">
    <form action="/atualizar/{{$dado->id}}" method="get">
       
        <label>Id<label>
        <input type="text" name="id" value="{{$dado->id}}"  require/>

  
        
        <label>Produto<label>
        <input type="text" name="produto" value="{{$dado->produto}}"  require/>


        
        <label>Quantidade<label>
        <input type="number" name="quantidade" value="{{$dado->quantidade}}"  require/>



        <label>Categoria<label>
        <input type="text" name="categoria" value="{{$dado->categoria}}"  require/>

        <label>Data Validade<label>
        <input type="date" name="dataValiade" value="{{$dado->dataValiade}}"  require/>
 
        <label>Preço<label>
        <input type="text" name="preco" value="{{$dado->preco}}"  require/>

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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Tem certeza que deseja excluir: {{$dado->id}}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <a type="button" class="btn btn-primary" href="/excluir/{{$dado->id}}">Sim</a>
      </div>
    </div>
  </div>
</div>

<a href="/"><button>Voltar</button></a>
</x-layout>