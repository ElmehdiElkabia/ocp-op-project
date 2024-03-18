<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\authentications\Login;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\GestionopController;
use App\Http\Controllers\FillterDate;

// Main Page Route
Route::get('/', [Analytics::class, 'index'])->name('dashboard-analytics');

//->middleware('auth');


// authentication
Route::get('/auth/login', [Login::class, 'index'])->name('login');





// table
Route::get('/table/all', [GestionopController::class, 'index'])->name('table-all');
Route::get('/table/paiement', [GestionopController::class, 'filter_paiement'])->name('table-paiement');
Route::get('/table/non_paiement', [GestionopController::class, 'filter_non_paiement'])->name('table-non-paiement');

// crud
Route::get('edit/{id}', [GestionopController::class, 'edit'])->name('edit-op');
Route::put('update/{id}', [GestionopController::class, 'update'])->name('update-op');
Route::post('add', [GestionopController::class, 'store'])->name('add-op');
Route::get('/créer/nouvelle', [GestionopController::class, 'create']);
Route::delete('op/{id}', [GestionopController::class, 'destroy'])->name('destroy-op');

// search
Route::get('/search', [GestionopController::class, 'search'])->name('search');
//excel
Route::get('/excel', [ExcelController::class, 'excel'])->name('excel');
Route::post('/import', [ExcelController::class, 'import'])->name('import');
Route::get('/export/{id}', [ExcelController::class, 'export'])->name('export');
Route::post('/export/{id}', [ExcelController::class, 'export'])->name('export'); // It seems redundant to have both GET and POST for export
Route::get('/exportall', [ExcelController::class, 'exportall'])->name('exportall');
Route::get('/filter-ops', [FillterDate::class, 'filterOps'])->name('filter-ops');