<?php

use App\Http\Controllers\Ai\AiConverterController;
use App\Http\Controllers\AiProject\AiController;
use App\Http\Controllers\AiProjectController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;






Route::middleware('tool')->group(function () {
// Route::middleware('')->group(function () {

    Route::get('/ai-converter', [AiConverterController::class, 'aiProject'])->name('ai-project');
    Route::get('/ai-converter/work-area/{id?}', [AiConverterController::class, 'aiWorkArea'])->name('ai-workarea');
    Route::post('/ai-converter/upload-file', [AiConverterController::class, 'aiUploadFile'])->name('ai.upload.file');
    Route::get('/download/{file?}', [AiConverterController::class, 'downloadFile'])->name('download.file');

});

Route::get('/ai-login', [AiConverterController::class, 'aiLogin'])->name('ai-login');
Route::post('/ai-login-action', [AiConverterController::class, 'aiLoginAction'])->name('ai-login-action');
