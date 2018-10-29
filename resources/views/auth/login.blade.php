<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>App da Moda - Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" type="text/css" href="">
  <link rel="icon" href="img/logo4.jpg" alt="APP da Moda - Logo-icone">
</head>
<body>

    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                
                <div class="col-12 user-img">
                    <img src="/uploads/profileimage/default.jpg">
                </div>

                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="col-12">
                      <h5 style="color: #fff;">Faça login para administrar o Sistema</h5>
                      
                        @csrf
                        <div class="form-group">
                           <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="exemplo@mail.com" required autofocus>
                              @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                              </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Digite a senha" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
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

