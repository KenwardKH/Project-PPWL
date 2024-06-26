<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\JadwalKonserController;
use App\Http\Controllers\TicketController;

Route::get('/', [JadwalKonserController::class, 'index'])->name('index');
Route::get('/ticket', function () {
    return view('ticket');
});
Route::get('/bayar/{id}', [TicketController::class, 'bayar'])->name('bayar');

Route::get('/ticket_list', [TicketController::class, 'ticket_list'])->name('ticket_list');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/edit_user/{id}', [MemberController::class, 'edit'])->name('edit_user');
Route::delete('/user/{id}', '\App\Http\Controllers\MemberController@destroy')->name('delete-user');
Route::post('/update-user', [MemberController::class, 'update'])->name('update-user');

Route::get('/members', [MemberController::class, 'index'])->name('members')->middleware('auth');
Route::get('/jadwal_konser', [JadwalKonserController::class, 'show'])->name('jadwal_konser')->middleware('auth');
Route::get('/add_jadwal_konser', function () {
    return view('add_jadwal_konser');
})->middleware(['auth', 'verified'])->name('add_jadwal_konser');
Route::post('/add_jadwal_konser',[JadwalKonserController::class, 'store']);
Route::get('/edit_jadwal_konser/{id}', [JadwalKonserController::class, 'edit'])->name('edit_jadwal_konser');
Route::post('/update-jadwal_konser/{id}', [JadwalKonserController::class, 'update'])->name('update-jadwal_konser');
Route::delete('/delete-jadwal_konser/{id}', [JadwalKonserController::class, 'destroy'])->name('delete-jadwal_konser');

Route::get('/ticket/{id}', [JadwalKonserController::class, 'tiket'])->name('beli_tiket');
Route::get('/ticket_list_admin', [TicketController::class, 'ticket_list_admin'])->name('ticket_list_admin')->middleware('auth');
Route::post('/ticket', [TicketController::class, 'store'])->name('submit_ticket');
Route::post('/submit_bukti_trf/{id}', [TicketController::class, 'update'])->name('submit_bukti_trf');

Route::post('/ticket_list_admin/ubah_status/{id}', [TicketController::class, 'ubah_status'])->name('ubah_status');
Route::delete('/ticket_list_admin/delete/{id}', [TicketController::class, 'destroy'])->name('delete_ticket_status');

require __DIR__.'/auth.php';
