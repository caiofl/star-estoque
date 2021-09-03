@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <h2 style="text-align:center" class="card-title"> Cadastro de Produtos</h2>
        <br>

        @if(count($prods) > 0)
           <table id="lista_prod" class="table table-ordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Modelo</th>
                        <th>Fabricante</th>
                        <th>Cor</th>
                        <th>Ml</th>
                        <th>Quantidade</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prods as $prod) {{--Listar--}}
                        <tr>
                            <td> {{$prod->id}}          </td>
                            <td> {{$prod->modelo}}      </td>
                            <td> {{$prod->fabricante}}  </td>
                            <td> {{$prod->cor}}         </td>
                            <td> {{$prod->ml}}          </td>
                            <td> {{$prod->quantidade}}  </td>
                            <td>
                                <a href="/produtos/editar/{{$prod->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/produtos/apagar/{{$prod->id}}" class="btn btn-sm btn-danger"> Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @endif  
           </table>
  
     </div>

     <div class="card-footer">
        <a href="/produtos/novo/" class="btn btn-sm btn-success" role="button">Novo Produto</a>

     </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

    <script>
         $(document).ready(function(){
            $('#lista_prod').DataTable({
        	    "language": {
                    "lengthMenu": "Mostrando _MENU_ registros por página",
                    "zeroRecords": "Nada encontrado",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "Nenhum registro disponível",
                    "infoFiltered": "(filtrado de _MAX_ registros no total)",
                    "search": "Pesquisa:",
                      "paginate": {
                        "previous": "Anterior",
                        "next": "Próximo"
                    }
            }
        });
  });

  </script>

@endsection
