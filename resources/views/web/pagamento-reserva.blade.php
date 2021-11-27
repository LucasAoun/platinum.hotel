@extends('layouts.web-intern')
@section('title', 'Platinum - Register')

@section('content')
    <div class="page-content-wrapper">
        <div class="content-form">
            <h1>Pagamento</h1>
            <form action="{{ route('web.home') }}" onsubmit="myFunction()" method="get">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Data de entrada</label>
                        <input type="date" class="form-control" id="data_entrada" name="data_entrada" required>
                        @if ($errors->has('data_entrada'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('data_entrada') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label>Data de saída</label>
                        <input type="date" class="form-control" id="data_saida" name="data_saida" required>
                        @if ($errors->has('data_saida'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('data_saida') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Nome do titular do cartao</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                        @if ($errors->has('nome'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('nome') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>CPF do titular do cartão</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                        @if ($errors->has('cpf'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('cpf') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <label>Número do cartão</label>
                        <input type="number" class="form-control" id="numero_cartao" name="numero_cartao"
                            placeholder="0000.0000.0000.0000" required>
                        @if ($errors->has('numero_cartao'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('numero_cartao') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <label>Código de segurança</label>
                        <input type="number" class="form-control" id="codigo_seguranca" name="codigo_seguranca"
                            placeholder="123" required>
                        @if ($errors->has('codigo_seguranca'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('codigo_seguranca') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label>Data de validade do cartão</label>
                        <input type="date" class="form-control" id="data_validade" name="data_validade" required>
                        @if ($errors->has('data_validade'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('data_validade') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label>Parcelas</label>
                        <select id="parcelas" name="parcelas" class="form-control" required>
                            <option value="" selected>Numero de parcelas</option>
                            <option value="1">1x</option>
                            <option value="2">2x</option>
                            <option value="3">3x</option>
                            <option value="4">4x</option>
                            <option value="5">5x</option>
                            <option value="6">6x</option>
                            <option value="7">7x</option>
                            <option value="8">8x</option>
                            <option value="9">9x</option>
                            <option value="10">10x</option>
                            <option value="12">11x</option>
                            <option value="12">12x</option>
                        </select>
                        @if ($errors->has('parcelas'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('parcelas') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
        <button type="submit" class="btn btn-primary">Efetuar pagamento</button>
        </form>
    </div>
    </div>

    <script>
        function myFunction() {
            alert("Pagamento efetuado sucesso! Aguarde o retorno via email");
          }
        </script>

@endsection
