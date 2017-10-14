@extends('layouts.master')
@section('title', 'Cadastro de usuário')
@section('subtitle', 'Cadastrar usuário')
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastrar</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
               <form action="{{route('user.store')}}" method="post">
                  {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nome</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Digite seu nome">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
             <input type="text" class="form-control" name="email" id="email" placeholder="Digite seu email">
                </div>
                   <div class="form-group">
                  <label for="password">Senha</label>
             <input type="text" class="form-control" name="password" id="password" placeholder="Digite sua senha">
                </div>
         
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>
        </div>
      </div> 
@endsection