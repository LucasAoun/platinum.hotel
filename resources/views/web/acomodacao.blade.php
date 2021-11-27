@extends('layouts.web-intern')
@section('title', 'Platinum - Acomodações')


@section('content')

<div class="wrapper-acomodacao">
    <h1>Acomodações</h1>

    <div class="lista-acomodacao">
        <div class="bedrooms-high">
            <div class="content-slider">
                @foreach($quartos as $quarto)
                <div class="card-bedroom">
                    <img class="img-card-bedroom" src="{{ asset('img/quartos/'.$quarto->id.'/foto-quarto.jpg') }}" alt="" srcset="">
                    @empty($quarto->titulo_quarto)
                        <h1>Quarto platinum padrão<h1>
                    @endempty
                        <h1>{{$quarto->titulo_quarto}}</h1>
                    <div class="description-bedroom">
                        @empty($quarto->descricao)
                            <p>Hotel com uma vista excelente para o mar, com uma cama de casal aconchegante...</p>
                        @endempty
                        <p>{{Str::limit($quarto->descricao, 100, '...')}}</p>
                    </div>
                    <li><a href="/acomodacao/{{$quarto->id}}">Reservar</a></li>
                </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
