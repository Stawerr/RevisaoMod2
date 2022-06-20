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
<h1>Countries</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">Users</th>

    </tr>
    </thead>
    <tbody>
    @foreach($countries as $country)
        <tr>
            <td>{{$country->id}}</td>
            <td>{{$country->name}}</td>
            <td>{{$country->created_at}}</td>
            <td>{{$country->updated_at}}</td>
            <td>
            @foreach($country->users as $user)
               <p>{{$user->first_name}}</p>
            @endforeach
            </td>
            <td><a class="btn btn-success" href="{{url('countries/'.$country->id)}}">Show</a></td>
            <td><a class="btn btn-primary" href="{{url('countries/'.$country->id. '/edit')}}">Edit</a></td>
            <form action="{{url('countries/' . $country->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <td><button type="submit" class="btn btn-danger">Delete</button></td>
            </form>
        </tr>
    @endforeach
    </tbody>
</table>

