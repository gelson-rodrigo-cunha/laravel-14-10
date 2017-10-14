@extends('layouts.master')
@section('title', 'Cadastro de usuário')
@section('subtitle', 'Cadastrar usuário')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar</div>


                <div class="panel-body">
                    <br>
                    <h4 id="center"><b>CADASTRO DE USUÁRIOS</b></h4>
                    <br> 
                    <form action="{{url('/oauth/clients')}}" method="post">
                  
                        
                        {{ csrf_field() }}
                        <div class="col-md-12">              
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" name="name" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>
                          <div class="col-md-12">              
                            <div class="form-group">
                                <label for="redirect">Redirecionamento</label>
                                <input type="text" value="http://localhost" name="redirect" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>
                       
                    
                                            
                        <div class="col-md-12">                   
                            <button type="reset" class="btn btn-default">
                                Limpar
                            </button>
                            <button type="submit" 
                                    class="btn btn-warning" id="black">
                                Cadastrar
                            </button>
                        </div>
                    </form>      


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