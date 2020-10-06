<?php

namespace App\Http\Controllers;

use App\Certidoes;
use Illuminate\Http\Request;

class CertidaoController extends Controller
{
    public function index(Request $req)
    
    {
        $certidoes = Certidoes::all();
        $mensagem = $req->session()->get('mensagem');
        return view('certidao.index', compact('certidoes', 'mensagem'));
    }
    
    public function adicionar()
    {
        return view('certidao.adicionar');
    }

    public function salvar(Request $req)
    {
        $certidoes = $req->all();

        Certidoes::create($certidoes);

        $req->session()
          ->flash(
              'mensagem',
              "Certidao $req->tipo_certidao adicionado com sucesso"
          );

        return redirect()->route('certidoes.index');
    }

    public function editar($id)
    {
        $certidoes = Certidoes::find($id);

        return view('certidao.editar', compact('certidoes'));

    }


    public function atualizar(Request $req, $id)
    {
        $certidoes = $req->all();

        $certidaoSelecionado = Certidoes::find($id);
        $certidaoSelecionado->update($certidoes);

        $req->session()
            ->flash(
                'mensagem',
                "Certidao: $certidaoSelecionado->tipo_certidao atualizado com sucesso"
            );

        return redirect()->route('certidoes.index');
    }

    public function deletar(Request $req, $id)
    {
        $certidoes = Certidoes::find($id);
        $certidoes->delete();

        $req->session()
            ->flash(
                'mensagem',
                "Certidao de $certidoes->tipo_certidao removido com sucesso"
            );

        return redirect()->route('certidoes.index');
    }


}
