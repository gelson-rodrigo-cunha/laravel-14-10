@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Usuários cadastrados</div>


                <div class="panel-body">
                    <br>
                    <h4 id="center"><b>CADASTRO DE USUÁRIOS</b></h4>
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
                          action="{{route('clients.update', $clients->id)}}" 
                          method="post">
                        {!! method_field('put') !!}
                        {{ csrf_field() }}
                        <div class="col-md-12">              
                            <div class="form-group">
                                <label for="name">Nome do usuário</label>
                                <input type="text" name="name" 
                                       class="form-control" 
                                       value="{{$clients->name or old('name')}}"
                                       required>
                            </div>
                        </div>
                  
                          <div class="col-md-12">              
                            <div class="form-group">
                                <label for="redirect">Redirecionameto</label>
                                <input type="text" name="redirect" 
                                       class="form-control" 
                                       value="{{$clients->redirect or old('redirect')}}"
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