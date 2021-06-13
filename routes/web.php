<?php

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\obat;
use App\Http\Controllers\dokter;
use App\Http\Controllers\profile;
use App\Http\Controllers\diagnosis;
use App\Http\Controllers\kamarinap;
use App\Http\Controllers\reservasi;
use App\Http\Controllers\rumahsakit;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;

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
	$dataartikel = Artikel::orderBy('id', 'DESC')->get()->take(1);
	return view('index',compact('dataartikel'));
});
Route::get('/aboutus', [PagesController::class, 'aboutus'])->name('aboutus');
Route::get('/register', [PagesController::class, 'register'])->name('register');
// Route::get('/reservasi', [PagesController::class, 'reservasi'])->name('reservasi');

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
Route::group([], function () {
	Route::get('/caridiagnosis', [diagnosis::class, 'caridiagnosis'])->name('caridiagnosis');
	Route::get('/detaildiagnosis', [diagnosis::class, 'detaildiagnosis'])->name('detaildiagnosisold');
	Route::get('/detaildiagnosis/{id}', [diagnosis::class, 'detaildiagnosis'])->name('detaildiagnosis');
});
Route::get('reservasi/{idKamar}', [reservasi::class, 'bookingKamar']);
Route::post('reservasi/', [reservasi::class, 'submitBooking'])->name('submitReservasi');




//admin
//rawat inap
Route::get('/datarawatinap', [AdminController::class, 'datarawatinap']);
Route::get('/updatestatusrawatinap/{id}', [AdminController::class, 'updatestatusrawatinapapprove']);
Route::get('/updatestatusrawatinapdecline/{id}', [AdminController::class, 'updatestatusrawatinapdecline']);
Route::get('/printpdfrawayinap', [AdminController::class, 'printpdfrawayinap']);


//penjualan obat
Route::get('/datapenjualanobat', [AdminController::class, 'datapenjualanobat']);
Route::get('/approvepembelianobat/{id}', [AdminController::class, 'approvepembelianobat']);
Route::get('/declinepembelianobat/{id}', [AdminController::class, 'declinepembelianobat']);
Route::get('/printpdfobat', [AdminController::class, 'printpdfobat']);

Route::get('/adminlogin', [AdminController::class, 'adminlogin'])->name('formadadminloginminlogin');
