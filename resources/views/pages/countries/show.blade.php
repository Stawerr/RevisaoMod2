@extends('master.main')

@section('content')

    @component('components.table_countries.oneCountry', [
                       'country' =>$country,
                   ])
    @endcomponent

@endsection
