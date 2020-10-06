<div class="form-group">
    <label for="tipo">Tipo Certidao: </label>
    <input type="text" class="form-control" id="tipo" name="tipo"
           value="{{ $certidoes->tipo_certidao ??''}}">
</div>
<div class="form-group">
    <label for="nome">Nome Envolvido 1: </label>
    <input type="text" class="form-control" id="nome" name="nome"
           value="{{ $certidoes->nome_envolvido_1 ?? ''}}">
</div>
<div class="form-group">
    <label for="nome">Nome Envolvido 2: </label>
    <input type="text" class="form-control" id="nome" name="nome"
           value="{{ $certidoes->nome_envolvido_2 ?? ''}}">
</div>
<div class="form-group">
    <label for="data">Data certidao: </label>
    <input type="text" class="form-control" id="data" name="data"
           value="{{ $certidoes->data_certidao ?? ''}}">
</div>
<div class="form-group">
    <label for="data">Nome tabeliao: </label>
    <input type="text" class="form-control" id="nome" name="nome"
           value="{{$certidoes->nome_tabeliao ?? ''}}">


