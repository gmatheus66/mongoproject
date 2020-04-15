<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Support\Facades\Validator;

class ProdutoController extends Controller
{
    
    public function create(){
        return view('produtocreate');
    }


    public function register(Request $request){

        $validate = Validator::make($request->all(),[
            'nome' => 'required|string|max:20',
            'descricao' => 'required|string|max:50',
        ]);
        if(sizeof($validate->errors()) > 0) {
            return view('produtocreate')->with('validate',$validate->errors());
        }

        try{

            $produto = Produto::create([
                'nome' => $request->get('nome'),
                'descricao' => $request->get('descricao'),
                'valor' => intval($request->get('valor')),
            ]);
            
            return redirect()->route('index')->with('msg','Produto criado com sucesso');
        }
        catch(Exception $e){
            //...
        }
    }

    public function index(){
        $produto = Produto::all();
        return view('index')->with('produto', $produto);

    }

    public function get_produto($id){
        $validate = Validator::make(['id' => $id] ,['id' => 'min:24|max:24']);

        if($validate->fails()) return view('index')->with('validate',$validate->errors());

        $produto = Produto::find($id);  
        return view('edit')->with('produto', $produto);

    }

    public function delete($id){
        $validate = Validator::make(['id' => $id] ,['id' => 'min:24|max:24']);

        if($validate->fails()) return view('index')->with('validate', $validate->errors());

        try{

            $produto = Produto::find($id)->delete();
            
            return redirect()->route('index')->with('msg','Produto Deletado');
        }
        catch(Exception $e){
            //...
        }

    }

    public function update(Request $request){
        $validate = Validator::make($request->all(),[
            'id' => 'min:24|max:24',
            'nome' => 'required|string|max:20',
            'descricao' => 'required|string|max:50',
        ]);
        if(sizeof($validate->errors()) > 0) {
            return view('edit')->with('validate',$validate->errors());
        }

        try{
            $produto = Produto::find($request->get('id')); 
            $produto->update([
                'nome' => $request->get('nome'),
                'descricao' => $request->get('descricao'),
                'valor' => $request->get('valor'),
            ],['upsert' => true]);

            return \redirect()->route('index')->with('msg','Produto Atualizado');
        }
        catch(Exception $e){
            //...
        }
    }

}
