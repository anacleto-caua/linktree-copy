<?php

use App\Http\Controllers\TreeController;
use App\Models\Tree;
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
/** Home */
Route::get('/', function () {
    return view('home');
});

/** TreeController */
Route::middleware('auth')->group(function () {
    Route::get('/trees', [TreeController::class, 'index'])->name('trees.index');

    Route::get('/trees/create', [TreeController::class, 'create'])->name('trees.create');
    Route::put('/trees/create', [TreeController::class, 'store'])->name('trees.store');
});


/** Tree Presentation */
Route::get('/{address}', function ($address) {

    return view('tree', [
        'tree' => Tree::where('address', '=', $address)->first()
    ]);
});


/** Auth */
require __DIR__.'/auth.php';
