<div>
    @section('title')
        {{$this->mix->name}}
    @endsection
    <div class="row mb-5">
        <div class="col-md-3 col-sm-12">
            <img class="rounded-circle" src="{{asset('storage/'.$this->mix->image)}}" width="100%"/>
        </div>
        @if(auth()->check())
            @if(auth()->user()->hasArtist() && $this->mix->author == auth()->user()->artist->id)
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col d-flex align-items-center gap-5">
                            <h1 class="fs-1">{{$this->mix->name}}</h1>
                            @if(!auth()->user()->mixes->contains('id',$this->mix->id))
                                <a class="text-light" wire:click="like({{$this->mix->id}})">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                    </svg>
                                </a>
                            @else
                                <a class="text-light" wire:click="dislike({{$this->mix->id}})">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h1 class="fs-5">{{$this->mix->description}}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="/artist/{{$this->mix->artist->id}}" class="text-decoration-none">
                                <h1 class="fs-5 text-light">Author: {{$this->mix->artist->artist_name}}</h1>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @if($this->mix->privacy)
                                <h1 class="fs-6">Private</h1>
                            @else
                                <h1 class="fs-6">Public</h1>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-12 d-flex justify-content-end gap-2">
                    <a wire:click="downloadFile({{$this->mix->id}})">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                        </svg>
                    </a>
                    <div class="dropdown">
                        <button class="btn btn-dark" type="button" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="/add-mix-to-tracklists/{{$this->mix->id}}">Add to Tracklist</a></li>
                            <li><a class="dropdown-item text-light" href="/update-mix/{{$this->mix->id}}">Update Mix</a></li>
                            <li><a class="dropdown-item text-light" wire:click="delete({{$this->mix->id}})">Delete Mix</a></li>
                        </ul>
                    </div>
                </div>
            @else
                <div class="col-8">
                    <div class="row">
                        <div class="col">
                            <h1 class="fs-1">{{$this->mix->name}}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h1 class="fs-5">{{$this->mix->description}}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <a href="/artist/{{$this->mix->artist->id}}" class="text-decoration-none">
                            <h1 class="fs-5 text-light">Author: {{$this->mix->artist->artist_name}}</h1>
                        </a>
                    </div>
                </div>
                <div class="col-1 d-flex justify-content-end">
                    <a wire:click="downloadFile({{$this->mix->id}})">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                        </svg>
                    </a>
                    <div class="dropdown">
                        <button class="btn btn-dark" type="button" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="/add-mix-to-tracklists/{{$this->mix->id}}">Add to Tracklist</a></li>
                        </ul>
                    </div>
                </div>
            @endif
        @else
            <div class="col-8">
                <div class="row">
                    <div class="col">
                        <h1 class="fs-1">{{$this->mix->name}}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1 class="fs-5">{{$this->mix->description}}</h1>
                    </div>
                </div>
                <div class="row">
                    <a href="/artist/{{$this->mix->artist->id}}" class="text-decoration-none">
                        <h1 class="fs-5 text-light">Author: {{$this->mix->artist->artist_name}}</h1>
                    </a>
                </div>
            </div>
            <div class="col-1 d-flex justify-content-end">
                <a wire:click="downloadFile({{$this->mix->id}})">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                    </svg>
                </a>
            </div>
        @endif
    </div>
    <div class="row">
        <audio class="w-100" id="plyr-audio-player" controls>
            <source src="{{asset('storage/'.$this->mix->audio)}}" type="audio/mp3" />
        </audio>
    </div>
</div>
