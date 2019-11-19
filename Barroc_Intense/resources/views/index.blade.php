@extends('layouts.app')

@section('content')
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Naam</label>
                <input type="text" name="name">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email">
            </div>

            <div class="form-group">
                <label for="topic">Onderwerp</label>
                <input type="text" name="topic">
            </div>

            <div class="form-group">
                <label for="description">Beschrijving</label>
                <input type="text" name="description">
            </div>

            <div class="form-group">
                <input type="submit" value="Vraag offerte aan">
            </div>
        </form>
    @endsection





