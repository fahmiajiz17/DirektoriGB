<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\Admin\listgbController;
use App\Http\Controllers\User\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route Homepage
Route::get('/', [HomepageController::class, 'index'])->name('dashboard_homepage');
Route::get('/data', [HomepageController::class, 'data'])->name('data');
Route::get('listGB', [HomepageController::class, 'listgb'])->name('listGB');
Route::get('kontenA', [HomepageController::class, 'kontenA'])->name('kontenA');
Route::get('kontenB', [HomepageController::class, 'kontenB'])->name('kontenB');
Route::get('kontenC', [HomepageController::class, 'kontenC'])->name('kontenC');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'prevent-back-history']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard_admin');
    Route::get('/data', [AdminController::class, 'data'])->name('data');
    Route::get('listGB', [listgbController::class, 'listgb'])->name('listGB');
    Route::get('/data_gb/{nidn}', [listgbController::class, 'showgb'])->name('data_gb');
    Route::get('/data_publikasi/{nidn}', [listgbController::class, 'showpublikasi'])->name('publikasi');
    Route::get('/data_organisasi/{nidn}', [listgbController::class, 'showorganisasi'])->name('organisasi');
    Route::get('/editpublikasi/{id}', 'EditPublikasiController@editpublikasi')->name('edit.publikasi');
    Route::post('/updatepublikasi', 'UpdatePublikasiController@updatepublikasi')->name('update.publikasi');
    Route::post('/update-publikasi/{id}', [listgbController::class, 'update']);
    Route::post('/simpan-organisasi', [listgbController::class, 'simpanOrganisasi'])->name('simpan.organisasi');
    Route::post('/simpan-perubahan-publikasi', [listgbController::class, 'simpanPerubahan']);

    Route::get('kontenA', [AdminController::class, 'kontenA'])->name('kontenA');
    Route::get('kontenB', [AdminController::class, 'kontenB'])->name('kontenB');
    Route::get('kontenC', [AdminController::class, 'kontenC'])->name('kontenC');
});

Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware' => ['auth', 'user', 'prevent-back-history']], function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard_user');
    Route::get('/data', [UserController::class, 'data'])->name('data');
    Route::get('listGB', [UserController::class, 'listgb'])->name('listGB');
    Route::get('kontenA', [UserController::class, 'kontenA'])->name('kontenA');
    Route::get('kontenB', [UserController::class, 'kontenB'])->name('kontenB');
    Route::get('kontenC', [UserController::class, 'kontenC'])->name('kontenC');
});
