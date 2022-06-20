@extends('master.main')

@section('content')

    @component('components.table_countries.edit-country', [
                       'country' =>$country,
                   ])
    @endcomponent

@endsection
