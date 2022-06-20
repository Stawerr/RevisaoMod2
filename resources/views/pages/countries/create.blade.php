@extends('master.main')

@section('content')

    @component('components.table_countries.country-form-create', [
                       'countries' =>$countries,
                   ])
    @endcomponent

@endsection
