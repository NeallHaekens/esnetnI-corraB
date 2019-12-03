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

                <a href="{{ route('customer.create') }}"><button type="submit" name="send" class="btn submit-btn">Storings aanvraag</button></a>

                <a href="">Persoons gegevens</a>

                {{--<a class="list" href="{{route('customer.show', $customer->id)}}">{{$customer->productName}} Gegevens.</a>--}}
            </div>
        </div>
    </section>
@endsection

