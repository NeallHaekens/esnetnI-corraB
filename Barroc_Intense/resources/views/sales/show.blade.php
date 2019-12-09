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
                <label for="">Commentaar</label>
                {{--<p>{{$note->note}}</p>--}}
                <div>
                    <a class="submit-btn" href="{{route('sales.edit', Auth::user()->id)}}">commentaar toevoegen<span class="yellow">.</span></a>
                </div>
            </div>
        </div>
    </section>
@endsection
