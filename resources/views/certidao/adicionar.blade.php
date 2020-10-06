@extends('certidao.layout.site')

@section('titulo', 'Adicionar Certidao')


@section('conteudo')
    <div class="container">
        <h3>Adiconar Curso</h3>
        <div class="row">
            <form action="{{ route('certidoes.salvar') }}" method="post"
                >
                @csrf
                @include('certidao.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()