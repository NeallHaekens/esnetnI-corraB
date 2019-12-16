@extends('layouts.app')

@section('title', 'Werkbon aanmaken')

@section('content')

    <section class="content">
        <div class="container">
            <div>
                <form class="form" method="POST" action="{{ route('maintenance.store') }}">
                    @csrf
                    <div class="form-group row mb-0">
                        <label for="note" class="col-md-4 col-form-label">Selecteer het probleem</label>
                        <select name="malfunction_id" id="malfunction_id">
                            @foreach($malfunctions as $malfunction)
                                <option value="{{$malfunction->id}}">{{$malfunction->description}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row mb-0">
                        <input class="form-check-input" type="checkbox" name="work_order_finisched" value="work_order_finisched" checked="checked">
                        <label class="col-md-4  form-check-label" for="exampleCheck1">Reperatie gedaan<span class="yellow">.</span></label>
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
