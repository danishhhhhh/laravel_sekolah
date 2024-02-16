@extends("layout.main")

@section("container")

    <div class="form-signin w-50 h-75 m-auto d-flex align-items-center">
        <form class="w-100 d-flex flex-column" action="/auth/register" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Please sign up</h1>

            <div class="form-floating mt-1">
                <input class="form-control" id="floatingInput" placeholder="username" name="name">
                <label for="floatingInput">Username</label>
            </div>

            <div class="form-floating mt-1">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating mt-1">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="btn btn-primary align-self-center w-75 py-2 mt-5" type="submit">Sign Up</button>
        </form>
    </div>

@endsection
