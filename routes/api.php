<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeveloppementWebController;
use App\Http\Controllers\DesignGraphiqueController;
use App\Http\Controllers\DesignWebController;
use App\Http\Controllers\MCVideoController;

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

Route::post('/registerdgpedagogique',[UserController::class, 'register']);
Route::post('/adddevweb', [DeveloppementWebController::class, 'addDeveloppeurWeb']);
Route::post('/adddesg', [DesignGraphiqueController::class, 'addDesignerGraphique']);
Route::post('/adddesw', [DesignWebController::class, 'addDesignerWeb']);
Route::post('/addmont', [MCVideoController::class, 'addMonteurCadreurVideo']);
Route::get('/listdevweb', [DeveloppementWebController::class, 'listDevWebMe']);
Route::get('/listdesg', [DesignGraphiqueController::class, 'listDesGMe']);
Route::get('/listdesw', [DesignWebController::class, 'listDesWebMe']);
Route::get('/listmont', [MCVideoController::class, 'listMontMe']);
Route::delete('/deletedev/{id}', [DeveloppementWebController::class, 'deleteDev']);
Route::delete('/deletedg/{id}', [DesignGraphiqueController::class, 'deleteDg']);
Route::delete('/deletedw/{id}', [DesignWebController::class, 'deleteDw']);
Route::delete('/deletemv/{id}', [MCVideoController::class, 'deleteMv']);

// Route::put('/updatedev/{id}', [DeveloppementWebController::class, 'updateDev']);
// Route::put('/updatedg/{id}', [DesignGraphiqueController::class, 'updDg']);
// Route::put('/updatedw/{id}', [DesignWebController::class, 'updateDw']);
// Route::put('/updatemv/{id}', [MCVideoController::class, 'updMv']);
