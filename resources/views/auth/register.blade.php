@extends('layouts.login')
@section('content')
  <div class="login-logo">
    <a href="{{ url('/login') }}"><b>Sistema de </b>Usuários</a>
  </div>
 <div class="register-box-body">
    <p class="login-box-msg">Registre-se para fazer login</p>


                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           

                          
                                <input id="name" type="text" placeholder="Nome" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         
                                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                          
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      
                                <input id="password" type="password" placeholder="Senha" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
                        </div>
                   
                        <div class="form-group">
                        
                                <input id="password-confirm" type="password" placeholder="Confirmar senha" class="form-control" name="password_confirmation" required>
                    
                        </div>
                             <div class="row">
                         <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar-se
                                </button>
                            </div>
                          </div>
                    </form>
    
@endsection
