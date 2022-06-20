@extends('master.main')

@section('content')

    @component('components.table_bicycles.bicyclesList', [
                       'bicycles' =>$bicycles,
                   ])
    @endcomponent

@endsection
