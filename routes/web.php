<?php

use App\Http\Controllers\Apps\DashboardController;
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
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;

Route::get('/test-print', function () {
    try {
        // **Untuk Printer USB**
        // Ganti "Nama_Printer" dengan nama printer yang sesuai di sistem Anda
        $connector = new WindowsPrintConnector("Nama_Printer");

        // **Untuk Printer Bluetooth**
        // Uncomment baris di bawah ini jika menggunakan Bluetooth
        // $connector = new FilePrintConnector("/dev/rfcomm0");

        $printer = new Printer($connector);

        // Cetak teks sederhana
        $printer->setJustification(Printer::JUSTIFY_CENTER);
        $printer->text("Hello, Thermal Printer!\n");
        $printer->text(date('Y-m-d H:i:s') . "\n");
        $printer->feed(2); // Tambah spasi kosong
        $printer->cut(); // Potong kertas
        $printer->close();

        return "Cetak berhasil!";
    } catch (Exception $e) {
        return "Terjadi kesalahan: " . $e->getMessage();
    }
});


Auth::routes();

// Route::get('/', [DashboardController::class, 'registration']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);
// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
// Route::group(['prefix' => '/'], function () {
//     Route::get('dashboard', [App\Http\Controllers\Apps\DashboardController::class, 'index'])->name('apps.dashboard.index');
//     Route::get('registration', [App\Http\Controllers\Apps\DashboardController::class, 'registration'])->name('apps.dashboard.registration');
//     Route::get('checkin', [App\Http\Controllers\Apps\DashboardController::class, 'checkin'])->name('apps.dashboard.checkin');
// });

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/registration', [DashboardController::class, 'registration'])->name('registration');
Route::get('/check-in', action: [DashboardController::class, 'checkin'])->name('checkin');