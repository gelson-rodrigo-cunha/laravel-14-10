@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar</div>


                <div class="panel-body">
                    <br>
                    <h4 id="center"><b>CADASTRO DE POSTS</b></h4>
                    <br> 
                        @if (session('message_edit'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" 
               data-dismiss="alert"
               aria-label="close">&times;</a>
            {{ session('message_edit') }}
        </div>
        @endif
                    <form method="post" 
                          action="{{route('posts.update', $posts->id)}}" 
                          method="post">
                        {!! method_field('put') !!}
                        {{ csrf_field() }}
                        <div class="col-md-12">              
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" name="titlePost" 
                                       class="form-control" 
                                       value="{{$posts->titlePost or old('titlePost')}}"
                                       required>
                            </div>
                        </div>
                  
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Descrição</label>
                                <input type="text" name="description" 
                                       class="form-control" 
                                       value="{{$posts->description or old('description')}}"
                                       required>
                            </div>
                        </div>
                                      
                        <div class="col-md-12">                   
                            <button type="reset" class="btn btn-default">
                                Limpar
                            </button>
                            <button type="submit" 
                                    class="btn btn-warning" id="black">
                                Alterar
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