<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\diagnosis;
use App\Http\Controllers\dokter;
use App\Http\Controllers\kamarinap;
use App\Http\Controllers\obat;
<<<<<<< HEAD
use App\Http\Controllers\PagesController;
use App\Http\Controllers\profile;
use App\Http\Controllers\rumahsakit;
=======
use App\Http\Controllers\diagnosis;
use App\Http\Controllers\reservasi;
>>>>>>> e1c08a33652cc00dedc0e6beb49995e879b69083
use Illuminate\Http\Request;
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

Route::get('/', function () {
	return view('index');
});
Route::get('/aboutus', [PagesController::class, 'aboutus'])->name('aboutus');
Route::get('/register', [PagesController::class, 'register'])->name('register');
<<<<<<< HEAD
Route::get('/reservasi', [PagesController::class, 'reservasi'])->name('reservasi');
=======
// Route::get('/reservasi', [PagesController::class, 'reservasi'])->name('reservasi');

Route::get('/bpjs', [PagesController::class, 'bpjs'])->name('bpjs');
>>>>>>> e1c08a33652cc00dedc0e6beb49995e879b69083

Route::group([], function () {
	Route::get('/login', [PagesController::class, 'login'])->name('login');
	Route::post('/register', [profile::class, 'register']);
	Route::post('/login', [profile::class, 'login']);
	Route::get('/logout', function (Request $req) {
		$req->session()->forget('login');
		return redirect('/login');
	});
	Route::get('/editprofile/{id}', [profile::class, 'editprofile'])->name('editprofile');
	Route::get('/detaileditprofile/{id}', [profile::class, 'detaileditprofile'])->name('detaileditprofile');
	Route::post('/detaileditprofile', [profile::class, 'saveeditprofile'])->name('saveeditprofile');
	Route::get('/riwayat', [profile::class, 'riwayat'])->name('riwayat'); 
	Route::get('/ulasan/{id}', [profile::class, 'ulasan'])->name('ulasan');
	Route::post('/postulasan', [profile::class, 'postulasan'])->name('postulasan');
	Route::get('/bpjs', [PagesController::class, 'bpjs'])->name('bpjs');
});
Route::group([], function () {
	Route::get('/carirs', [rumahsakit::class, 'carirs'])->name('carirs');
	Route::get('/detailrs', [rumahsakit::class, 'detailrs'])->name('detailrsold');
	Route::get('/detailrs/{id}', [rumahsakit::class, 'detailrs'])->name('detailrs');
});

Route::group([], function () {
	Route::get('/caridokter', [dokter::class, 'caridokter'])->name('caridokter');
	Route::get('/profiledokter', [dokter::class, 'profiledokter'])->name('profiledokterold');
	Route::get('/profiledokter/{id}', [dokter::class, 'profiledokter'])->name('profiledokter');
});

Route::group([], function () {
	Route::get('/cekdetailkamar', [kamarinap::class, 'cekdetailkamar'])->name('cekdetailkamarold');
	Route::get('/cekdetailkamar/{id}', [kamarinap::class, 'cekdetailkamar'])->name('cekdetailkamar');
});

Route::group([], function () {
	Route::get('/articles', [ArticlesController::class, 'index']);
	Route::get('/articles/{id}', [ArticlesController::class, 'show']);
});

Route::group([], function () {
	Route::get('/cariobat', [obat::class, 'cariobat'])->name('cariobat');
	Route::get('/cekdetailobat', [obat::class, 'cekdetailobat'])->name('cekdetailobatold');
	Route::get('/cekdetailobat/{id}', [obat::class, 'cekdetailobat'])->name('cekdetailobat');
	Route::get('/formpemesananobat', [obat::class, 'formpemesananobat'])->name('formpemesananobat');
	Route::post('/transaction', [obat::class, 'transaction'])->name('transaction');
});
<<<<<<< HEAD
Route::group([], function () {
	Route::get('/caridiagnosis', [diagnosis::class, 'caridiagnosis'])->name('caridiagnosis');
	Route::get('/detaildiagnosis', [diagnosis::class, 'detaildiagnosis'])->name('detaildiagnosisold');
	Route::get('/detaildiagnosis/{id}', [diagnosis::class, 'detaildiagnosis'])->name('detaildiagnosis');
});
=======
Route::group([], function(){
    Route::get('/caridiagnosis', [diagnosis::class, 'caridiagnosis'])->name('caridiagnosis');
    Route::get('/detaildiagnosis', [diagnosis::class, 'detaildiagnosis'])->name('detaildiagnosisold');
    Route::get('/detaildiagnosis/{id}', [diagnosis::class, 'detaildiagnosis'])->name('detaildiagnosis');
});

Route::get('reservasi/{idKamar}', [reservasi::class, 'bookingKamar']);
Route::post('reservasi/', [reservasi::class, 'submitBooking'])->name('submitReservasi');
>>>>>>> e1c08a33652cc00dedc0e6beb49995e879b69083
