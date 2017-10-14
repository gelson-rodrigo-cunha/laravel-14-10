@extends('layouts.master')
@section('title', 'Editar usuário')
@section('subtitle', 'Editar usuário')
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                        @if (session('message_edit'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" 
               data-dismiss="alert"
               aria-label="close">&times;</a>
            {{ session('message_edit') }}
        </div>
        @endif
                    <form method="post" 
                          action="{{route('user.update', $users->id)}}" 
                          method="post">
                        {!! method_field('put') !!}
                        {{ csrf_field() }}
                      
        <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nome</label>
                  <input type="text"  value="{{$users->name or old('name')}}" class="form-control" name="name" id="name" placeholder="Digite seu Nome">
                </div>
                <div class="form-group">
                  <label for="startTask">Email</label>
             <input type="text" value="{{$users->email or old('email')}}" class="form-control" name="email" id="email" placeholder="Digite seu email">
                </div>
                   <div class="form-group">
                  <label for="password">Senha</label>
             <input type="text" value="{{$users->password or old('password')}}" class="form-control" name="password" id="password" placeholder="Digite sua senha">
                </div>
            
                        <div class="col-md-12">                   
                           
                            <button type="submit" 
                                    class="btn btn-warning" id="black">
                                Alterar
                            </button>
                        </div>
                    </form>    

               </div>
        </div>
      </div> 

@endsection