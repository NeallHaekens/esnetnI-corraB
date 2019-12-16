@extends('layouts/app')
@section('content')
    <div class="container">
        <h1>Edit Company details</h1>
        <form action="{{ route('Company.update', $company->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="">Company Name</label>
                <input name="CName" type="text" value="{{$company->company_name}}">
            </div>

            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="Phone" value="{{ $company->phone_number }}">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="Email" value="{{ $company->email }}">
            </div>
            <div class="form-group">
                <label for="">Adress</label>
                <input type="text" name="Adress" value="{{ $company->adress }}">
            </div>
            <div class="form-group">
                <label class="">BKR</label>
                <select class="custom-select-sm" name="bkr">

                    <option value="denied">Denied</option>
                    <option value="accepted">Accepted</option>

                </select>
            </div>

            <input type="submit" value="Edit company">
        </form>
    </div>
@endsection
