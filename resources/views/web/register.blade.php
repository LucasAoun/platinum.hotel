@extends('layouts.web-intern')
@section('title', 'Platinum - Register')

@section('content')
<div class="page-content-wrapper">
    <div class="content-form">
        <h1>Crie uma conta</h1>
        <form action="{{route('web.storeRegister')}}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                  @if ($errors->has('nome'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('nome') }}</strong>
                        </span>
                  @endif
                </div>
                <div class="form-group col-md-6">
                  <label>Sobrenome</label>
                  <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required>
                  @if ($errors->has('sobrenome'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('sobrenome') }}</strong>
                        </span>
                  @endif
                </div>
              </div>
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
                <div class="form-group col-md-6">
                    <label>Senha</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label>Cofirmacao de Senha</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="form-group">
                <label>Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua Jorge Luiz, 124" required>
                @if ($errors->has('endereco'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('endereco') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Cidade</label>
                  <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required>
                  @if ($errors->has('cidade'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('cidade') }}</strong>
                        </span>
                  @endif
                </div>
                <div class="form-group col-md-4">
                  <label>Estado</label>
                  <select id="estado" name="estado" class="form-control" required>
                    <option selected></option>
                    <option value="SP">SP</option>
                  </select>
                  @if ($errors->has('estado'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('estado') }}</strong>
                        </span>
                  @endif
                </div>
                <div class="form-group col-md-4">
                  <label>CEP</label>
                  <input type="text" class="form-control" id="cep" name="cep" required>
                  @if ($errors->has('cep'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('cep') }}</strong>
                        </span>
                  @endif
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</div>

@endsection
