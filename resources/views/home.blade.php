@extends('layouts.master')
@section('title', '')
@section('subtitle', 'Home')
@section('content')
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            Bem vindo a aplicação
          <br/>
              @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bem vindo a aplicação
                    <br><br>
           

              
              
               <br>  Usuários
                  <li><a href="<?php echo url('/api/clients/create'); ?>"> Criar Usuário</a></li>
                       <li><a href="<?php echo url('/api/clients/'); ?>"> Listar Usuários</a></li>
                 
                  <br>Tarefas
                 <li><a href="<?php echo url('/api/tasks/create'); ?>"> Cadastrar Tarefa</a></li>
                       <li><a href="<?php echo url('/api/tasks/'); ?>"> Listar Tarefas</a></li>     
                </div>
 <br> 
            </div>
        </div>
    </div>
          <div class="ajax-content">
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
<div class="container">
  
</div>
@endsection