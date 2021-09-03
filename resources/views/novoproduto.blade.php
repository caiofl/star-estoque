@extends('layout.app', ["current" => "produtos"])

@section('body')

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script type="text/javascript" src="{{ asset('js/scripts.js')}}"> </script>
</head>

<form action="/produtos" method="POST">
@csrf
<div class="panel panel-primary  form-horizontal">
    <h1 style="text-align:center"> Cadastro de Produtos</h1>
    <br>
    
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="modelo">Modelo:</label>
      <input type="text" class="form-control" id="modelo" name="modelo" required=""  minlength="4">
    </div>
    <div class="col-md-6 mb-3">
      <label for="fabricante">Fabricante:</label>
      <input type="text" class="form-control" id="fabricante" name="fabricante"  required="" minlength="4">
    </div>
  </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="cor">Cor:</label>
      <input type="text" class="form-control" id="cor" name="cor" required=""  minlength="4">
    </div>
    <div class="col-md-4 mb-3">
      <label for="ml">ML:</label>
      <input type="text" class="form-control" id="ml" name="ml"  required="">
    </div>
     <div class="col-md-4 mb-3">
      <label for="quantidade">Quantidade:</label>
      <input type="number" class="form-control" id="quantidade" name="quantidade" required="">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-2 mb-3">
      <label for="valorCompra">Valor compra:</label>
      <input type="text" class="form-control" id="valorCompra" name="valorCompra" placeholder="somente numero" required="">
    </div>
    <div class="col-md-2 mb-3">
      <label for="valorVenda">Valor venda:</label>
      <input type="text" class="form-control" id="valorVenda" name="valorVenda" placeholder="somente numero" required="">
    </div>
  </div>
  
  <button type="Submit" class="btn btn-success btn-sm">Cadastrar</button>
  <button type="reset" class="btn btn-danger btn-sm">Limpar</button>
  <a href="/produtos" class="btn btn-secondary btn-sm">Voltar</a>

</form>

@endsection
