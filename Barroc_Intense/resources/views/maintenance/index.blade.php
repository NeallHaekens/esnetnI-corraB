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

                       <p>{{ $malfunction->description }}</p>


                @endforeach
            </ul>
        </div>
    </section>

@endsection
