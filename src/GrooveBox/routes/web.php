<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group([],function () {

    $locales = ["en","es"];

    foreach ($locales as $locale) {
        Route::redirect('/', '/home');

        // Mejorar imagenes, responsive y ya
        Route::get(__('routes.home', [], $locale), \App\Http\Livewire\Home\Home::class)->name('home');

        // Login

        //done -> form validation?
        Route::get(__('routes.login', [], $locale), \App\Http\Livewire\Auth\Login::class)->name('login');
        // form validation
        Route::get(__('routes.register', [], $locale), \App\Http\Livewire\Auth\Register::class);


        //Mixes

        // Download - Add to Tracklist
        Route::get(__('routes.favorites-mixes', [], $locale),\App\Http\Livewire\Mixes\Likes::class)->middleware('auth')->fallback(\App\Http\Livewire\Auth\Login::class);

        // Done - Download - Delete - Add to Tracklist
        Route::get(__('routes.mix', ['mixId'], $locale), \App\Http\Livewire\Mixes\Mix::class);

        // done - Validation
        Route::get(__('routes.new-mix', [], $locale), \App\Http\Livewire\Mixes\NewMix::class)->middleware('auth')->fallback(\App\Http\Livewire\Auth\Login::class);

        // Almost done (check files inputs)
        Route::get(__('routes.update-mix', ['mixId'], $locale), \App\Http\Livewire\Mixes\UpdateMix::class)->middleware('auth')->fallback(\App\Http\Livewire\Auth\Login::class);

        Route::get(__('routes.add-mix-to-tracklists', ['mixId'], $locale), \App\Http\Livewire\Mixes\AddToTracklist::class)->middleware('auth')->fallback(\App\Http\Livewire\Auth\Login::class);


        //Tracklists

        // styles + quit from tracklist
        Route::get(__('routes.personal-tracklists', [], $locale),\App\Http\Livewire\Tracklist\MyTracklists::class)->middleware('auth');

        // done
        Route::get(__('routes.tracklist', ['tracklistId'], $locale), \App\Http\Livewire\Tracklist\TracklistComponent::class);

        //done
        Route::get(__('routes.new-tracklist', [], $locale), \App\Http\Livewire\Tracklist\NewTracklist::class)->middleware('auth')->fallback(\App\Http\Livewire\Auth\Login::class);

        // done
        Route::get(__('routes.update-tracklist', ['tracklistId'], $locale), \App\Http\Livewire\Tracklist\UpdateTracklist::class)->middleware('auth')->fallback(\App\Http\Livewire\Auth\Login::class);


        //Artists

        // done (almost) - Add to Tracklist
        Route::get(__('routes.artist', ['artist'], $locale), \App\Http\Livewire\Artist\Artist::class);
        // done
        Route::get(__('routes.artist-new', [], $locale), \App\Http\Livewire\Artist\NewArtist::class)->middleware('auth')->fallback(\App\Http\Livewire\Auth\Login::class);
        // done
        Route::get(__('routes.artist-update', [], $locale), \App\Http\Livewire\Artist\UpdateArtist::class)->middleware('auth')->fallback(\App\Http\Livewire\Auth\Login::class);


        //Additional

        // done (almost)
        Route::get(__('routes.search', [], $locale), \App\Http\Livewire\Additional\Search::class);

        Route::get(__('routes.settings', [], $locale), \App\Http\Livewire\Additional\Settings::class)->middleware('auth')->fallback(\App\Http\Livewire\Auth\Login::class);
    }
});
