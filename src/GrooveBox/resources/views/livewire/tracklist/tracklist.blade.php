<div>
    @section('title')
        Tracklist
    @endsection

    <div class="row">
        <div class="col-3">
            <img class="rounded-circle" src="{{asset('storage/'.$tracklist->image)}}" width="100%"/>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-6">
                    <h1 class="fs-1">{{$this->tracklist->name}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="fs-5">{{$this->tracklist->description}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    @if($this->tracklist->privacy)
                        <h1 class="fs-6">Private</h1>
                    @else
                        <h1 class="fs-6">Public</h1>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    @if($this->tracklist->user->hasArtist())
                        <a href="/artist/{{$this->tracklist->user->artist->id}}" class="text-decoration-none">
                            <h1 class="fs-6 text-light">Author: {{$this->tracklist->user->artist->artist_name}}</h1>
                        </a>
                    @else
                        <a class="text-decoration-none">
                            <h1 class="fs-6 text-light">Author: {{$this->tracklist->user->username}}</h1>
                        </a>
                    @endif
                </div>
            </div>
        </div>
        @if(auth()->check())
            @if(auth()->user()->id == $this->tracklist->user_id)
                <div class="col-1 d-flex justify-content-end">
                    <div class="dropdown">
                        <button class="btn btn-dark" type="button" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item text-light" href="/update-tracklist/{{$this->tracklist->id}}">Update Tracklist</a></li>
                            <li><a class="dropdown-item text-light" wire:click="delete({{$this->tracklist->id}})">Delete Tracklist</a></li>
                        </ul>
                    </div>
                </div>
            @endif
        @endif
    </div>
    <div class="row my-2">
        @if(auth()->check())
            @if(auth()->user()->id == $this->tracklist->user_id)
                @if(sizeof($this->mixes) == 0)
                    <div class="col d-flex justify-content-center align-items-center">
                        <a href="/search" class="p-2 btn-outline-light bg-dark text-decoration-none text-light border-light border rounded fs-5">
                            Add Mixes
                        </a>
                    </div>
                @else
                    <x-table>
                        <x-tableheader>
                            <x-tableheadercol></x-tableheadercol>
                            <x-tableheadercol>Name</x-tableheadercol>
                            <x-tableheadercol>Audio</x-tableheadercol>
                            @if(auth()->check())<x-tableheadercol>Like</x-tableheadercol>@endif
                            <x-tableheadercol>Author</x-tableheadercol>
                            <x-tableheadercol></x-tableheadercol>
                        </x-tableheader>
                        <x-tablebody>
                            @foreach($this->mixes as $mix)
                                <tr>
                                    <x-tablecol :col="-1">
                                        <img class="rounded-circle" src="{{asset('storage/'.$mix->image)}}"  width="100%"/>
                                    </x-tablecol>
                                    <x-tablecol :col="-2">
                                        <a class="text-decoration-none" href="/mix/{{$mix->id}}">
                                            <span class="d-flex align-items-center justify-content-center h-auto text-light">{{$mix->name}}</span>
                                        </a>
                                    </x-tablecol>
                                    <x-tablecol :col="-6">
                                        <audio class="w-100" controls>
                                            <source src="{{asset('storage/'.$mix->audio)}}" type="audio/mp3" />
                                        </audio>
                                    </x-tablecol>
                                    @if(auth()->check())
                                        <x-tablecol :col="-1">
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
                                        </x-tablecol>
                                    @endif
                                    <x-tablecol :col="-1">
                                        <a href="/artist/{{$mix->artist->id}}" class="text-decoration-none">
                                            <span class="text-light">{{$mix->artist->artist_name}}</span>
                                        </a>
                                    </x-tablecol>
                                    <x-tablecol :col="-1">
                                        <div class="dropdown">
                                            <button class="btn btn-dark" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                                </svg>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                                <li><a class="dropdown-item" wire:click="downloadFile({{$mix->id}})">Download</a></li>
                                                <li><a class="dropdown-item" href="/add-mix-to-tracklists/{{$mix->id}}">Add to Tracklist</a></li>
                                                <li><a class="dropdown-item" wire:click="removeMix({{$mix->id}})">Remove from this Tracklist</a></li>
                                            </ul>
                                        </div>
                                    </x-tablecol>
                                </tr>
                            @endforeach
                        </x-tablebody>
                    </x-table>
                @endif
            @else
                @if(sizeof($this->mixes) == 0)
                    <div class="col d-flex justify-content-center align-items-center">
                        <a href="/search" class="p-2 btn-outline-light bg-dark text-decoration-none text-light border-light border rounded fs-5">
                            Add Mixes
                        </a>
                    </div>
                @else
                    <x-table>
                        <x-tableheader>
                            <x-tableheadercol></x-tableheadercol>
                            <x-tableheadercol>Name</x-tableheadercol>
                            <x-tableheadercol>Audio</x-tableheadercol>
                            @if(auth()->check())<x-tableheadercol>Like</x-tableheadercol>@endif
                            <x-tableheadercol>Author</x-tableheadercol>
                            <x-tableheadercol></x-tableheadercol>
                        </x-tableheader>
                        <x-tablebody>
                            @foreach($this->mixes as $mix)
                                <tr>
                                    <x-tablecol :col="-1">
                                        <img class="rounded-circle" src="{{asset('storage/'.$mix->image)}}"  width="100%"/>
                                    </x-tablecol>
                                    <x-tablecol :col="-2">
                                        <a class="text-decoration-none" href="/mix/{{$mix->id}}">
                                            <span class="d-flex align-items-center justify-content-center h-auto text-light">{{$mix->name}}</span>
                                        </a>
                                    </x-tablecol>
                                    <x-tablecol :col="-6">
                                        <audio class="w-100" controls>
                                            <source src="{{asset('storage/'.$mix->audio)}}" type="audio/mp3" />
                                        </audio>
                                    </x-tablecol>
                                    @if(auth()->check())
                                        <x-tablecol :col="-1">
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
                                        </x-tablecol>
                                    @endif
                                    <x-tablecol :col="-1">
                                        <a href="/artist/{{$mix->artist->id}}" class="text-decoration-none">
                                            <span class="text-light">{{$mix->artist->artist_name}}</span>
                                        </a>
                                    </x-tablecol>
                                    <x-tablecol :col="-1">
                                        <div class="dropdown">
                                            <button class="btn btn-dark" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                                </svg>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                                <li><a class="dropdown-item" wire:click="downloadFile({{$mix->id}})">Download</a></li>
                                                <li><a class="dropdown-item" href="/add-mix-to-tracklists/{{$mix->id}}">Add to Tracklist</a></li>
                                                <li><a class="dropdown-item" wire:click="removeMix({{$mix->id}})">Remove from this Tracklist</a></li>
                                            </ul>
                                        </div>
                                    </x-tablecol>
                                </tr>
                            @endforeach
                        </x-tablebody>
                    </x-table>
                @endif
            @endif
        @else
            @if(sizeof($this->mixes) == 0)

            @else
                <x-table>
                    <x-tableheader>
                        <x-tableheadercol></x-tableheadercol>
                        <x-tableheadercol>Name</x-tableheadercol>
                        <x-tableheadercol>Audio</x-tableheadercol>
                        @if(auth()->check())<x-tableheadercol>Like</x-tableheadercol>@endif
                        <x-tableheadercol>Author</x-tableheadercol>
                        <x-tableheadercol></x-tableheadercol>
                    </x-tableheader>
                    <x-tablebody>
                        @foreach($this->mixes as $mix)
                            <tr>
                                <x-tablecol :col="-1">
                                    <img class="rounded-circle" src="{{asset('storage/'.$mix->image)}}"  width="100%"/>
                                </x-tablecol>
                                <x-tablecol :col="-2">
                                    <a class="text-decoration-none" href="/mix/{{$mix->id}}">
                                        <span class="d-flex align-items-center justify-content-center h-auto text-light">{{$mix->name}}</span>
                                    </a>
                                </x-tablecol>
                                <x-tablecol :col="-6">
                                    <audio class="w-100" controls>
                                        <source src="{{asset('storage/'.$mix->audio)}}" type="audio/mp3" />
                                    </audio>
                                </x-tablecol>
                                @if(auth()->check())
                                    <x-tablecol :col="-1">
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
                                    </x-tablecol>
                                @endif
                                <x-tablecol :col="-1">
                                    <a href="/artist/{{$mix->artist->id}}" class="text-decoration-none">
                                        <span class="text-light">{{$mix->artist->artist_name}}</span>
                                    </a>
                                </x-tablecol>
                                <x-tablecol :col="-1">
                                    <div class="dropdown">
                                        <button class="btn btn-dark" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                            <li><a class="dropdown-item" wire:click="downloadFile({{$mix->id}})">Download</a></li>
                                        </ul>
                                    </div>
                                </x-tablecol>
                            </tr>
                        @endforeach
                    </x-tablebody>
                </x-table>
            @endif
        @endif
    </div>
</div>

<!--
Delete
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                        </svg>
-->
