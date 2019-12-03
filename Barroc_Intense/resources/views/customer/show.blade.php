@extends('layouts/app')

@section('title')
    {{$customer->name}}
@endsection



@section('content')
    <section class="content">
        <div class="container">
            <div>
                <h3>{{$customer->name}}</h3>
                <p>Email: {{$customer->email}} </p>
                <a class="submit-btn" href="{{route('customer.edit', Auth::user()->id)}}">Gegevens aanpassen<span class="yellow">.</span></a>
            </div>
        </div>
    </section>
@endsection
