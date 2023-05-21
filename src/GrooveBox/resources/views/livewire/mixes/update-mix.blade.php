<div>
    @section('title')
        Update Mix
    @endsection

    <div class="text-white fs-1 d-flex">
        Upload your Mix
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
                    <input type="text" class="form-control" id="name" placeholder="Redlight" id="name" wire:model="name">
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
                    <textarea class="form-control"  id="description" wire:model="description"></textarea>
                    @error('description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row my-2">
            <div class="col">
                <select id="privacy" class="form-select" aria-label="select" wire:model="privacy">
                    <option value="0">Public</option>
                    <option value="1">Private</option>
                </select>
                @error('privacy')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>



        <div class="row my-2">
            <div class="col d-flex justify-content-center">
                <button class="btn btn-primary btn-lg w-25">Update Mix</button>
            </div>
        </div>
    </form>
</div>
