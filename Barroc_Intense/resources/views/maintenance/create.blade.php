@extends('layouts.app')

@section('title', 'Werkbon aanmaken')

@section('content')

    <section class="content">
        <div class="container">
            <div>
                <form method="POST" action="{{ route('maintenance.store') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="note" class="col-md-4 col-form-label text-md-right">Selecteer een Klant</label>
                        <select name="malfunction_id" id="malfunction_id">
                            @foreach($leases as $lease)
                                <option id="malfunction_id" value="{{$lease->id}}">{{$lease->id}}, {{$lease->customer->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="note" class="col-md-4 col-form-label text-md-right">Selecteer een Klant</label>
                        <select name="malfunction_id" id="malfunction_id">
                            @foreach($malfunctions as $malfunction)
                                <option id="malfunction_id" value="{{$malfunction->id}}">{{$malfunction->title}}</option>
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
        </div>
    </section>

@endsection
