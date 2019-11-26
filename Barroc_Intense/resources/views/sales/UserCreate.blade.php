@extends('app')

@section('users-create')

    <h1>User Create</h1>

    <form action="{{ route('users.store') }}" method="post">

        @method('PUT')

        @csrf

        <div class="input-group">
            <label>Name</label>
            <input type="text" name="name" value="{{ $user->name }}">
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ $user->email }}">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1" value="{{ $user->password }}">
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
