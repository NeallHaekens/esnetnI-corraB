<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>
@include('cookieConsent::index')
<header>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-grey shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{--{{ config('app.name', 'Laravel') }}--}}
                    <div id="header-flex">
                        <img id="logo-header" src="{{ asset('logos/Logo6_groot.png') }}" alt="Barroc Intens grote logo">
                        <h1>Barroc Intens<span class="dot yellow yellow-dot">.</span></h1>
                    </div>
                </a>
                <div>
                    <div class="flex">
                        <a class="links-header" href=""><img class="icons-small" src="{{ asset('../icons/old_phone.png') }}" alt=""> 06-XXX-XXX-XX</a>
                    </div>
                    <div class="flex">
                        <a class="links-header" href="mailto:barrocintens@info.nl"><img class="icons-small" src="{{ asset('../icons/mail.png') }}" alt=""> barrocintens@info.nl</a>
                    </div>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    @guest
                        <a class="header-link" href="#quotation-section">Offerte aanvragen</a>
                        {{--<a class="header-nav" href="{{asset('product/index')}}">Producten</a>--}}
                    @endguest
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @auth()
                            @if(Auth::user()->role_id == 5)
                                <li><a class="header-link" href="{{asset('supplier')}}">Onderdelen</a></li>

                            @elseif(Auth::user()->role_id == 6)
                                <li><a class="header-link" href="{{asset('sales')}}">Klanten</a></li>
                                <li><a class="header-link" href="{{ asset('sales/create') }}">{{ __('Registeer hier een klant.') }}</a></li>
                                <li><a class="header-link" href="{{route('quotations.index')}}">Prijsopgave aanmaken</a></li>

                            @elseif(Auth::user()->role_id == 8 && Auth::user()->role_id == 7)
                               <a class="header-link"href="{{ route('maintenance.index') }}">Maintenance</a>

                            @elseif(Auth::user()->role_id == 3)
                                <a class="nav-link"href="{{asset('')}}">Financien</a>
                                <a class="nav-link"href="{{asset('')}}">Contract Overzicht</a>
                                <a class="nav-link"href="{{route('Company.index')}}">BKR Overzicht</a>

                            @elseif(Auth::user()->role_id == 9)
                                <a class="header-link"href="{{asset('customer.create')}}">Storing melden?</a>

                            @elseif(Auth::user()->role_id == 1)
                                <li><a class="header-link"href="{{asset('products.index')}}">Onderdelen</a></li>
                                <li><a class="header-link"href="{{asset('sales')}}">Sales</a></li>
                                <li><a class="header-link"href="{{asset('maintenance')}}">Maintenance</a></li>
                                <li><a class="header-link"href="{{asset('finance')}}">Financien</a></li>
                                <li><a class="header-link"href="{{asset('customer')}}">Klant</a></li>
                                <li><a class="header-link"href="{{asset('sales.create') }}">Registreer Medewerker</a></li>

                            @elseif(Auth::user()->role_id == 2)
                                <li><a class="header-link"href="{{asset('ceo.edit') }}">Goedkeuring<span class="yellow">.</span></a></li>
                            @endif
                        @endauth

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" id="header-link"  href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"  class="header-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>




                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('customer.show', Auth::user()->id)}}">
                                        {{ Auth::user()->name }} <img class="icons" src="{{asset('icons/account_yellow.png')}}" alt="">
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>

        </nav>
    </div>
</header>


        <section>
            @yield('content')
        </section>

    <footer>
        <div class="flex container">
                <div class="flex">
                   <img class="logo-small"  src="{{ asset('../logos/Logo6_groot.png') }}" alt="">
                    <div>
                        <h2 id="bizar-goede-koffie-footer">b<span class="yellow bold">//</span> zar goede koffie<span class="yellow">.</span></h2>
                    </div>
                </div>
                <div style="margin-left: 20px;">
                    <div>
                        <h2>About us<span class="yellow">.</span></h2>
                        <p style="color: #000000;">Onze passie door geven aan jullie<span class="yellow">.</span></p>
                    </div>
                    <div class="flex">
                        <a class="links" href=""><img class="icons" src="{{ asset('../icons/old_phone.png') }}" alt=""> 06-XXXXXXXX</a>
                    </div>
                    <div class="flex">
                        <a class="links" href="mailto:barrocintens@info.nl"><img class="icons" src="{{ asset('../icons/mail.png') }}" alt=""> barrocintens@info.nl</a>
                    </div>
                </div>
            <div>
                <div>
                    <ul>
                        <h4>Helpfull Links<span class="yellow">.</span></h4>
                        <li class="lists"><a href="" class="links-header">Services</a></li>
                        <li class="lists"><a href="" class="links-header">Support</a></li>
                        <li class="lists"><a href="" class="links-header">Terms & Conditions</a></li>
                        <li class="lists"><a href="" class="links-header">Privacy Policy</a></li>
                        <li class="lists"><a href="" class="links-header">Cookies</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <div id="page-up">
                    <a href="#app"><img class="icons" src="{{ asset('../icons/page_up.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

