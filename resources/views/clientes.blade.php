@extends('layout.app', ["current" => "clientes"])

@section('body')

<div class="card border">
    <div class="card-body">
        <h2 style="text-align:center" class="card-title"> Cadastro de Cliente </h2>
        <br>

        @if(count($clients) > 0)
           <table class="table table-ordered table-striped">
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
                   @foreach($clients as $cliente)  {{--Listar--}}
                        <tr>
                            <td>  {{$cliente->id}}    </td>
                            <td>  {{$cliente->nome}}  </td>
                            <td>  {{$cliente->tel}}   </td>
                            <td>  {{$cliente->email}} </td>
                            <td>
                                <a href="/clientes/editar/{{$cliente->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/clientes/apagar/{{$cliente->id}}" class="btn btn-sm btn-danger">Excluir</a>
                            </td>
                        </tr>
                  @endforeach

                </tbody>
           </table>
        @endif
     </div>

     <div class="card-footer">
        <a href="/clientes/novo/" class="btn btn-sm btn-success" role="button">Novo Cliente</a>

     </div>
</div>


@endsection