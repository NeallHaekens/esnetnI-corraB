@extends('layouts/app')

@section('content')
    <section class="content">
        <div class="container">
            <div>
                <h2>Sales<span class="yellow">.</span></h2>
                <a class="nav-link" href="{{ route('sales.create') }}">{{ __('Registeer hier een klant.') }}</a>
                <a class="nav-link" href="quotations/create">Offerte aanmaken</a>
                <a class="nav-link" href="offer/create">Prijs opgave aanmaken</a>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            @foreach($customers as $customer)
                @if($customer->role_id == 7)
                <ul class="lists">
                    <li>
                        <a  href="{{route('sales.show', $customer->role_id)}}"><img class="icons" src="{{asset('icons/account_yellow.png')}}" alt="">{{$customer->name}}</a>
                    </li>
                </ul>
                @endif
            @endforeach
        </div>
    </section>
@endsection
