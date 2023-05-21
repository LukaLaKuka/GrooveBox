<div>
    @section('title')
        Create Artist Profile
    @endsection

    <div>
        <div class="text-white fs-1 d-flex">
            Create your artist profile
        </div>

        <div>
            <span class="fs-5">
                Here you can create your own artist profile!
            </span>
        </div>

        <form wire:submit.prevent="save()">
            <div class="row my-2">
                <div class="col-md-6 col-sm-12">
                    <div class="mb-4">
                        <label for="username" class="form-label">Artist Name</label>
                        <input type="text" class="form-control" id="artist_name" placeholder="Monroe" wire:model="artist_name">
                        @error('artist_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="mb-4">
                        <label for="profile-photo" class="form-label">Artist Image</label>
                        <input type="file" class="form-control" id="profile-photo" wire:model="image">
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row my-2">
                <div class="col d-flex justify-content-center">
                    <button class="btn btn-primary btn-lg w-25">Create Artist</button>
                </div>
            </div>
        </form>
    </div>
</div>
