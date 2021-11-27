@extends('layouts.web-intern')
@section('title', 'Platinum - Home')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/acomodacao1.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>As acomodações são tranquilas e possuem decoração encantadora, frigobar, banheiro e TV via satélite com aparelho de DVD.
                        As unidades têm aquecedor, piso de madeira e um ambiente aconchegante.</h2>
                    <p>Casais particularmente gostam da localização — eles deram nota 9,1 para viagem a dois.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/acomodacao2.jpeg') }}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Diariamente, você pode saborear um café da manhã com especialidades orgânicas, pães, itens de confeitaria, frios e frutas.</h5>
                    <p>Nós falamos a sua língua!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/acomodacao3.jpeg') }}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>A propriedade oferece quartos família e terraço ao ar livre. A propriedade fica perto de atrações famosas como a Cervejaria Baden Baden,
                        o Shopping Cadij e o Aspen Mall.</h5>
                    <p>Você pode relaxar na banheira de hidromassagem.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="bedrooms-high">
        <h3>Top quartos mais destacados</h3>
        <div class="content-slider">
            <div class="card-bedroom">
                <img class="img-card-bedroom" src="{{ asset('img/quarto-praia-1.jpg') }}" alt="" srcset="">
                <h1>Quarto luxuoso vista para o mar</h1>
                <div class="description-bedroom">
                    <p>Hotel com uma vista excelente para o mar, com uma cama de casal aconchegante, incrivel para um casal que quer paz e tranquilidade.</p>
                </div>
                <li><a href="#">Reservar</a></li>
            </div>
            <div class="card-bedroom">
                <img class="img-card-bedroom" src="{{ asset('img/quarto-praia-2.jpg') }}" alt="" srcset="">
                <h1>Quarto master-lux amadeirado</h1>
                <div class="description-bedroom">
                    <p>Um quarto lindo para o casal que gosta de madeira, super confortavél, quentinho com lareira e vista para o mar.</p>
                </div>
                <li><a href="#">Reservar</a></li>
            </div>
            <div class="card-bedroom">
                <img class="img-card-bedroom" src="{{ asset('img/quarto-praia-3.jpg') }}" alt="" srcset="">
                <h1>Quarto luxo presidencial</h1>
                <div class="description-bedroom">
                    <p>Quarto com vista para o mar, organizado a nivel presidencial, com varanda e para quem gosta de decoração com tons claros.</p>
                </div>
                <li><a href="#">Reservar</a></li>
            </div>
            <div class="card-bedroom">
                <img class="img-card-bedroom" src="{{ asset('img/quarto-praia-4.jpg') }}" alt="" srcset="">
                <h1>Quarto casal simples amadeirado</h1>
                <div class="description-bedroom">
                    <p>Quarto com varanda, amadeirado, vista para o mar, com rede na varanda, maravilhoso para as ferias de verao para voce que quer conforto e preço</p>
                </div>
                <li><a href="#">Reservar</a></li>
            </div>
        </div>
    </div>
    <div class="main-banner-first">
        <div class="banner-color">
            <h1>Se sua vontade de viajar não é passageira, por que seus pontos tem que ser?</h1>
                <p>Com os Cartões Platinum Santander suas compras
                valem pontos que não expiram para você trocar
                pelo que quiser na aqui na Platinum.</p>
        </div>
        <img src="{{asset('img/amigos-selfie.jpg')}}" alt="">
    </div>

    <img class="banner-site" src="{{ asset('img/banner-site.jpeg') }}" alt="">
    @include('layouts.footer')

@endsection
