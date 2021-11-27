 <nav class="main-navbar">
        <img src="{{asset('img/logo.png')}}" alt="" srcset="">
        <div class="text-navbar">
            <li><a href="{{route('web.home')}}">Home</a></li>
            <li><a href="{{route('web.acomodacao')}}">Acomodações</a></li>
            <li><a href="{{route('web.sobreNos')}}">Sobre nós</a></li>
            <li><a href="{{route('web.contato')}}">Contato</a></li>
        </div>

        <div class="separator"></div>

        <div class="button-login">
            <li><a href="{{route('web.login')}}">Fazer login</a></li>
            <li><a href="{{route('web.register')}}">Register</a></li>
        </div>
    </nav>
