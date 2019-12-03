@extends('layouts/app')

@section('title')
    {{$customer->name}}
@endsection



@section('content')
    <section class="content">
        <div class="container">
            <div class="edit-form">
               <h3>Gegevens aanpassen <span class="yellow">.</span></h3>
                <form action="{{ route('customer.update', $customer->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Naam</label>
                        <input class="form-control"  name="name" type="text" value="{{$customer->name}}">
                    </div>

                    <div class="form-group">
                        <label for="">E-mail</label>
                        {{--<input class="form-control" type="text" name="productPrice"  id="">--}}
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $customer->email }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>

                    <input class="submit-btn" type="submit" value="Voltooien">
                </form>
            </div>
        </div>
    </section>
@endsection
