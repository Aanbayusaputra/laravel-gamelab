<?php
use App\Http\Controllers\TblPerubahanModalController;

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

Route::get('/', function() {
    return redirect(route('login'));
});
Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//modal



Route::get('/modals', [TblPerubahanModalController::class, 'index'])->name('perubahanModal');
Route::get('/modals/create', [TblPerubahanModalController::class, 'create'])->name('createPerubahanModal');
Route::post('/modals', [TblPerubahanModalController::class, 'store'])->name('storePerubahanModal');
Route::get('/modals/{id}/edit', [TblPerubahanModalController::class, 'edit'])->name('editPerubahanModal');
// Route::put('/modals/{id}', [TblPerubahanModalController::class, 'update'])->name('updatePerubahanModal');
Route::get('/modals/{id}', [TblPerubahanModalController::class, 'destroy'])->name('deletePerubahanModal');