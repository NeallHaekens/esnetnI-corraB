@extends('layouts/app')

@section('content')

    <div class="container">
        <h2 class="yellow">Prijsopgaven maken</h2>

        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="">Klant_id:</label>
                <select name="customer_id" id="customer_id">
                    @foreach($users as $user)
                        <option id="customer_id" value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Lease_id:</label>
                <select name="lease_id" id="customer_id">
                    @foreach($leases as $lease)
                        <option id="lease_id" value="{{$lease->id}}">{{$lease->id}}</option>
                    @endforeach
                </select>
            </div>
        </form>

                <div class="form-group">
                    <label for="">Product toevoegen</label>
                    <select name="lease_id" id="supply_id">
                        @foreach($supplys as $supply)
                            <option id="supply_id" value="{{$supply->id}}">{{$supply->title}}</option>
                        @endforeach
                    </select>
                    <input type="submit" name="addProductButton" value="Product toevoegen">
                </div>

    </div>
    <?php
    if(isset($_POST['addProductButton'])){
        
    }else{

    }
    ?>
@endsection