<div>
    @if(!auth()->check())
        <div class="d-flex gap-3">
            <a wire:click="login()" href="/{{__("routes.login")}}" class="text-decoration-none btn-dark btn-outline-light link-underline link-underline-opacity-0 border p-2 rounded fs-5">Login</a>
            <a wire:click="signOut()" href="/{{__("routes.register")}}" class="text-decoration-none btn-dark btn-outline-light link-underline link-underline-opacity-0 border p-2 rounded fs-5 ">Sign In</a>
        </div>
    @else
        <div class="dropstart align">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{asset('storage/'.auth()->user()->image)}}" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">{{auth()->user()->username}}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="/settings">{{__('additional/settings.settings')}}</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a wire:click="signOut" class="dropdown-item">{{__('home/home.sign-out')}}</a></li>
            </ul>
        </div>
    @endif
</div>

<!-- User management -->
