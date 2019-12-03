@extends('layouts.app')

@section('title')
    Maintenance
@endsection

@section('content')
    <section class="content">
        <div class="container">
            <h2>Maintenance</h2>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <ul>
                @foreach($malfunctions as $malfunction)
                   <li>{{ $malfunction->client_id }}</li>
                @endforeach
            </ul>
        </div>
    </section>

@endsection
