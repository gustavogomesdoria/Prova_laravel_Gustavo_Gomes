@extends('certidao.layout.site')

@section('titulo', 'Editar Certidoes')


@section('conteudo')
    <div class="container">
        <h3>Editar Curso</h3>
        <div class="row">
            <form action="{{ route('certidoes.salvar') }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @include('certidao.form')
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
        </div>
    </div>
@endsection()