<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('test')->group(function () {
    Route::get('', function () {
        return 'hola mundo';
    });
});

Route::prefix('employees')->controller(EmployeeController::class)->group(function () {
    Route::get('', 'getAll');
    Route::get('/{employee}', 'show');
    Route::post('', 'store');
    Route::put('/{employee}', 'update');
    Route::put('/delete/{employee}', 'destroy');
    Route::post('/bymonth', 'getByMonth');
});

Route::prefix('menu')->controller(MenuController::class)->group(function () {
    Route::get('', 'getAll');
});
