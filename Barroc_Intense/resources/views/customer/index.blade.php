@extends('layouts/app')

@section('content')
    <section class="content">
        <div class="container">
            <div>
                <h2>Customer<span class="yellow">.</span></h2>
            </div>
        </div>
    </section>

    <section>
        <div class="content">
            <div class="container">

                <h3>Persoons gegevens<span class="yellow">.</span></h3>

                <p>{{ $user->name }}</p>



                {{--<a class="list" href="{{route('customer.show', $customer->id)}}">{{$customer->productName}} Gegevens.</a>--}}
            </div>
        </div>
    </section>
@endsection

