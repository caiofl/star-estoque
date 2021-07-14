@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <h2 style="text-align:center" class="card-title"> Cadastro de Produtos</h2>
        <br>

        @if(count($prods) > 0)
           <table class="table table-ordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Modelo</th>
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
                            <td> {{$prod->cor}}         </td>
                            <td> {{$prod->ml}}          </td>
                            <td> {{$prod->quantidade}}  </td>
                            <td>
                                <a href="/produtos/editar/{{$prod->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/produtos/apagar/{{$prod->id}}" class="btn btn-sm btn-danger">Excluir</a>
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

@endsection