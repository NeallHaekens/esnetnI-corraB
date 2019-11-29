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
                {{--<a href="quotations/create">Offerte aanmaken</a>--}}
                <a href=""><button type="submit" name="send" class="btn submit-btn">Storings aanvraag</button></a>
            </div>
        </div>
    </section>
@endsection