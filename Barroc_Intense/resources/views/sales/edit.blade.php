@extends('layouts/app')

@section('title')
    {{$customer->name}}
@endsection



@section('content')
    <section class="content">
        <div class="container">
            <form action="">

                <label for="">Notitie</label>
                <textarea name="note" id="note" cols="30" rows=""></textarea>
            </form>
        </div>
    </section>
@endsection
