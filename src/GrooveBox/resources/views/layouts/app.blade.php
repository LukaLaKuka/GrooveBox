<!DOCTYPE html>
<html lang='es'>

<head>
    <!-- etiquetas meta requeridas -->
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="{{ url('assets/images/Groove.ico') }}" rel='shortcut icon' type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href='{{asset('css/app.css')}}' rel='stylesheet' type="text/css">
    @livewireStyles
    <title>@yield('title')</title>
</head>

<body>
<!-- Top Bar-->
<nav class="navbar navbar-dark bg-dark border-bottom border-secondary">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand fs-3" href="/{{__("routes.home")}}">
            <span>Groove</span><span class="text-primary">Box:</span>
        </a>
        @livewire('additional.user-manage')
    </div>
</nav>


<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark border-end border-secondary">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/home" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Home</span>
                </a>
                <a href="/search" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none gap-2 d-flex align-items-center">
                    <span class="fs-6 d-none d-sm-inline">Search</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </a>
                @if(auth()->check())
                <span class="fs-5 d-none d-sm-inline">Artists</span>
                <ul class="nav nav-pills flex-column mb-0 align-items-center align-items-sm-start" id="menu">
                    @if(auth()->user()->hasArtist())
                        <li class="nav-item">
                            <a href="/artist/{{auth()->user()->artist->id}}" class="nav-link align-middle px-0 gap-2 d-flex align-items-center">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Your Artist Profile</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                </svg>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/new-artist" class="nav-link align-middle px-0 gap-2 d-flex align-items-center">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Create your Artist Profile</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                </svg>
                            </a>
                        </li>
                    @endif
                </ul>
                @endif
                @if(auth()->check())
                <span class="fs-5 d-none d-sm-inline">Mixes</span>
                <ul class="nav nav-pills flex-column mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="/like" class="nav-link align-middle px-0 gap-2 d-flex align-items-center">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Favorites Mixes</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                </svg>
                            </a>
                        </li>
                        @if(auth()->user()->hasArtist())
                            <li class="nav-item">
                                <a href="/artist/{{auth()->user()->artist->id}}" class="nav-link align-middle px-0 gap-2 d-flex align-items-center">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Your Mixes</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note" viewBox="0 0 16 16">
                                        <path d="M9 13c0 1.105-1.12 2-2.5 2S4 14.105 4 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                        <path fill-rule="evenodd" d="M9 3v10H8V3h1z"/>
                                        <path d="M8 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 13 2.22V4L8 5V2.82z"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/new-mix" class="nav-link align-middle px-0 gap-2 d-flex align-items-center">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Create a Mix</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                    </svg>
                                </a>
                            </li>
                        @endif
                    </ul>
                @endif
                @if(auth()->check())
                <span class="fs-5 d-none d-sm-inline">Tracklists</span>
                <ul class="nav nav-pills flex-column mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <a href="/personal-tracklists" class="nav-link px-0 align-middle gap-2 d-flex align-items-center">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Your Tracklists</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                                    <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                    <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/>
                                    <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                                    <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                @endif
                <hr>
            </div>
        </div>
        <div class="col p-5 bg-dark text-white">
                {{$slot}}
        </div>
    </div>
</div>


<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p'
        crossorigin='anonymous'></script>
@livewireScripts
</body>

</html>
