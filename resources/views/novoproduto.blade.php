@extends('layout.app', ["current" => "produtos"])

@section('body')

<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>    
</head>

<form action="/produtos" method="POST">
@csrf
<fieldset>
<div class="panel panel-primary  form-horizontal">
    <h1 style="text-align:center"> Cadastro de Produtos</h1>
        
<div class="panel-body">
    <div class="form-group">

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="modelo">Modelo:</label>  
  <div class="col-md-9">
  <input id="modelo" name="modelo" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="cor">cor:</label>
  <div class="col-md-2">
    <div class="input-group">
      <input id="cor" name="cor" class="form-control" required="" type="text" maxlength="13">
    </div>
  </div>
  
    <label class="col-md-2 control-label" for="ml">ML:</label>
    <div class="col-md-2">
      <div class="input-group">
        <input id="ml" name="ml" class="form-control" required="" type="text" maxlength="13">
      </div>
    </div>
  
    <label class="col-md-1 control-label" for="quantidade">Quantidade:</label>
     <div class="col-md-2">
    <div class="input-group">
      <input id="quantidade" name="quantidade" class="form-control" required="" type="number" maxlength="13">
    </div>
  </div>
 </div> 

<div class="form-group">
  <label class="col-md-2 control-label" for="valorCompra">Valor compra:</label>
  <div class="col-md-2">
    <div class="input-group">
      <input id="valorCompra" name="valorCompra" class="form-control" required="" type="text" placeholder="R$" maxlength="13">
    </div>
  </div>
  
    <label class="col-md-2 control-label" for="valorVenda">Valor venda:</label>
     <div class="col-md-2">
    <div class="input-group">
      <input id="valorVenda" name="valorVenda" class="form-control" required="" type="text" placeholder="R$" maxlength="13">
    </div>
  </div>
</div> 

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success btn-sm" type="Submit">Cadastrar</button>
    <button type="reset" class="btn btn-danger btn-sm">Limpar</button>
    <a href="/produtos" class="btn btn-secondary btn-sm">Voltar</a>
  </div>
</div>

</div>
</div>


</fieldset>
</form>

@endsection