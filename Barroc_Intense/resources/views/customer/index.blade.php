@extends('layouts/app')

@section('content')
    <section class="content">
        <div class="container">
            <div>
                <h2>{{ $customer->name }}<span class="yellow">.</span></h2>

            </div>
            <div>
                <h3>Persoons gegevens<span class="yellow">.</span></h3>

                <p>{{ $customer->name }}</p>
                <p>{{ $customer->email }}</p>
                <a href="{{route('customer.edit', $customer->id)}}">Bewerken</a>
            </div>
        </div>
    </section>

@endsection

