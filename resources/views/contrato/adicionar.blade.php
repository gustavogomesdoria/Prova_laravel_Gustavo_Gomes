@extends('contrato.layout.site')

@section('titulo', 'Adicionar Contrato')


@section('conteudo')
    <div class="container">
        <h3>Adiconar Contrato</h3>
        <div class="row">
            <form action="{{ route('contratos.salvar') }}" method="post"
                >
                @csrf
                @include('contrato.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()