@extends('master.main')

@section('content')

    @component('components.table_bicycles.oneBicycle', [
                       'bicycle' =>$bicycle,
                   ])
    @endcomponent

@endsection
