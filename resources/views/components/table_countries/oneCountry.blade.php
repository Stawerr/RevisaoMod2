<div class="col-4 mx-auto mt-4">
    <h1>Show Country</h1>
    <div class="form-group">
        <label for="id">Id</label>
        <input
            class="form-control"
            type="text"
            id="id"
            name="id"
            value="{{$country->id}}"
            required
            disabled
            aria-describedby="nameHelp">
        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

        <label for="name">Name</label>
        <input
            class="form-control"
            type="text"
            id="name"
            name="name"
            value="{{ $country->name }}"
            required
            disabled
            aria-describedby="nameHelp">

        <label for="cars">Users</label>
        @foreach($country->users as $user)
        <input
            class="form-control"
            type="text"
            id="first_name"
            name="first_name"
            value="{{ $user->first_name}}"
            required
            disabled
            aria-describedby="nameHelp">
        @endforeach
        <label for="created_at">Created_at</label>
        <input
            class="form-control"
            type="text"
            id="created_at"
            name="created_at"
            value="{{ $country->created_at }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="updated_at">Updated_at</label>
        <input
            class="form-control"
            type="text"
            id="Updated_at"
            name="Updated_at"
            value="{{ $country->updated_at }}"
            required
            disabled
            aria-describedby="nameHelp">
    </div>

    <a class="mt-2 mb-5 btn btn-primary" href="{{url('countries/')}}">Back</a>
</div>
