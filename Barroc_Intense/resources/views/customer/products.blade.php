@extends('layouts/app')

@section('content')

    <section class="content" id="products-home">
        <div class="container">
            <div class="flex">
                <div class="ease-in-left">
                    <h2>Products<span class="yellow">.</span></h2>
                    <div class=" img-right">
                        <img class="products-img" src="{{ asset('../images/bit-deluxe.png') }}" alt="">
                    </div>
                </div>
                <div class="ease-in-right">
                    <div class="about-us img-border">
                        <img class="products-img" src="{{ asset('../images/bit-light.png') }}" alt="">
                    </div>

                </div>

            </div>


        </div>

    </section>
@endsection
