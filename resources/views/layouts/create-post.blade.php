@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar</div>


                <div class="panel-body">
                    <br>
                    <h4 id="center"><b>CADASTRO DE POSTAGENS</b></h4>
                    <br> 
                    <form action="{{route('posts.store')}}" method="post">
                  
                        
                        {{ csrf_field() }}
                        <div class="col-md-12">              
                            <div class="form-group">
                                <label for="name">Post</label>
                                <input type="text" name="titlePost" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>
                       
                        <div class="col-md-12">
                            <div class="form-group">

                                <label for="description">Descrição</label>
                                      <textarea class="form-control" name="description" placeholer="Message">
                                      </textarea>
                             
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