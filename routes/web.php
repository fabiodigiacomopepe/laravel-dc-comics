<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\PageController as PageController;

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

Route::get('/', [PageController::class, 'index']) -> name('comic.index');

Route :: get('/comic/create', [PageController::class, 'create']) -> name('comic.create');

Route :: post('/comic', [PageController::class, 'store']) -> name('comic.store');

Route::get('/show/{id}', [PageController::class, 'show']) -> name('comic.show');

Route::get('/edit/{id}', [PageController::class, 'edit']) -> name('comic.edit');

Route::put('/update/{id}', [PageController::class, 'update']) -> name('comic.update');

Route::delete('/destroy/{id}', [PageController::class, 'destroy']) -> name('comic.destroy');
