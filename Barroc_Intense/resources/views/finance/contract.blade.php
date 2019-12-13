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
        <label for="full-name">Full Name</label>
        <input type="text" name="full-name">
    </div>

    <div class="form-group">
        <label for="phone-number">Phone Number</label>
        <input type="number" name="phone-number">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email">
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address">
    </div>

    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name="date">
    </div>

@endsection
