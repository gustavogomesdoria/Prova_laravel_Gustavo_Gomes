<div class="form-group">
    <label for="tipo">Tipo Contrato: </label>
    <input type="text" class="form-control" id="tipo" name="tipo"
           value="{{ $contratos->tipo_contrato ??''}}">
</div>
<div class="form-group">
    <label for="nome">Nome Envolvido 1: </label>
    <input type="text" class="form-control" id="nome" name="nome"
           value="{{ $contratos->nome_envolvido_1 ?? ''}}">
</div>
<div class="form-group">
    <label for="nome">Nome Envolvido 2: </label>
    <input type="text" class="form-control" id="nome" name="nome"
           value="{{ $contratos->nome_envolvido_2 ?? ''}}">
</div>
<div class="form-group">
    <label for="data">Data certidao: </label>
    <input type="text" class="form-control" id="data" name="data"
           value="{{ $contratos->data_contrato ?? ''}}">
</div>
<div class="form-group">
    <label for="data">Valor Contrato: </label>
    <input type="text" class="form-control" id="data" name="data"
           value="{{ $contratos->valor ?? ''}}">
</div>
<div class="form-group">
    <label for="data">Nome tabeliao: </label>
    <input type="text" class="form-control" id="nome" name="nome"
           value="{{$contratos->nome_tabeliao ?? ''}}">



