<div>
    @section('title')
        Favorites Mixes
    @endsection

    <div class="row mb-5">
        <div class="col d-flex justify-content-center">
            <h1>Your Favorite Mixes</h1>
        </div>
    </div>

    @if(count($this->mixes) < 1)
        <div class="row">
            <div class="col d-flex justify-content-center">
                <span class="fs-5">You don't have any Mix liked :(</span>
            </div>
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
                            <a href="/mix/{{$mix->id}}" class="text-decoration-none">
                                <span class="text-light">{{$mix->name}}</span>
                            </a>
                        </x-tablecol>
                        <x-tablecol :col="-6">
                            <audio class="w-100" id="plyr-audio-player" controls>
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
                                </ul>
                            </div>
                        </x-tablecol>
                    </tr>
                @endforeach
            </x-tablebody>
        </x-table>
    @endif
</div>
