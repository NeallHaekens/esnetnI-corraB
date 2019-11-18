
@extends('app')

@section('customer-create')

    <h1>Customer Create</h1>

    <form action="{{ route('customer.store') }}" method="post">

        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password">
        </div>

        <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="text" name="confirm-password">
        </div>

        <div class="form-group">
            <input type="submit" value="Customer Create">
        </div>

    </form>

@endsection
