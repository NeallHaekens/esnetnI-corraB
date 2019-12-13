@extends('layouts/app')

@section('content')
    <section class="content">
        <div class="container">
            <h2>Klant<span class="yellow">.</span></h2>
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
    <section class="content">
        <div class="container">
            <h2>Commentaar<span class="yellow">.</span></h2>
                <a class="submit-btn" href="{{asset('notes/create')}}">commentaar toevoegen<span class="yellow">.</span></a>
        </div>
    </section>
@endsection
