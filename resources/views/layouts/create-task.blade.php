@extends('layouts.master')
@section('title', 'Cadastro de tarefa')
@section('subtitle', 'Cadastrar tarefa')
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
               <form action="{{route('tasks.store')}}" method="post">
                  {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Título da tarefa</label>
                  <input type="text" class="form-control" name="titleTask" id="titleTask" placeholder="Título da tarefa">
                </div>
                <div class="form-group">
                  <label for="startTask">Data e hora de iniciar a tarefa</label>
             <input type="text" class="form-control" name="startTask" id="startTask" placeholder="0000-00-00 00:00:00">
                </div>
                   <div class="form-group">
                  <label for="startTask">Data e hora do fim da tarefa</label>
             <input type="text" class="form-control" name="endTask" id="endTask" placeholder="0000-00-00 00:00:00">
                </div>
                   
        
            <input type="hidden" class="form-control" name="statusTask" id="statusTask" value="0">
     
               
                 <div class="form-group">
                  <label>Descrição da tarefa</label>
                  <textarea class="form-control" rows="3" name="descriptionTask" id="descriptionTask" placeholder="Digite a descrição da tarefa"></textarea>
                </div>
   
                <div class="form-group">   
                  <label>Selecione o usuário</label>
                    <select name="idUser" id="idUser" class="form-control">
                @foreach($users as $user)
                   <option value="{{$user->id}}">{{$user->name}}</option>
                 @endforeach
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>
        </div>
      </div> 
@endsection