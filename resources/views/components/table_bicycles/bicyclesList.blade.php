@if (session('status'))
    <div class="alert
    @switch(session('type'))
    @case('error')
        alert-danger
@break
    @default
        alert-success
@endswitch
        alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<h1>Bicycles</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">Color</th>
        <th scope="col">Price</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">Users</th>

    </tr>
    </thead>
    <tbody>
    @foreach($bicycles as $bicycle)
        <tr>
            <td> {{$bicycle->id}}</td>
            <td> {{$bicycle->brand}}</td>
            <td>{{$bicycle->model}}</td>
            <td>{{$bicycle->color}}</td>
            <td>{{$bicycle->price}}</td>
            <td>{{$bicycle->created_at}}</td>
            <td>{{$bicycle->updated_at}}</td>
            <td>{{$bicycle->user->first_name}}</td>
            <td><a class="btn btn-success" href="{{url('bicycles/'.$bicycle->id)}}">Show</a></td>
                <td><a class="btn btn-primary" href="{{url('bicycles/'.$bicycle->id. '/edit')}}">Edit</a></td>
                <form action="{{url('bicycles/' . $bicycle->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </form>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {{$bicycles->links()}}
</div>
