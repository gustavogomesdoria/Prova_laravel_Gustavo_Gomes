
@extends('certidao.layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-9">
                <h3>Lista de Certidoes</h3>
            </div>
            <div class="col-3">
                <a class="btn btn-success"
                   href="{{ route('certidoes.adicionar') }}">
                    Adicionar
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if(!empty($mensagem))
                    <div class="alert alert-success">
                        {{ $mensagem }}
                    </div>
                @endif
            </div>

        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tipo Certidao</th>
                        <th scope="col">Nome Envolvido 1</th>
                        <th scope="col">Nome Envolvido 2</th>
                        <th scope="col">Data Certidao</th>
                        <th scope="col">Nome Tabeliao</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($certidoes as $certidao)
                        <tr>
                            <td>{{ $certidao->id }}</td>
                            <td>{{ $certidao->tipo_certidao }}</td>
                            <td>{{ $certidao->nome_envolvido_1 }}</td>
                            <td>{{ $certidao->nome_envolvido_2 }}</td>
                            <td>{{ $certidao->data_certidao }}</td>
                            <td>{{ $certidao->nome_tabeliao }}</td>
                            <td>
                                <form action="{{ route('certidoes.deletar', $certidao->id) }}" method="POST">
                                <a class="btn btn-primary"
                                    href="{{ route('certidoes.editar', $certidao->id) }}">Editar</a>
                                
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection