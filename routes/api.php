<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TeussController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\PonderationController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get("/niveaux/{id}", [NiveauController::class, "getClasseById"]);

// Route::resource("/niveaux", NiveauController::class);

// Route::apiResource("eleves", EleveController::class)->only(['store']);

// Route::put('/eleves/sortie', [EleveController::class, 'exclure']);

// Route::get('/classes/{classeId}/eleves', [ClasseController::class, 'getElevesByClasse']);

// Route::get('classes/{classeId}/coef', [PonderationController::class, 'show']);

// Route::post('classes/{classeId}/coef', [PonderationController::class, 'store']);

// Route::apiResource("/disciplines", DisciplineController::class);

// Route::apiResource("/evaluations", EvaluationController::class);

// Route::post('classes/{classeId}/discipline/{discId}/evaluation/{evaId}', [ClasseController::class, 'addNotes']);


// Route::post("evenements/{event}/participations", [EventController::class, "associateEventWithClass"]);
// Route::apiResource("evenements", EventController::class)->only(['index', 'store']);


// Route::get("classes/{teuss}/notes", [ClasseController::class, "getNote"]);

// Route::get("classes/{classe}/disciplines/{disciplines}/notes", [EleveController::class, 'lookNote']);




// Route::get("classes/{classes}/disciplines/{disciplines}/notes", [EleveController::class, "afficheNote"]);










Route::get("classes/{classes}")




