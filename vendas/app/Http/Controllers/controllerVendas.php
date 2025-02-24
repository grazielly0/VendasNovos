<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelVendas;

class ControllerVendas extends Controller
{
    public function index(){
        $dados = modelVendas::all();
        return view('paginas.index')->With('dados', $dados);
      }
    
    
    public function store(Request $request){
        $codigo = $request->input('id');
        $produto = $request->input('produto');
        $quantidade = $request->input('quantidade');
        $categoria = $request->input('categoria');
        $dataValiade = $request->input('dataValiade');
        $preco = $request->input('preco');
            //Inserindo os dads na tabela 
        $model = new modelVendas();
        $model->id = $codigo;
        $model->produto = $produto;
        $model->quantidade = $quantidade;
        $model->categoria = $categoria;
        $model->dataValiade = $dataValiade;
        $model->preco = $preco;
    
        $model->save();//armazenar no banco de dados 
        return redirect('/Cadastrar');
    }

    public function consultar(){
 
        $ids = modelVendas::all();
        return view('paginas/consultar', compact('ids'));
    }
 
    public function editar($id){
        $dado = modelVendas::findOrFail($id);
        return view('paginas.editar', compact('dado'));
    }//fim do método


    public function atualizar(Request $request, $id)
    {
        modelVendas::where('id',$id)->update($request->all());
        return redirect('/consultar');
    }//fim do método atualizar

    public function excluir(Request $request, $id)
    {
        modelVendas::where('id', $id)->delete($request->all());
        return redirect('/consultar');
    }//fim do método
}
