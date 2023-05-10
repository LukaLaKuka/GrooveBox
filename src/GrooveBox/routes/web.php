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

        Route::get(__('routes.home', [], $locale), \App\Http\Livewire\Home\Home::class);

        // Login

        Route::get(__('routes.login', [], $locale), \App\Http\Livewire\Auth\Login::class);
        Route::get(__('routes.register', [], $locale), \App\Http\Livewire\Auth\Register::class);

        //Mixes

        Route::get(__('routes.mixes', [], $locale), \App\Http\Livewire\Mixes\Mixes::class);
        Route::get(__('routes.mix', ['mixId'], $locale), \App\Http\Livewire\Mixes\Mix::class);
        Route::get(__('routes.new-mix', [], $locale), \App\Http\Livewire\Mixes\NewMix::class);
        Route::get(__('routes.update-mix', ['mixId'], $locale), \App\Http\Livewire\Mixes\UpdateMix::class);

        //Tracklists

        Route::get(__('routes.tracklists', [], $locale), \App\Http\Livewire\Tracklist\Tracklists::class);
        Route::get(__('routes.tracklist', ['tracklistId'], $locale), \App\Http\Livewire\Tracklist\TracklistComponent::class);
        Route::get(__('routes.new-tracklist', [], $locale), \App\Http\Livewire\Tracklist\NewTracklist::class);
        Route::get(__('routes.update-tracklist', ['tracklistId'], $locale), \App\Http\Livewire\Tracklist\UpdateTracklist::class);

        //Artists

        Route::get(__('routes.artists', [], $locale), \App\Http\Livewire\Artist\Artists::class);
        Route::get(__('routes.artist', ['artistId'], $locale), \App\Http\Livewire\Artist\Artist::class);
        Route::get(__('routes.new-artist', [], $locale), \App\Http\Livewire\Artist\NewArtist::class);
        Route::get(__('routes.update-artist', ['artistId'], $locale), \App\Http\Livewire\Artist\UpdateArtist::class);

        //Additional
        Route::get(__('routes.search', [], $locale), \App\Http\Livewire\Additional\Search::class);
        Route::get(__('routes.settings', [], $locale), \App\Http\Livewire\Additional\Settings::class);
    }
});
