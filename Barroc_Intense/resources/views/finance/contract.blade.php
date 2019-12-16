@extends('layouts.app')

@section('title', 'Contract')

@section('content')

    <h1>Create Contract</h1>

    @csrf

    <form action="{{ route('Contract.create') }}" method="post">
        <select name="Points">
            <option value="monthly">Monthly</option>
            <option value="periodic invoices">Periodic Invoices</option>
        </select>

        <input type="submit" name="submit" value="Get Selected Values" />
    </form>

    <div class="form-group">
        <label for="customer">Klant</label>
        <input type="text" name="customer">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email">
    </div>

    <div class="form-group">
        <label for="company">Bedrijf</label>
        <input type="text" name="company">
    </div>

    <div class="form-group">
        <label for="question">Vraag</label>
        <input type="text" name="question">
    </div>

    <div class="form-group">
        <label for="product">Product</label>
        <input type="text" name="product">
    </div>

    <div class="form-group">
        <label for="amount">Aantal</label>
        <input type="number" name="amount">
    </div>

    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" name="type">
    </div>

    <div class="form-group">
        <label for="price">Prijs</label>
        <input type="number" name="price">
    </div>

@endsection
