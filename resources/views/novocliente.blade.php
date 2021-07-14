@extends('layout.app', ["current" => "clientes"])

@section('body')

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="{{ asset('js/scripts.js')}}"> </script>
</head>

<div class="panel panel-primary"> 
  <div class="form-horizontal">
    <form action="/clientes" method="POST">
    @csrf
    <h1 style="text-align:center"> Cadastro de Cliente</h1>
        
        <div class="panel-body">
            <div class="form-group">

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="NomeCliente"> Nome <h11>*</h11></label>  
          <div class="col-md-8">
          <input id="nomeCliente" name="nomeCliente" placeholder="" class="form-control input-md" required="" type="text">
          </div>
        </div>

        <!-- Prepended text-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="tel">Telefone <h11>*</h11></label>
          <div class="col-md-2">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input id="telefone" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
              OnKeyPress="formatar('## #####-####', this)">
            </div>
          </div>
          
            <label class="col-md-1 control-label" for="email">Email *</label>
            <div class="col-md-5">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="text"  pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$">
            </div>
          </div>
        </div> 

        <!-- Search input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
          <div class="col-md-2">
            <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
          </div>
          <div class="col-md-2">
              <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
            </div>
        </div>

        <!-- Prepended text-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="endereco">Endereço</label>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon">Rua</span>
              <input id="rua" name="rua" class="form-control" placeholder="" required="" type="text">
            </div>
            
          </div>
            <div class="col-md-2">
            <div class="input-group">
              <span class="input-group-addon">Nº <h11>*</h11></span>
              <input id="n" name="n" class="form-control" required=""  type="text">
            </div>
            
          </div>
          
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon">Bairro</span>
              <input id="bairro" name="bairro" class="form-control" required="" type="text">
            </div>
            
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" for="cidade"></label>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon">Cidade</span>
              <input id="cidade" name="cidade" class="form-control" required=""  type="text">
            </div>
            
          </div>
          
          <div class="col-md-2">
            <div class="input-group">
              <span class="input-group-addon">Estado</span>
              <input id="estado" name="estado" class="form-control"  required=""  readonly="readonly" type="text">
            </div>
            
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" for="Cadastrar"></label>
          <div class="col-md-8">
            <button type="Submit" class="btn btn-success btn-sm">Cadastrar</button>
            <button type="reset" class="btn btn-danger btn-sm">Limpar</button>
            <a href="/clientes" class="btn btn-secondary btn-sm">Voltar</a>
          </div>
        </div>

        </div>
    </div>
</div>

</form>

</html>

@endsection