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
            </div>
        </div>
    </section>
@endsection
