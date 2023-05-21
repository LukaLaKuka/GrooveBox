<div>
    @section('title')
        Settings
    @endsection
    <div>
        <div class="text-white fs-1 d-flex justify-content-center">
            Settings
        </div>

        <div class="p-sm-3 p-md-5">
            @csrf
            <div class="row my-2">
                <div class="col-md-4 col-sm-12">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="John" wire:model="name">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="mb-3">
                        <label for="flastname" class="form-label">First Lastname</label>
                        <input type="text" class="form-control" id="flastname" placeholder="Doe" wire:model="first_lastname">
                        @error('first_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="mb-3">
                        <label for="slastname" class="form-label">Second Lastname</label>
                        <input type="text" class="form-control" id="slastname" placeholder="Macintosh" wire:model="second_lastname">
                        @error('second_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row my-2">
                <div class="col-md-4 col-sm-12">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="JohnDoe@example.test" wire:model="email">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="sRtk6X32" wire:model="password">
                        @error('password')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="mb-3">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password" placeholder="sRtk6X32" wire:model="confirm_password">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-6 col-sm-12">
                    <div class="mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="JohnDoe777" wire:model="username">
                        @error('username')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="mb-4">
                        <label for="profile-photo" class="form-label">Profile Image</label>
                        <input type="file" class="form-control" id="profile-photo" placeholder="John" wire:model="image">
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row my-2">
                <div class="col d-flex justify-content-center">
                    <button wire:click="save" class="btn btn-primary btn-lg w-100">Update Profile</button>
                </div>
            </div>
        </div>
    </div>
</div>
