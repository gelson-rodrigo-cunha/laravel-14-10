@extends('layouts.login')

@section('content')
  <div class="login-logo">
    <a href="{{ url('/login') }}"><b>Sistema de </b>Usuários</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Faça login para acessar</p>

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
               
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         

                         
                                <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                 <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                      
                        </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                   <input id="password" type="password" placeholder="Senha" class="form-control" name="password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                          @if ($errors->has('password'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('password') }}</strong>
                             </span>
                          @endif
                  
                        </div>
             <div class="row">
                 <div class="col-xs-8">
                  <div class="checkbox icheck">
                        <label>
                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                          Lembrar-me
                        </label>
                    </div>
                  </div>
        <!-- /.col -->
                     <div class="col-xs-4">
                     <button type="submit" class="btn btn-primary btn-block btn-flat">
                                    Login
                                </button>

                             </div>
        <!-- /.col -->
                        </div>
                    </form>

          <a href="{{ route('password.request') }}">Esqueceu sua senha?</a><br>
          <a href="{{ route('register') }}" class="text-center">Register-se</a>
                
@endsection
