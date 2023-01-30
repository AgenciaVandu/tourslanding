<?php

use App\Http\Controllers\TourController;
use App\Models\Tour;
use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
    $request->session()->forget('register');
    return view('index');
});

Route::get('/eng', function () {
    $count_henequen = Tour::where('tour_route','henequen')->count();
    $count_milpa = Tour::where('tour_route','milpa')->count();
    $count_azul = Tour::where('tour_route','azul')->count();
    $count_puuc = Tour::where('tour_route','puuc')->count();
    return view('index-eng',compact('count_henequen', 'count_milpa', 'count_azul','count_puuc'));
});
Route::post('send',[TourController::class,'send'])->name('send-form');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {

        return view('dashboard');
    })->name('dashboard');
});
