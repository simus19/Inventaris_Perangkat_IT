<?php

use App\Http\Controllers\Administrator\UsersController;
use App\Http\Controllers\BireunController;
use App\Http\Controllers\BlangkejerenController;
use App\Http\Controllers\Data_perangkat_hardController;
use App\Http\Controllers\DataaplikasiController;
use App\Http\Controllers\DatapemeliharaanController;
use App\Http\Controllers\DataserverController;
use App\Http\Controllers\GandapuraController;
use App\Http\Controllers\KutacaneController;
use App\Http\Controllers\LangsaController;
use App\Http\Controllers\LhokseumaweController;
use App\Http\Controllers\Master_perangkat_itController;
use App\Http\Controllers\MasterunitController;
use App\Http\Controllers\Panton_labuController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserviewController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfilController::class, 'profil']);
    Route::put('/profil/info/update', [ProfilController::class, 'profil_info_update']);
    Route::put('/profil/password/update', [ProfilController::class, 'profil_password_update']);
});

require __DIR__ . '/auth.php';

Route::middleware('auth', 'cekRole:Administrator')->group(function () {
    Route::auto('/administrator/users', UsersController::class);
    Route::auto('/administrator/masterunit', MasterunitController::class);
    Route::auto('/administrator/masterlayanan', MasterlayananController::class);
    Route::auto('/administrator/master_perangkat_it', Master_perangkat_itController::class);
    Route::auto('/administrator/dataserver', DataserverController::class);
    Route::auto('/administrator/dataaplikasi', DataaplikasiController::class);
    Route::auto('/administrator/data_perangkat_hard', Data_perangkat_hardController::class);
    Route::auto('/administrator/datapemeliharaan', DatapemeliharaanController::class);
    Route::auto('/administrator/lhokseumawe', LhokseumaweController::class);
    Route::auto('/administrator/bireun', BireunController::class);
    Route::auto('/administrator/gandapura', GandapuraController::class);
    Route::auto('/administrator/panton_labu', Panton_labuController::class);
    Route::auto('/administrator/langsa', LangsaController::class);
    Route::auto('/administrator/kutacane', KutacaneController::class);
    Route::auto('/administrator/blangkejeren', BlangkejerenController::class);
});

Route::middleware('auth', 'cekRole:Operator')->group(function () {
    Route::auto('/user/', UserviewController::class);
});
