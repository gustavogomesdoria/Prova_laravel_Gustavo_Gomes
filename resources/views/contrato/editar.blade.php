@extends('contrato.layout.site')

@section('titulo', 'Editar Contratos')


@section('conteudo')
    <div class="container">
        <h3>Editar Contratos</h3>
        <div class="row">
            <form action="{{ route('contratos.salvar') }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @include('contrato.form')
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
        </div>
    </div>
@endsection()