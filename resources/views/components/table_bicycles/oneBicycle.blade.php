<div class="col-4 mx-auto mt-4">
    <h1>Show Bicycle</h1>
    <div class="form-group">
        <label for="id">Id</label>
        <input
            class="form-control"
            type="text"
            id="id"
            name="id"
            value="{{$bicycle->id}}"
            required
            disabled
            aria-describedby="nameHelp">

        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

        <label for="name">Brand</label>
        <input
            class="form-control"
            type="text"
            id="brand"
            name="brand"
            value="{{ $bicycle->brand }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="name">Model</label>
        <input
            class="form-control"
            type="text"
            id="model"
            name="model"
            value="{{ $bicycle->model }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="name">Color</label>
        <input
            class="form-control"
            type="text"
            id="color"
            name="color"
            value="{{ $bicycle->color }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="name">Price</label>
        <input
            class="form-control"
            type="text"
            id="price"
            name="price"
            value="{{ $bicycle->price }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="cars">User</label>
            <input
                class="form-control"
                type="text"
                id="first_name"
                name="first_name"
                value="{{ $bicycle->user->first_name}}"
                required
                disabled
                aria-describedby="nameHelp">
        <label for="created_at">Created_at</label>
        <input
            class="form-control"
            type="text"
            id="created_at"
            name="created_at"
            value="{{ $bicycle->created_at }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="updated_at">Updated_at</label>
        <input
            class="form-control"
            type="text"
            id="Updated_at"
            name="Updated_at"
            value="{{ $bicycle->updated_at }}"
            required
            disabled
            aria-describedby="nameHelp">
    </div>

    <a class="mt-2 mb-5 btn btn-primary" href="{{url('bicycles/')}}">Back</a>
</div>
