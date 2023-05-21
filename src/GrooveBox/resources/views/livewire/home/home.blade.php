<div>
    @section('title')
        Home
    @endsection

    @if(auth()->check())
        <h1 class="mb-5">{{$this->message}} {{auth()->user()->username}}!!</h1>
    @else
        <h1>Welcome to GrooveBox!!</h1>
    @endif

        @if(count($this->mixes) > 0)
            <div class="row my-2 d-flex justify-content-between">
                <div class="col-6">
                    <h2>What's new?</h2>
                    <span>Listen the new released mixes!</span>
                </div>
                <div class="col-2 d-flex align-items-center text-decoration-none">
                    <a href="/search" class="text-light">Find more...</a>
                </div>
            </div>

            <div class="row my-2 mx-3">
                @foreach($this->mixes as $mix)
                    <div class="col-3">
                        <div class="card bg-dark rounded mb-3" style="width: 18rem;">
                            <a href="/mix/{{$mix->id}}">
                                <img src="{{asset('storage/'.$mix->image)}}" width="100%" class="card-img-top" alt="Image"/>
                            </a>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-10">
                                        <a class="text-decoration-none" href="/mix/{{$mix->id}}">
                                            <h5 class="card-title text-white">{{$mix->name}}</h5>
                                        </a>
                                    </div>
                                    @if(auth()->check())
                                        <div class="col-2 d-flex justify-content-end">
                                            @if(!auth()->user()->mixes->contains('id',$mix->id))
                                                <a class="text-light" wire:click="like({{$mix->id}})">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                    </svg>
                                                </a>
                                            @else
                                                <a class="text-light" wire:click="dislike({{$mix->id}})">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                    </svg>
                                                </a>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif


        @if(count($this->tracklists) > 0)
            <div class="row my-2 d-flex justify-content-between">
                <div class="col-6">
                    <h2>Tracklists</h2>
                </div>
                <div class="col-2 d-flex align-items-center text-decoration-none">
                    <a href="/search" class="text-light">Find more...</a>
                </div>
            </div>

            <div class="row my-2 mx-3">
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



        @if($this->personal_lists)

            @if(count($this->personal_mixes) > 0)
                <div class="row my-2 d-flex justify-content-between">
                    <div class="col-6">
                        <h2>Your most recent Mixes</h2>
                    </div>
                    <div class="col-2 d-flex align-items-center text-decoration-none">
                        <a href="/search" class="text-light">Find more...</a>
                    </div>
                </div>

                <div class="row my-2 mx-3">
                    @foreach($this->personal_mixes as $mix)
                        <div class="col-3">
                            <div class="card bg-dark rounded" style="width: 18rem;">
                                <a href="/mix/{{$mix->id}}">
                                    <img src="{{asset('storage/'.$mix->image)}}" class="card-img-top" alt="Image"/>
                                </a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-10">
                                            <a class="text-decoration-none" href="/mix/{{$mix->id}}">
                                                <h5 class="card-title text-white">{{$mix->name}}</h5>
                                            </a>
                                        </div>
                                        @if(auth()->check())
                                            <div class="col-2 d-flex justify-content-end">
                                                @if(!auth()->user()->mixes->contains('id',$mix->id))
                                                    <a class="text-light" wire:click="like({{$mix->id}})">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                        </svg>
                                                    </a>
                                                @else
                                                    <a class="text-light" wire:click="dislike({{$mix->id}})">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                        </svg>
                                                    </a>
                                                @endif
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            @if($this->personal_tracklists && count($this->personal_tracklists) > 0)

                <div class="row my-2 d-flex justify-content-between">
                    <div class="col-6">
                        <h2>Your most recent Tracklists</h2>
                    </div>
                    <div class="col-2 d-flex align-items-center text-decoration-none">
                        <a href="/search" class="text-light">Find more...</a>
                    </div>
                </div>

                <div class="row my-2 mx-3">
                    @foreach($this->personal_tracklists as $tracklist)
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
        @endif

</div>
