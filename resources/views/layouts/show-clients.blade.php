@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Usuários cadastrados</div>


                <div class="panel-body">
                    <br>
               

                
                        <h4 id="center"><b>Usuários cadastrados ({{$total}})</b></h4>
                        <br>
                            @if (session('message'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" 
               data-dismiss="alert"
               aria-label="close">&times;</a>
            {{ session('message') }}
        </div>
        @endif
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th id="center">Id</th>
                                        <th>Nome</th>
                                        <th>Redirect</th>
                                         <th>Secret</th>            
                                                      
                                        <th id="center">Ações</th>                
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clients as $client)
                                    <tr>
                                        <td id="center">{{$client->id}}</td>
                                        <td title="Nome">{{$client->name}}</td>
                                        <td title="Descrição">{{$client->redirect}}</td>
                                         <td title="Descrição">{{$client->secret}}</td>
                                   
                                        <td id="center">
                                            <a href="{{route('clients.edit', $client->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Alterar">Editar</a>

                                            &nbsp;<form style="display: inline-block;" method="POST" 
                                                        action="{{route('clients.destroy', $client->id)}}"                                                        
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Excluir" 
                                                        onsubmit="return confirm('Confirma exclusão?')">
                                                {{method_field('DELETE')}}{{ csrf_field() }}                                                
                                                <button type="submit" style="background-color: #fff">
                                                    <a>Excluir</a>                                                    
                                                </button></form></td>               
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    







                </div>
            </div>
     </div>
                   <li><a href="<?php echo url('/api/posts/create'); ?>"> Criar Notícia</a></li>
                      <li><a href="<?php echo url('/api/posts/'); ?>"> Listar Notícia</a></li>
                  <li><a href="<?php echo url('/api/clients/create'); ?>"> Criar Usuário</a></li>
                       <li><a href="<?php echo url('/api/clients/'); ?>"> Listar Usuários</a></li>
            </div>
        </div>
    </div>
</div>
@endsection
