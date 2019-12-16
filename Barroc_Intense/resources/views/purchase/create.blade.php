@extends('app')

@section('purchase')

    <h1>Product</h1>

    @csrf

    <form action="{{ route('Purchase.create') }}" method="post">

    </form>

    <div class="form-group">
        <label for="data">Gegevens</label>
        <input type="text" name="data">
    </div>

    <div class="form-group">
        <label for="overview">Overzicht</label>
        <input type="text" name="overview">
    </div>

    <div class="form-group">
        <label for="description">Omschrijving</label>
        <input type="text" name="description">
    </div>

    <div class="form-group">
        <label for="agreement">Overeenkomst</label>
        <input type="text" name="agreement">
    </div>

    <div class="form-group">
        <label for="validation">Bevestiging</label>
        <input type="text" name="validation">
    </div>

@endsection
