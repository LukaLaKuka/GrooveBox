<div>
    @section('title')
        Create New Tracklist
    @endsection

        <div class="text-white fs-1 d-flex">
            Create your new Tracklist
        </div>

        <div>
        <span class="fs-5">
            Here you can create your own music to add any mixes as you want!
        </span>
        </div>

        <form wire:submit.prevent="save()">
            <div class="row my-2">
                <div class="col">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tracklist's Name</label>
                        <input type="text" class="form-control" id="name" placeholder="{{auth()->user()->username}}'s Tracklist" wire:model="name">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row my-2">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label" for="description">Description</label>
                        <textarea class="form-control" id="description" rows="3" wire:model="description"></textarea>
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row my-2">
                <div class="col-md-6 col-sm-12">
                    <div class="mb-4">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" placeholder="Monroe" wire:model="image">
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label class="form-label">Privacy</label>
                    <select class="form-select" aria-label="select" wire:model="privacy">
                        <option selected value="0">Public</option>
                        <option value="1">Private</option>
                    </select>
                    @error('privacy')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>



            <div class="row my-2">
                <div class="col d-flex justify-content-center">
                    <button class="btn btn-primary btn-lg w-25">Create Tracklist</button>
                </div>
            </div>
        </form>
</div>
