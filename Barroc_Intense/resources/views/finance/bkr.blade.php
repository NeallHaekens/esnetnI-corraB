@extends('layouts/app')
@section('content')

<div class="container">
    <h1>Companys</h1>
        <ul>
            @foreach($companys as $company)
                <div class="Wrapper">

                    <div class="companys">
                        <li class="links"><a href="{{ route('Company.edit',$company->id) }}" class="links-header2">{{ $company->company_name }}</a></li>
                    </div>
                </div>
                @endforeach
        </ul>
</div>


@endsection
