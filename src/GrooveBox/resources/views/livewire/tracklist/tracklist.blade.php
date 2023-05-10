<div>
    @extends('layouts.app')

    @section('title')
        Tracklist
    @endsection

    @section('content')
        <div class="row">
            <div class="col-3">
                <img class="rounded-circle" src="{{url("assets/images/test.png")}}" width="100%"/>
            </div>
            <div class="col-9">
                <h1 class="fs-1">{{$this->tracklist->name}}</h1>
                <p class="fs-5">{{$this->tracklist->description}}</p>
            </div>
        </div>
        <div class="row my-2">
            @if(sizeof($this->mixes) == 0)
                <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                    <h3 class="text-white">You don't have any Mix added in this Tracklist</h3>
                    <button class="btn-success rounded fs-3">Add Mix</button>
                </div>
            @else
                <x-table>
                    <x-tableheader>
                        <th></th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Like</th>
                        <th>Delete</th>
                        <th>Author</th>
                    </x-tableheader>
                    <x-tablebody>
                        @foreach($this->mixes as $mix)
                            <tr>
                                <td class="col-1"><img class="rounded-circle" src="{{url("assets/images/test.png")/*$mix->image*/}}"  width="100%"/></td>
                                <td class="col-2">{{$mix->name}}</td>
                                <td class="col-6">{{$mix->description}}</td>
                                <td class="col-1">
                                    <button class="btn-dark btn-outline-dark border-0 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                        </svg>
                                    </button>
                                </td>
                                <td class="col-1">
                                    <button class="btn-dark btn-outline-dark border-0 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                        </svg>
                                    </button>
                                </td>
                                <td class="col-1">{{$mix->author}}</td>
                            </tr>
                        @endforeach
                    </x-tablebody>
                </x-table>
            @endif
        </div>
    @endsection
</div>
