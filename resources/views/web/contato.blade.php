@extends('layouts.web-intern')
@section('title', 'Platinum - Contato')

@section('content')
<div class="page-content-wrapper">
    <div class="content-form">
        <form action="{{route('web.home')}}" method="" onsubmit="myFunction()">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Sobrenome</label>
                  <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@exemple.com.br" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Numero para contato (1)</label>
                    <input type="phone" class="form-control" id="phone" name="phone" placeholder="(11) 99999-9999" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Numero para contato (2)</label>
                    <input type="phone" class="form-control" id="phone" name="phone" placeholder="(11) 99999-9999">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Mensagem</label>
                    <textarea class="form-control" id="mensagem-text" name="mensagem-text" rows="6"></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Enviar mensagem</button>
        </form>
    </div>
</div>

<script>
    function myFunction() {
        alert("Mensagem enviada com sucesso! Aguarde o retorno da nossa companhia");
      }
    </script>

@endsection

