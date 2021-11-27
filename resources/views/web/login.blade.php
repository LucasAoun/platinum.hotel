@extends('layouts.web-intern')
@section('title', 'Platinum - Register')

@section('content')
<div class="login-content-wrapper">
    <div class="content-form">
        <h1>Faça o login</h1>
        <form action="{{route('web.storeLogin')}}" method="POST">
            @csrf
              <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@exemple.com.br" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group col-md-12">
                    <label>Senha</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>
</div>

@endsection
