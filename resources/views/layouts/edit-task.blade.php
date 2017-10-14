@extends('layouts.master')
@section('title', 'Editar tarefa')
@section('subtitle', 'Editar tarefa')
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
                          action="{{route('tasks.update', $tasks->id)}}" 
                          method="post">
                        {!! method_field('put') !!}
                        {{ csrf_field() }}
                      
        <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Título da tarefa</label>
                  <input type="text"  value="{{$tasks->titleTask or old('titleTask')}}" class="form-control" name="titleTask" id="titleTask" placeholder="Título da tarefa">
                </div>
                <div class="form-group">
                  <label for="startTask">Data e hora de iniciar a tarefa</label>
             <input type="text" value="{{$tasks->startTask or old('startTask')}}" class="form-control" name="startTask" id="startTask" placeholder="0000-00-00 00:00:00">
                </div>
                   <div class="form-group">
                  <label for="endTask">Data e hora do fim da tarefa</label>
             <input type="text" value="{{$tasks->endTask or old('endTask')}}" class="form-control" name="endTask" id="endTask" placeholder="0000-00-00 00:00:00">
                </div>
                   
        
            <input type="hidden" class="form-control" name="statusTask" id="statusTask" value="0">
     
               
                 <div class="form-group">
                  <label>Descrição da tarefa</label>
                  <textarea class="form-control"  rows="3" name="descriptionTask" id="descriptionTask" placeholder="Digite a descrição da tarefa">{{$tasks->descriptionTask or old('descriptionTask')}}</textarea>
                </div>
   
                <div class="form-group">   
                  <label>Selecione o usuário</label>
                    <select name="idUser" id="idUser" class="form-control">
                @foreach($users as $user)
                   <option value="{{$user->id}}"

                  @if($user->id == $tasks->idUser)
                    selected
                    @endif
                    >{{$user->name}}</option>
                   @endforeach
                 </select>

                </div>
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