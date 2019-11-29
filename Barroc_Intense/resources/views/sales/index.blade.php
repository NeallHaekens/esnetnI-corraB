@extends('layouts/app')

@section('content')
    <section class="content">
        <div class="container">
            <div>
                <h2>Sales<span class="yellow">.</span></h2>

                <a class="nav-link " href="{{ route('sales.create') }}">{{ __('Registeer hier een klant.') }}</a>
            </div>
        </div>
    </section>

    <section>
        <div class="content">
            <div class="container">
                    <a href="quotations/create">Offerte aanmaken</a>
                </div>
            </div>

            <div class="container">
                <a href="offer/create">Prijs opgave aanmaken</a>
            </div>
        </div>
    </section>
@endsection
