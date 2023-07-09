<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('auth.login');
});
    // ------ User -------
Route::group([ "middleware" => ['auth:sanctum', config('jetstream.auth_session'), 'verified'] ], function() {
    
    Route::get('/scdfvdfvdffvdknvkjnshkdjfvkjdfv', [ UserController::class, "index_view" ])->name('user');
    Route::view('/scdfvdfvdffvdknvkjnshkdjfvkjdfv/new', "pages.user.user-new")->name('user.new');
    Route::view('/scdfvdfvdffvdknvkjnshkdjfvkjdfv/edit/{userId}', "pages.user.user-edit")->name('user.edit');

    // ------ File Upload ------

    
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/upload', [FileController::class, 'index_view'])->name('upload');
        Route::view('/upload/new', "pages.file.file-new")->name('upload.new');

        Route::post('/files/upload', [FileController::class, 'upload'])->name('files.upload');
        Route::post('/files/{id}/download', [DownloadController::class, 'download'])->name('files.download');
        Route::delete('/files/{id}/delete', [DashboardController::class, 'deleteFile'])->name('files.delete');
});
