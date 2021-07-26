@extends('layout.app', ["current" => "clientes"])

@section('body')

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script type="text/javascript" src="{{ asset('js/scripts.js')}}"> </script>
</head>

  <form action="/clientes/{{$clients->id}}" method="POST">
  @csrf
  <h1 style="text-align:center"> Editar dados cadastrado</h1>

  <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nomeCliente" name="nomeCliente" value="{{$clients->nome}}" minlength="3" required="">
    </div>
  </div>  

  <div class="form-row">
    <div class="col-md-8 mb-3">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{$clients->email}}" required="" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Telefone</label>
      <input type="text" class="form-control" id="telefone" name="telefone" value="{{$clients->tel}}" required="" placeholder="(XX) XXXXX-XXXX" required="" minlength="10" maxlength="11" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" 
              OnKeyPress="$(this).mask('(00) 00000-0000')">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="CEP">CEP <h11>*</h11></label>
        <input id="cep" name="cep" value="{{$clients->cep}}" placeholder="00000-000" class="form-control input-md" required="" value="" type="search" maxlength="9" 
        onkeypress="$(this).mask('00000-000')" onblur="pesquisacep(this.value);" /></label>
    </div>
  </div>    
  <div class="form-row">
    <div class="col-md-8 mb-3">
      <label for="rua">Rua</label>
      <input type="text" class="form-control" id="rua" name="rua" value="{{$clients->endereco}}" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="Numero">Nº</label>
      <input type="text" class="form-control" id="n" name="n" value="{{$clients->numero}}">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="bairro">Bairro</label>
      <input type="text" class="form-control" id="bairro" name="bairro" value="{{$clients->bairro}}" required>
    </div>
    
    <div class="col-md-3 mb-3">
      <label for="validationTooltip03">Cidade</label>
      <input type="text" class="form-control" id="cidade" name="cidade" value="{{$clients->cidade}}" required="">
    </div>
    <div class="col-md-3 mb-3">
      <label for="estado">Estado</label>
      <input type="text" class="form-control" id="estado" name="estado" value="{{$clients->uf}}" required="" readonly="readonly">
    </div>
  </div>
  
  <button type="Submit" class="btn btn-success btn-sm">Editar</button>
  <a href="/clientes" class="btn btn-secondary btn-sm">Voltar</a>
  
</div>

</form>

@endsection
