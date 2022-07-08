<?php

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\TicketController;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/personas',[PersonaController::class, 'index']);
Route::get('/persona/{id}', [PersonaController::class, 'show']);

Route::get('/tickets',[TicketController::class, 'index']);
Route::get('/ticket/{id}', [TicketController::class, 'show']);


