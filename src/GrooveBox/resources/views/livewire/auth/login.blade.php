<div>

    @section('title')
        Login
    @endsection

    <div class="text-white fs-1 d-flex justify-content-center">
        Login
    </div>

    <div class="my-5 p-5 w-auto">
        <div class="row my-2 d-flex justify-content-center">
            <div class="col">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email..." wire:model="email">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row my-2 d-flex justify-content-center">
            <div class="col2">
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password..." wire:model="password">
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row my-2">
            <div class="col d-flex justify-content-center">
                <button wire:click="login" class="btn btn-primary btn-lg w-100">Login</button>
            </div>
        </div>

        <div class="row my-2">
            <div class="col d-flex justify-content-center">
                <span>Don't you have and account yet? <a href="/register">Create a New Account</a></span>
            </div>
        </div>
    </div>
</div>
