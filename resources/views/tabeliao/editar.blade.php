@extends('tabeliao.layout.site')

@section('titulo', 'Editar Tabeliao')


@section('conteudo')
    <div class="container">
        <h3>Editar Tabeliao</h3>
        <div class="row">
            <form action="{{ route('tabelioes.atualizar', $tabelioes->id) }}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('tabeliao.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()