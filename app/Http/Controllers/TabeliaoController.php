<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CartorioController;
use App\Tabelioes;
use Illuminate\Http\Request;

class TabeliaoController extends Controller 
{
   
    public function index(Request $req)
    
    {
        $tabelioes = Tabelioes::all();
        $mensagem = $req->session()->get('mensagem');
        return view('tabeliao.index', compact('tabelioes', 'mensagem'));
    }
    
    public function adicionar()
    {
        return view('tabeliao.adicionar');
    }

    public function salvar(Request $req)
    {
        $tabelioes = $req->all();

        Tabelioes::create($tabelioes);

        $req->session()
          ->flash(
              'mensagem',
              "Tabeliao $req->nome adicionado com sucesso"
          );

        return redirect()->route('tabelioes.index');
    }

    public function editar($id)
    {
        $tabelioes = Tabelioes::find($id);

        return view('tabeliao.editar', compact('tabelioes'));

    }


    public function atualizar(Request $req, $id)
    {
        $tabelioes = $req->all();

        $tabeliaoSelecionado = Tabelioes::find($id);
        $tabeliaoSelecionado->update($tabelioes);

        $req->session()
            ->flash(
                'mensagem',
                "Tabeliao: $tabeliaoSelecionado->nome atualizado com sucesso"
            );

        return redirect()->route('tabelioes.index');
    }

    public function deletar(Request $req, $id)
    {
        $tabelioes = Tabelioes::find($id);
        $tabelioes->delete();

        $req->session()
            ->flash(
                'mensagem',
                "Curso de $tabelioes->nome removido com sucesso"
            );

        return redirect()->route('tabelioes.index');
    }




}
