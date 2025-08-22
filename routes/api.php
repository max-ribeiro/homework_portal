<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use App\Models\Section;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return [];
});

Route::group([
    'prefix' => 'v1'
], function() {
    //User (teacher, coordinator)
    Route::apiResource('users', UserController::class);
    //Homework related
    Route::apiResource('works', WorkController::class);
    Route::apiResource('files', FileController::class);
    //Class related
    Route::apiResource('classes', SchoolClassController::class);
    Route::apiResource('grades', GradeController::class);
    Route::apiResource('sections', SectionController::class);
    Route::apiResource('subjects', SubjectController::class);
});