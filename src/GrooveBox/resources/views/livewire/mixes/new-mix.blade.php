<div>
    @section('title')
        Create a New Mix
    @endsection

    <div class="text-white fs-1 d-flex">
        Create your new Mix
    </div>

    <div>
        <span class="fs-5">
            Here you can upload your own Mix!
        </span>
    </div>

    <form wire:submit.prevent="save()">
        <div class="row my-2">
            <div class="col">
                <div class="mb-3">
                    <label for="name" class="form-label">Mix's Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Redlight" wire:model="name">
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
            <div class="col">
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
                <div class="mb-4">
                    <label for="audio" class="form-label">Audio</label>
                    <input type="file" class="form-control" id="audio" placeholder="Monroe" wire:model="audio">
                    @error('audio')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>



        <div class="row my-2">
            <div class="col d-flex justify-content-center">
                <button class="btn btn-primary btn-lg w-25">Create Mix</button>
            </div>
        </div>
    </form>
</div>
