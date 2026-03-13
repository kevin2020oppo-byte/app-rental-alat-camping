<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;

// return view('welcome');
//});

Route::get('/', [HomeController::class, 'index']); 
Route::get('/contact', [HomeController::class, 'contact']);


Route::get('/welcome', function () {
    return view('welcome');
});     

Route::get('/user/{id}', function ($id) {
    return 'user dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});

//Route::get('/list_barang/{id}/{nama}', function ($id, $nama) {
//    return view('list_barang', compact('id', 'nama'));
// }); 

Route::get('/list_barang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);