<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/listbarang/{id}/{nama}', function ($id, $nama){
//     return view('list_barang', compact('id', 'nama'));
// });

Auth::routes(['login', 'password.reset']);
Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/listbarang/{id}/{nama}', function ($id, $nama){
    return view('list_barang', compact('id', 'nama'));
});
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });


    Route::get('/users', function () {
        return 'Admin Users';
    });
}); 