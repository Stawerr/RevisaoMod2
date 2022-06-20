<div class="col-4 mx-auto mt-4">
    <h1>Add Bicycle</h1>
    <form method="POST" action="{{ url('bicycles') }}">
        @csrf
        <div class="form-group ">
            <select name="user_id" id="user_id" class="form-control">
                @foreach($users as $user)
                    <option name="brand_id" value="{{ $user->id }}">{{ $user->first_name }}</option>
                @endforeach
            </select>
            <p></p>
            <label for="brand">Brand</label>
            <input
                type="text"
                id="brand"
                name="brand"
                class="form-control
            @error('brand') is-invalid @enderror"
                value="{{ old('brand') }}"
                required
                aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
            @error('brand')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
            @enderror
            <label for="model">Model</label>
            <input
                type="text"
                id="model"
                name="model"
                class="form-control
            @error('model') is-invalid @enderror"
                value="{{ old('model') }}"
                required
                aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
            @error('model')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
            @enderror
            <label for="color">Color</label>
            <input
                type="text"
                id="color"
                name="color"
                class="form-control
            @error('color') is-invalid @enderror"
                value="{{ old('color') }}"
                required
                aria-describedby="nameHelp">

            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

            @error('color')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
            @enderror
            <label for="price">Price</label>
            <input
                type="text"
                id="price"
                name="price"
                class="form-control
            @error('price') is-invalid @enderror"
                value="{{ old('price') }}"
                required
                aria-describedby="nameHelp">

            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

            @error('price')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
            @enderror
        </div>
        <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
    </form>
</div>
