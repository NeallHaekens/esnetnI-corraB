@extends('layouts/app')

@section('title')
    Aantekening maken
@endsection



@section('content')
    <section class="content">
        <div class="container">
            <form method="POST" action="{{ route('notes.store') }}">
                @csrf
                <div class="form-group row">
                    <label for="note" class="col-md-4 col-form-label text-md-right">Selecteer een Klant</label>
                    <select name="customer_id" id="customer_id">
                        @foreach($users as $user)
                            <option id="customer_id" value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group row">
                    <label for="note" class="col-md-4 col-form-label text-md-right">Notitie</label>
                    <textarea  class="col-md-4 col-form-label text-md-right" name="note" id="note" cols="30" rows=""></textarea>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <input class="submit-btn" type="submit" value="Toevoegen">
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
