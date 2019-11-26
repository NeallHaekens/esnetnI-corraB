@extends('layouts/app')

@section('content')

    <h1>User Create</h1>

    <form action="{{ route('sales.store') }}" method="post">

        @method('PUT')

        @csrf

        <div class="col-md-6">
            <label>Name</label>
            <input type="text" name="name" >
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" >
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>

        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>

        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>

        <p>
            Already a member? <a href="UserLogin.blade.php">Sign in</a>
        </p>

    </form>

@endsection
