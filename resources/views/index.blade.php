@extends('layout.app',  ["current" => "home"])

@section('body')

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script  src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js')}}"> </script>
</head>


<div class="card border">
    <div class="card-body">
        <h3 style="text-align:center" class="card-title"> Controle de Cliente </h3>

        <table class="table table-ordered" id="tabelaVendas">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Cliente</th>
                    <th>Produto</th>
                    <th>Quantidade Compras cliente</th>
                    <th>Valor vendas</th>
                </tr>
            </thead>
            <tbody>
        

            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <button class="btn btn-sm btn-primary" role="button" onClick="AbrirModal()"> Adicionar Venda </a>
    </div>
</div>


    <!--Modal-->
    <div class="modal" tabindex="-1" role="dialog" id="listaVendas">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" id="formVendas">
                    <div class="modal-header">
                        <h5 class="modal-title">Novo cliente</h5>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id" class="form-control">
                        <div class="form-group">
                            <label for="nome" class="control-label">Nome Cliente</label>
                            <div class="input-group">
                                <select class="form-control" id="nome">
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="modelo" class="control-label">Modelo</label>
                            <div class="input-group">
                                <select class="form-control" id="modelo">
                                </select>
                            </div>
                        </div>
                        
                        
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="rua">Cor:</label>
                            <select class="form-control" id="cor">
                            
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="Numero">ML</label>
                            <select class="form-control" id="ml">

                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="quant_vendas">Quantidade Compra:</label>
                            <input type="number" class="form-control" id="quant_vendas" name="quant_vendas" required="">
                        </div>
                    </div>
                </div>    

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>      

@endsection


@section('javascript')
<script type="text/javascript">
    <!--Abrir modal -->
    function AbrirModal(){
        $('#nome').val('');
        $('#listaVendas').modal('show')
    }

    function carregarSelects(){
        $.getJSON('/api/clientes', function(data) { 
            console.log(data);
            for(i=0;i<data.length;i++) {
                opcao = '<option value= "' + data[i].id + '">' +
                    data[i].nome + '</option>';
                $('#nome').append(opcao);
            }
        });
    }


    $(function() {
        carregarSelects();
    })

</script>
@endsection