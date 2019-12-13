@extends('layouts.app')

@section('title')
    Maintenance
@endsection

@section('content')
    <section class="content">
        <div class="container">
            <h2>Maintenance<span class="yellow">.</span></h2>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <h2>Problemen<span class="yellow">.</span></h2>
            <ul>
                @foreach($malfunctions as $malfunction)

                       <li>{{ $malfunction->description }}</li>
                @endforeach
            </ul>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <h2>Werkbon aanmaken<span class="yellow">.</span></h2>

            <div>
                <a href="{{ route('maintenance.create') }}">Werkbon aanmaken<span class="yellow">.</span></a>
            </div>

        </div>
    </section>

@endsection
