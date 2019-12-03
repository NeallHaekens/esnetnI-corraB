@extends('layouts/app')
@section('content')

<div class="container">
    <form action="Company/updateMultiple" method="post">

        <ul>
            @foreach($checks as $check)
                <div class="Wrapper">

                    <div class="companys">
                        <li><a href="{{ route('Company.show',$check->id) }}">{{ $check->company_name }}</a></li>
                    </div>
                    <div class="bkr_check">
                            <input type="checkbox" class="bkrStyle"  name="bkrCheckBox[{{$check->id}}]" value="BKR">BKR
                    </div>
                </div>
            @endforeach
        </ul>
        <input type="submit" class="bkrButton" value="Send">
    </form>
    </div>
</div>

@endsection
