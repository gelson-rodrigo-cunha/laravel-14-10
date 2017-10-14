@extends('layouts.login')

@section('content')
 <div class="login-logo">
    <a href="{{ url('/reset') }}"><b>Sistema de </b>Usuários</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Reset sua senha</p>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           

                          
                                <input id="email" type="email" placeholder="Digite o Email cadastrado" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Enviar para o email
                                </button>
                            </div>
                        </div>
                    </form>
               
@endsection
