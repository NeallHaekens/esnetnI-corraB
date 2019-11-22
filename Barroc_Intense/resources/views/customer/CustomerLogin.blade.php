
@extends('layouts.app')

@section('content')

    <h1>Customer Login</h1>
    <form action="" method="">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password">
        </div>

        <div class="form-group">
            <input type="submit" value="customer-login">
        </div>
    </form>

@endsection
