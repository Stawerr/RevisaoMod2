@extends('master.main')

@section('content')

    @component('components.table_bicycles.edit-bicycle', [
                       'bicycle' =>$bicycle,
                       'users'=>$users
                   ])
    @endcomponent

@endsection
