@extends('layouts.master')
@section('title', 'Usuários cadastrados')
@section('subtitle', 'Usuários cadastrados')
@section('content')

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Usuários cadastradas</h3>
                               @if (session('message'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" 
               data-dismiss="alert"
               aria-label="close">&times;</a>
            {{ session('message') }}
        </div>
  @endif
              <div class="box-tools">
             
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                   
                <tr>
                                        <th id="center">Id</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                         <th>Senha</th>            
                                                      
                                        <th id="center">Ações</th>      
                                          <th id="center">Localização</th>           
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td id="center">{{$user->id}}</td>
                                        <td title="Nome">{{$user->name}}</td>
                                        <td title="email">{{$user->email}}</td>
                                         <td title="senha">{{$user->password}}</td>
                                   
                                             <td> 
                           <a href="{{route('user.edit', $user->id)}}">
                                               <button type="button" class="btn btn-success">Editar</button></a>
                                              
                                            &nbsp;<form style="display: inline-block;" method="POST" 
                                                        action="{{route('user.destroy', $user->id)}}"
                                                        onsubmit="return confirm('Confirma exclusão?')">
                                                {{method_field('DELETE')}}{{ csrf_field() }}                                                
                                                <button type="submit" class="btn btn-danger btn-flat">
                                                     <a style="color: #fff; text-decoration:none; ">Excluir</a>   

                                                </button></form></td> 
                                                <td>
                                                   <a href="{{route('user.show', $user->id)}}">
                                               <button type="button" class="btn btn-success">Localização</button></a>  

                                                </td>               
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    







                </div>
            </div>
     </div>
             
            </div>
        </div>
    </div>
</div>
@endsection
