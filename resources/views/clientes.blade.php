@extends('layout.app', ["current" => "clientes"])

@section('body')

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script  src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js')}}"> </script>
</head>


<div class="card border">
    <div class="card-body">
        <h3 style="text-align:center" class="card-title"> Cadastro de Cliente </h3>

        <table class="table table-ordered" id="tabelaClientes">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
        

            </tbody>
        </table>
     </div>
     <div class="card-footer">
        <button class="btn btn-sm btn-primary" role="button" onClick="novoCliente()">Novo Cliente</a>
     </div>
</div>


<!--Modal-->
<div class="modal" tabindex="-1" role="dialog" id="listaClientes">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal" id="formClientes">
                <div class="modal-header">
                    <h5 class="modal-title">Novo cliente</h5>
                </div>
            <div class="modal-body">

                <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="nome" class="control-label">Nome</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nome" placeholder="Nome do cliente">
                        </div>
                    </div>

                <div class="form-row">
                    <div class="col-md-7 mb-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email" required="">
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="telefone">Telefone:</label>
                        <input type="text" class="form-control" id="tel" name="tel" required="" placeholder="(XX) XXXXX-XXXX" minlength="10" maxlength="11" 
                            OnKeyPress="$(this).mask('(00) 00000-0000')">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                    <label for="CEP">CEP:</label>
                        <input id="cep" name="cep" placeholder="00000-000" class="form-control input-md" required="" value="" type="search" maxlength="9" 
                        onkeypress="$(this).mask('00000-000')" onblur="pesquisacep(this.value);" />
                    </div>
                </div>   

                <div class="form-row">
                    <div class="col-md-8 mb-3">
                        <label for="rua">Rua:</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="Numero">Nº</label>
                        <input type="text" class="form-control" id="numero" name="numero">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" required>
                    </div>
                    
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip03">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" required="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="estado">Estado:</label>
                        <input type="text" class="form-control" id="uf" name="uf" required="" readonly="readonly">
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

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
    });

    function novoCliente(){
        <!-- Limpar os campo -->
        $('#nome').val('');
        $('#email').val('');
        $('#tel').val('');
        $('#cep').val('');
        $('#endereco').val('');
        $('#numero').val('');
        $('#bairro').val('');
        $('#cidade').val('');
        $('#uf').val('');
        <!-- Abrir Modal-->
        $('#listaClientes').modal('show')
    }

    function addLinha(c) {
        var linha = "<tr>" +
            "<td>" + c.id + "</td>" +
            "<td>" + c.nome + "</td>" +
            "<td>" + c.tel + "</td>" +
            "<td>" + c.email + "</td>" +
            "<td>" + 
                '<button class="btn btn-xs btn-primary" onclick="editar(' + c.id + ')"> Editar </button> ' +
                '<button class="btn btn-xs btn-danger" onclick="remover(' + c.id + ')"> Excluir </button> ' +
            "</td>" +
            "<tr>";
        return linha;
    }

    function editar(id) {
        $.getJSON('/api/clientes/'+id, function(data){
            console.log(data);
                $('#id').val(data.id);
                $('#nome').val(data.nome);
                $('#email').val(data.email);
                $('#tel').val(data.tel);
                $('#cep').val(data.cep);
                $('#endereco').val(data.endereco);
                $('#numero').val(data.numero);
                $('#bairro').val(data.bairro);
                $('#cidade').val(data.cidade);
                $('#uf').val(data.uf);
                $('#listaClientes').modal('show')
        });
    }

    function remover(id) {
        $.ajax({
            type: "DELETE",
            url: "/api/clientes/" + id,
            context: this,
            success: function() {
                console.log('Cliente removido com sucesso');
                linhas = $("#tabelaClientes>tbody>tr");
                e = linhas.filter( function(i, elemento) {
                    return elemento.cells[0].textContent == id;
                });
                if (e)
                    e.remove();
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    function carregarClientes() {
        $.getJSON('/api/clientes', function(data){
           for(i=0;i<data.length;i++) {
                linha = addLinha(data[i]);
                $('#tabelaClientes>tbody').append(linha);
            }
        });
    }

    function criarCliente() {
        cliente = { 
            nome: $("#nome").val(),
            email: $("#email").val(),
            tel: $("#tel").val(),
            cep: $("#cep").val(),
            endereco: $("#endereco").val(),
            numero: $("#numero").val(),
            bairro: $("#bairro").val(),
            cidade: $("#cidade").val(),
            uf: $("#uf").val()
        };
        $.post("/api/clientes", cliente, function(data) {
            cliente = JSON.parse(data);
            linha = addLinha(cliente);
            $('#tabelaClientes>tbody').append(linha);
        });
    }

    function salvarCliente() {
        cliente = { 
            id: $("#id").val(),
            nome: $("#nome").val(),
            email: $("#email").val(),
            tel: $("#tel").val(),
            cep: $("#cep").val(),
            endereco: $("#endereco").val(),
            numero: $("#numero").val(),
            bairro: $("#bairro").val(),
            cidade: $("#cidade").val(),
            uf: $("#uf").val()
        };
        $.ajax({
            type: "PUT",
            url: "/api/clientes/" + cliente.id,
            context: this,
            data: cliente,
            success: function(data) {
                cliente = JSON.parse(data);
                linhas = $("#tabelaClientes>tbody>tr");
                e = linhas.filter( function(i, e) {
                    return (e.cells[0].textContent == cliente.id);
                });
                if (e) {
                    e[0].cells[0].textContent = cliente.id;
                    e[0].cells[1].textContent = cliente.nome;
                    e[0].cells[2].textContent = cliente.email;
                    e[0].cells[3].textContent = cliente.tel;
                    e[0].cells[4].textContent = cliente.cep;
                    e[0].cells[5].textContent = cliente.endereco;
                    e[0].cells[6].textContent = cliente.numero;
                    e[0].cells[7].textContent = cliente.bairro;
                    e[0].cells[8].textContent = cliente.cidade;
                    e[0].cells[9].textContent = cliente.uf;
                }
                
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    // Tirar o refresh apos salvar
    $("#formClientes").submit( function(event){
        event.preventDefault(); 
        if ($("#id").val() != '')
            salvarCliente();
        else
            criarCliente();
        $("#listaClientes").modal('hide');
    });

    $(function() {
        carregarClientes();
    })

</script>

@endsection