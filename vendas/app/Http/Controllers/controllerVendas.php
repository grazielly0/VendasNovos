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
        $codigo = $request->input('password');
        $produto = $request->input('produtoTexto');
        $quantidade = $request->input('estoque');
        $categoria = $request->input('categoria');
        $dataValidade = $request->input('dataValidade');
        $preco = $request->input('preco');
            //Inserindo os dads na tabela 
        $model = new modelVendas();
        $model->password = $codigo;
        $model->produtoTexto = $produto;
        $model->estoque = $estoque;
        $model->categoria = $categoria;
        $model->dataValidade = $dataValidade;
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
    }
 
    public function atualizar(Request $request, $id){
        modelVendas::where('id',$id)->update($request->all());
        return redirect('/consultar');
    }
 
    public function excluir(Request $request, $id){
        modelVendas::where('id', $id)->delete($request->all());
        return redirect('/consultar');
    }
}
