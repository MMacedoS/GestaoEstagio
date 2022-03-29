<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instituicao;

use Illuminate\Support\Facades\DB;


class InstituicaoController extends Controller
{
    public function index(){
        $data = Instituicao::all();
        return view('instituicao.index', compact('data'));
    }
    public function create(){
        return view('instituicao.create');
    }

    public function store(Request $request){
      
        try {
            //code...
            DB::beginTransaction();
                $instituicao = new Instituicao;

                $instituicao->name = $request->name_instituicao;
                $instituicao->diretor = $request->diretor;
                $instituicao->vice_diretor = $request->vicediretor;
                
                $instituicao->save();                
            DB::commit();

            return redirect()->route('instituicao.index')->withStatus('Registro adicionado com sucesso.');

        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
        }
       
    }

    public function edit($id){
        $data = Instituicao::findOrFail($id);
        return view('instituicao.edit', compact('data'));
    }

    public function show(){}

    public function update(Request $request, $id){
        
        try {
            //code...
            DB::beginTransaction();
               
            Instituicao::findOrFail($id)->update($request->all());            

            DB::commit();

            return redirect()->route('instituicao.index')->withStatus('Registro atualizado com sucesso.');

        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('instituicao.index')->withStatus('<ERRO>. '.$th->getMessage());
        }
    }

    public function destroy($id)
    {
        $item = Instituicao::findOrFail($id);

        try {
            DB::beginTransaction();
              $item->delete();
            DB::commit();
            return redirect()->route('instituicao.index')->withStatus('Registro deletado com sucesso.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('instituicao.index')->withError('Registro vinculado á outra tabela, somente poderá ser excluído se retirar o vinculo.');
        }
    }
}
