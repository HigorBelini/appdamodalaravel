<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>App da Moda - Novo usuário</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css') }}">
</head>
<body>

    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                
                <div class="col-12 user-img">
                    <img src="/uploads/profileimage/default.jpg">
                </div>

                <div>
                    <h5>
                    Faça um rápido cadastro para se cadastrar em nosso aplicativo.
                    </h5>
                </div>  
                 
                <form action="{{ url(config('adminlte.register_url', 'register')) }}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                           placeholder="Seu nome" required autofocus>
                    @if ($errors->has('name'))
                         <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
               
                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                           placeholder="exemplo@email.com" required autofocus>
                    @if ($errors->has('email'))
                         <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control"
                           placeholder="Sua senha" required autofocus>
                    @if ($errors->has('password'))
                         <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="Confirme sua senha" required autofocus>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    @if ($errors->has('password_confirmation'))
                         <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn">
                    {{ __('Entrar') }}
                </button>
                </form>
            </div>
        </div>
    </div>

