<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\register;
use App\Http\Controllers\login;
use Illuminate\Http\Request;

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
    return view('index');
});
Route::get('/aboutus', [PagesController::class, 'aboutus'])->name('aboutus');
Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/register', [PagesController::class, 'register'])->name('register');
Route::get('/cariobat', [PagesController::class, 'cariobat'])->name('cariobat');
Route::get('/carirs', [PagesController::class, 'carirs'])->name('carirs');
Route::get('/detailrs', [PagesController::class, 'detailrs'])->name('detailrsold');
Route::get('/detailrs/{id}', [PagesController::class, 'detailrs'])->name('detailrs');
Route::get('/cekdetailkamar', [PagesController::class, 'cekdetailkamar'])->name('cekdetailkamarold');
Route::get('/cekdetailkamar/{id}', [PagesController::class, 'cekdetailkamar'])->name('cekdetailkamar');
Route::get('/reservasi', [PagesController::class, 'reservasi'])->name('reservasi');
Route::get('/bpjs', [PagesController::class, 'bpjs'])->name('bpjs');
Route::get('/caridiagnosis', [PagesController::class, 'caridiagnosis'])->name('caridiagnosis');
Route::get('/caridokter', [PagesController::class, 'caridokter'])->name('caridokter');
Route::get('/detaildiagnosis', [PagesController::class, 'detaildiagnosis'])->name('detaildiagnosisold');
Route::get('/detaildiagnosis/{id}', [PagesController::class, 'detaildiagnosis'])->name('detaildiagnosis');
Route::get('/profiledokter', [PagesController::class, 'profiledokter'])->name('profiledokterold');
Route::get('/profiledokter/{id}', [PagesController::class, 'profiledokter'])->name('profiledokter');
Route::post('/register', [register::class, 'register']);
Route::post('/login', [login::class, 'login']);
Route::get('/logout', function(Request $req) {
    $req->session()->forget('login');
    return redirect('/login');
});
Route::get('/cekdetailobat', [PagesController::class, 'cekdetailobat'])->name('cekdetailobatold');
Route::get('/cekdetailobat/{id}', [PagesController::class, 'cekdetailobat'])->name('cekdetailobat');
Route::get('/formpemesananobat', [PagesController::class, 'formpemesananobat'])->name('formpemesananobat');
Route::get('/uploadbukti', [PagesController::class, 'uploadbukti'])->name('uploadbukti');
Route::get('/editprofile', [PagesController::class, 'editprofile'])->name('editprofile');
Route::get('/detaileditprofile', [PagesController::class, 'detaileditprofile'])->name('detaileditprofile');