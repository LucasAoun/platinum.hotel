@extends('layouts.web-intern')
@section('title', 'Platinum - Detalhes Acomodação')


@section('content')
<div class="wrapper-acomodacao-detalhes">
    <h1>Detalhes do quarto</h1>

    <div class="quarto-detalhes">
        <div class="img-quarto-detalhes">
            <img src="{{ asset('img/quarto-praia-1.jpg') }}" alt="">
        </div>
        <div class="wrapper-descricao">
            <h1>Platinum Hotel</h1>

            <div class="flex">
                <strong>Pessoas:</strong>
                <p>{{$quarto->pessoas}}</p>
            </div>

            <div class="flex">
                <strong>Descrição:</strong>
                @if(!empty($quarto->descricao))
                        <p>{{$quarto->descricao}}</p>
                @else
                <p>O Platinum é um hotel luxuoso que oferece TV de tela plana,
                    geladeira e ar-condicionado nos quartos, além de wi-fi
                    gratuito para que todos os hóspedes possam usar a internet à vontade.</p>
                @endif

            </div>

            <div class="flex">
                <strong>Preço diaria:</strong>
                <h3>R${{$quarto->valor}}</h3>
            </div>

            <li class="concluir-reserva">
                <a href="/acomodacao/{{$quarto->id}}/pagamento">Concluir reserva</a>
            </li>
        </div>
    </div>
</div>

@endsection
