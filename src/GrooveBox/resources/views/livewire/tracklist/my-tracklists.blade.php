<div>
    @section('title')
        My Tracklists
    @endsection

    @if(count($this->tracklists) < 1)
        <div class="row mb-3">
            <div class="col d-flex justify-content-center">
                <span class="fs-5">You don't have any Tracklist created :(</span>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <a href="/new-tracklist" class="p-2 btn-outline-light bg-dark text-decoration-none text-light border-light border rounded">
                    Create new Tracklist
                </a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-9">
                <h1>Your Tracklists</h1>
            </div>
            <div class="col-3 d-flex justify-content-end align-items-center">
                <a href="/new-tracklist" class="p-2 btn-outline-light bg-dark text-decoration-none text-light border-light border rounded">
                    Create new Tracklist
                </a>
            </div>
        </div>
        <div class="row">
            <span class="fs-5">
                Here you can see all your Tracklists!
            </span>
        </div>
        <div class="row">
            @foreach($this->tracklists as $tracklist)
                <div class="col-3">
                    <div class="card bg-dark rounded" style="width: 18rem;">
                        <a href="/tracklist/{{$tracklist->id}}">
                            <img src="{{asset('storage/'.$tracklist->image)}}" class="card-img-top" alt="Image"/>
                        </a>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <a class="text-decoration-none" href="/tracklist/{{$tracklist->id}}">
                                        <h5 class="card-title text-white">{{$tracklist->name}}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
