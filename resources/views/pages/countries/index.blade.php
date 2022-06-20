@extends('master.main')

@section('content')

    @component('components.table_countries.countriesList', [
                       'countries' =>$countries
                   ])
    @endcomponent

@endsection
