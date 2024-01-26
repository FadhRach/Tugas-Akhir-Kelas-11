<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('landing');
});

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [SesiController::class,'index'])->name('login');
    Route::get('/signup', [SesiController::class,'signup'])->name('login');
    Route::post('/login', [SesiController::class,'login']);
    Route::post('/signup', [SesiController::class,'signup']);
}) ;

Route::middleware(['auth'])->group(function(){
    //RESET MIDDLEWARE JIKA MEMBOBOL URL
    Route::get('/home', function(){
        return view('landing');
    });
    //About
    Route::get('/aboutu', function(){return view ('layout.aboutu'); })->middleware('akses:user');
    Route::get('/abouta', function(){return view ('layout.abouta'); })->middleware('akses:admin');

    //PROFILE USER
    Route::get('/profileuser/{id}',[UserController::class,'profile'])->middleware('akses:user');
    Route::get('/profileuser/peditu/{id}',[UserController::class,'peditu'])->middleware('akses:user');
    Route::put('/profileuser/pupdateu/{id}',[UserController::class,'pupdateu'])->middleware('akses:user');
    Route::get('/profileadmin/{id}',[UserController::class,'profila'])->middleware('akses:admin');
    Route::get('/profileadmin/pedita/{id}',[UserController::class,'pedita'])->middleware('akses:admin');
    Route::put('/profileuser/pupdatea/{id}',[UserController::class,'pupdatea'])->middleware('akses:admin');
    //ADMIN
    Route::get('/home/admin',[AdminController::class,'index'])->middleware('akses:admin');
    //PLACE
    Route::get('/home/admin/place', [PlaceController::class,'index'])->middleware('akses:admin');
    Route::get('/home/admin/place/tambah', [PlaceController::class,'tambah'])->middleware('akses:admin');
    Route::post('/home/admin/place/simpan', [PlaceController::class,'simpan'])->middleware('akses:admin');
    Route::get('/home/admin/place/edit/{id_place}', [PlaceController::class,'edit'])->middleware('akses:admin');
    Route::put('/home/admin/place/update/{id_place}', [PlaceController::class,'update'])->middleware('akses:admin');
    Route::get('/home/admin/place/hapus/{id_place}', [PlaceController::class,'delete'])->middleware('akses:admin');
    //ITEM
    Route::get('/home/admin/item', [ItemController::class,'index'])->middleware('akses:admin');
    Route::get('/home/admin/item/tambah', [ItemController::class,'tambah'])->middleware('akses:admin');
    Route::post('/home/admin/item/simpan', [ItemController::class,'simpan'])->middleware('akses:admin');
    Route::get('/home/admin/item/edit/{id_item}', [ItemController::class,'edit'])->middleware('akses:admin');
    Route::put('/home/admin/item/update/{id_item}', [ItemController::class,'update'])->middleware('akses:admin');
    Route::get('/home/admin/item/hapus/{id_item}', [ItemController::class,'delete'])->middleware('akses:admin');
    //SCHEDULE
    Route::get('/home/admin/sch', [userController::class,'scheadm'])->middleware('akses:admin');
    Route::get('/home/admin/schpl/terima/{id_pinjampl}', [userController::class,'terimap'])->middleware('akses:admin');
    Route::get('/home/admin/schpl/tolak/{id_pinjampl}', [userController::class,'tolakp'])->middleware('akses:admin');
    Route::get('/home/admin/schpl/hapus/{id_pinjampl}', [userController::class,'destroyp'])->middleware('akses:admin');
    Route::get('/home/admin/schitem/terima/{id_pinjamitem}', [userController::class,'terimai'])->middleware('akses:admin');
    Route::get('/home/admin/schitem/tolak/{id_pinjamitem}', [userController::class,'tolaki'])->middleware('akses:admin');
    Route::get('/home/admin/schitem/hapus/{id_pinjamitem}', [userController::class,'destroyi'])->middleware('akses:admin');

    
    Route::get('/home/admin/user', [UserController::class,'userv'])->middleware('akses:admin');


    //USER
    Route::get('/user', [UserController::class,'index'])->middleware('akses:user');
    Route::get('/user/place', [PlaceController::class,'indexu'])->middleware('akses:user');
    Route::get('/user/place/pinjam', [PlaceController::class,'pinjamu'])->middleware('akses:user');
    Route::post('/user/place/save', [PlaceController::class,'saveu'])->middleware('akses:user');
    Route::get('/user/item', [ItemController::class,'indexu'])->middleware('akses:user');
    Route::get('/user/item/pinjam', [ItemController::class,'pinjamu'])->middleware('akses:user');
    Route::post('/user/item/save', [ItemController::class,'save'])->middleware('akses:user');
    Route::get('/user/schedule', [UserController::class,'schedule'])->middleware('akses:user');
    Route::get('/user/success', [UserController::class,'pinjamsuccess'])->middleware('akses:user');
    Route::get('/user/history', [UserController::class,'history'])->middleware('akses:user');

    //LOGOUT
    Route::get('/logout', [SesiController::class,'logout']);
}) ;

