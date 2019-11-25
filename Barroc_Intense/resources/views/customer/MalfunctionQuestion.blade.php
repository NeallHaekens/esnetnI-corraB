
@extends('app')

@section('malfunction-question')

    <h1>Malfunction Question</h1>

    @csrf

    <form action="{{ route('MalfunctionQuestion.show') }}" method="post">

        <div class="form-group">
            <label for="name">Category</label>
            <input type="text" name="category">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input class="form-control-file" type="file" name="image" id="image" >
        </div>

        <div class="form-group">
            <input type="submit" value="Create question">
        </div>

    </form>

@endsection
