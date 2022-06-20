@extends('master.main')

@section('content')

    @component('components.table_bicycles.bicycle-form-create', [
                       'users' =>$users,
                   ])
    @endcomponent

@endsection
