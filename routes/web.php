<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Admincontroller;

//LOGIN
Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

//PAG. PRINCIPAL
Route::get('/index', function () {
    return view('index');
})->middleware('auth');

//EST ANTONIO VARAS
Route::get('/an-varas', function () {
    return view('an-varas');
})->middleware('auth');

//EST PRAT
Route::get('/prat', function () {
    return view('prat');
})->middleware('auth');

// GESTION USUARIOS 
Route::get( '/',            [SessionController::class, 'create' ])->middleware('guest')->name('login.index');
Route::post('/',            [SessionController::class, 'store'  ])->name('login.store');
Route::get( '/ges-usuarios',[RegisterController::class,'create' ])->middleware('auth.admin')->name('ges-usuarios.index');
Route::post('/ges-usuarios',[RegisterController::class,'store'  ])->name('ges-usuarios.store');
Route::get( '/logout',      [SessionController::class, 'destroy'])->middleware('auth')->name('login.destroy');

Route::get( '/admin',       [Admincontroller::class, 'index'    ])->middleware('auth.admin')->name('admin.index');

Route::get(   '/ges-usuarios',     [RegisterController::class,'index'  ])->middleware('auth.admin')->name('ges-usuarios.index');
Route::get(   '/ges-usuarios/{id}',[RegisterController::class,'show'   ])->name('ges-usuarios-edit');
Route::patch( '/ges-usuarios/{id}',[RegisterController::class,'update' ])->name('ges-usuarios-update');
Route::delete('/ges-usuarios/{id}',[RegisterController::class,'destroy'])->name('ges-usuarios-destroy');


//RECURSOS
Route::resource('/store',registroController::class);