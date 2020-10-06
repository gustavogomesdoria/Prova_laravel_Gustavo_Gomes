<?php

namespace App\Http\Controllers;

use App\Contratos;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    public function index(Request $req)
    
    {
        $contratos = Contratos::all();
        $mensagem = $req->session()->get('mensagem');
        return view('contrato.index', compact('contratos', 'mensagem'));
    }
    
    public function adicionar()
    {
        return view('contrato.adicionar');
    }

    public function salvar(Request $req)
    {
        $contratos = $req->all();

        Contratos::create($contratos);

        $req->session()
          ->flash(
              'mensagem',
              "Certidao $req->tipo_contrato adicionado com sucesso"
          );

        return redirect()->route('contratos.index');
    }

    public function editar($id)
    {
        $contratos = Contratos::find($id);

        return view('contrato.editar', compact('certidoes'));

    }


    public function atualizar(Request $req, $id)
    {
        $contratos = $req->all();

        $contratoSelecionado = Contratos::find($id);
        $contratoSelecionado->update($contratos);

        $req->session()
            ->flash(
                'mensagem',
                "Certidao: $contratoSelecionado->tipo_contrato atualizado com sucesso"
            );

        return redirect()->route('contratos.index');
    }

    public function deletar(Request $req, $id)
    {
        $contratos = Contratos::find($id);
        $contratos->delete();

        $req->session()
            ->flash(
                'mensagem',
                "Certidao de $contratos->tipo_contrato removido com sucesso"
            );

        return redirect()->route('contatos.index');
    }

}
