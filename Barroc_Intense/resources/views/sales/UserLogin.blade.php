
@extends('app')

@section('users-login')

    <h1>User Login</h1>

    @csrf

    <form action="{{ route('users.store') }}" method="post">

        <div class="input-group">
            <label>Name</label>
            <input type="text" name="name" >
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>

        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>

        <p>
            Not yet a member? <a href="UserCreate.blade.php">Sign up</a>
        </p>

    </form>

@endsection
