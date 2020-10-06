
@extends('contrato.layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-9">
                <h3>Lista de Contratos</h3>
            </div>
            <div class="col-3">
                <a class="btn btn-success"
                   href="{{ route('contratos.adicionar') }}">
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
                        <th scope="col">Tipo Contrato</th>
                        <th scope="col">Nome Envolvido 1</th>
                        <th scope="col">Nome Envolvido 2</th>
                        <th scope="col">Data Contrato</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Nome Tabeliao</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contratos as $contrato)
                        <tr>
                            <td>{{ $contrato->id }}</td>
                            <td>{{ $contrato->tipo_contrato }}</td>
                            <td>{{ $contrato->nome_envolvido_1 }}</td>
                            <td>{{ $contrato->nome_envolvido_2 }}</td>
                            <td>{{ $contrato->data_contrato }}</td>
                            <td>{{ $contrato->valor }}</td>
                            <td>{{ $contrato->nome_tabeliao }}</td>
                            <td>
                                <form action="{{ route('contratos.deletar', $contrato->id) }}" method="POST">
                                <a class="btn btn-primary"
                                    href="{{ route('contratos.editar', $contrato->id) }}">Editar</a>
                                
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