@extends('layouts/app')

@section('title')
    {{$customer->name}}
@endsection



@section('content')
    <section class="content">
        <div class="container">
            <h2>Klant Pagina<span class="yellow">.</span></h2>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div>
                <h3>Persoons Gegevens<span class="yellow">.</span></h3>
                <p>
                    Naam : {{ $customer->name }}
                </p>
                <p>
                    E-mail : {{ $customer->email }}
                </p>
                <a class="submit-btn" href="{{route('customer.edit', Auth::user()->id)}}">Gegevens aanpassen<span class="yellow">.</span></a>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <h3>Lease Gegeven<span class="yellow">.</span></h3>
            <p>
                @foreach($leases as $lease)
                {{ $lease->User->name }}
                @endforeach
            </p>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <h3>Factuur Gegevens<span class="yellow">.</span></h3>
            <p>

            </p>
        </div>
    </section>
@endsection
