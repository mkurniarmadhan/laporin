<?php

use App\Http\Controllers\Admin\KategoriLaporanController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Models\Laporan;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Carbon;

Route::get('/', function () {

    $aduans = Laporan::get()->groupBy('kategori.kategori')->map->count();
    $datas = [];
    foreach ($aduans as $key => $value) {
        $datas[] = [
            'value' => $value,
            'name' => $key
        ];
    }

    return view('welcome', compact('datas'));
});



Route::resource('laporan', LaporanController::class);
Route::resource('kategori-laporan', KategoriLaporanController::class);


Route::get('/dashboard', function () {

    $aduans = Laporan::get()->groupBy('kategori.kategori')->map->count();
    $datas = [];
    foreach ($aduans as $key => $value) {
        $datas[] = [

            'value' => $value,
            'name' => $key
        ];
    }

    $laporans = Laporan::where('status', 0)->limit(3)
        // ->whereDate('created_at', today())

        ->get();


    return view('dashboard', compact('datas', 'laporans'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::post('/is-admin/{user}', [ProfileController::class, 'isAdmin'])->name('profile.isAdmin');
});

require __DIR__ . '/auth.php';
