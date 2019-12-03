@extends('../layouts/app')

@section('title')
    Reguest Malfucntion
@endsection

@section('content')

    <section class="content">
        <div class="container">
            <div>
                <h2>Storings aanvraag<span class="yellow">.</span></h2>
            </div>
        </div>
    </section>

    <section>
        <div class="content">
            <div class="container">
                <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                        <label for="malfunction_type_id">Categorie</label>
                        <select class="form-control" name="malfunction_type_id" id="">
                            {{--Hier komt een foreach voor alle categorieen--}}
                            @foreach($malfunction_types as $malfunction_type)
                                <option value="{{ $malfunction_type->id }}" name="malfunction_type_id">{{ $malfunction_type->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Beschrijving</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn submit-btn" value="Bevestigen">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
