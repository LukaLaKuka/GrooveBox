<div>
    @section('title')
        Home
    @endsection

    <div class="row">
        <h1>Add a Mix to a Tracklist</h1>
        <span>Add {{$this->mix->name}} to a Tracklist:</span>
    </div>

    <form wire:submit.prevent="addMixToTracklist()">
        <div class="row my-2">
            <div class="col">
                <label for="tracklist">Select a Tracklist</label>
                <select id="tracklist" class="form-select" aria-label="select" wire:model="tracklistId">
                        <option value="{{null}}" disabled selected>Select a option</option>
                    @foreach(auth()->user()->tracklists as $tracklist)
                        <option value="{{$tracklist->id}}">{{$tracklist->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row my-2">
            <div class="col d-flex justify-content-center">
                <button class="btn btn-primary btn-lg w-25">Add Mix</button>
            </div>
        </div>
    </form>


</div>
