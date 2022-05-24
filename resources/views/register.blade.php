@extends("plantilles.plantilla")


@section("content")
    <h1>Register</h1>
<form action = "{{route('registerUser')}}" method = "post">
    @csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

        <div class="col-md-6">
            <input id="name" type="text"  name="name" value="{{ old('name') }}"  autocomplete="name" placeholder="Write username" autofocus>
            <span class="text-danger">@error("name") {{$message}} @enderror</span>

        </div>
    </div>

    <div class="form-group row" >
        <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

        <div class="col-md-6">
            <input id="email" type="email" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="Write email">
            <span class="text-danger">@error("email") {{$message}} @enderror</span>

        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

        <div class="col-md-6">
            <input id="password" type="password" name="password" placeholder="write password"  autocomplete="new-password">
            <span class="text-danger">@error("password") {{$message}} @enderror</span>
        </div>
    </div>
    <div class="form-group">
     <input type="submit" name="register" class="btn btn-primary" value="Register" />

    </div>
</form>

@endsection


