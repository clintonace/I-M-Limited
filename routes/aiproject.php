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
    Route::get('/ai-dashboard', [AiConverterController::class, 'aiDashboard'])->name('ai.dashboard');


    Route::post('/ai-delete-converted', [AiConverterController::class, 'aiDeleteConverted'])->name('ai.delete.converted');
    Route::get('/ai-see-uploads/{path?}', [AiConverterController::class, 'aiSeeUploads'])->name('ai.see.uploads');
    Route::get('/ai-see-converted/{path?}', [AiConverterController::class, 'aiSeeConverted'])->name('ai.see.converted');

    Route::get('/download-all-txt/{batch?}', [AiConverterController::class, 'downloadTxt'])->name('download.txt');
    Route::get('/download-all-pdf/{batch?}', [AiConverterController::class, 'downloadPdf'])->name('download.pdf');

    
});

Route::get('/ai-login', [AiConverterController::class, 'aiLogin'])->name('ai-login');
Route::post('/ai-login-action', [AiConverterController::class, 'aiLoginAction'])->name('ai-login-action');
Route::post('/ai-logout-action', [AiConverterController::class, 'aiLogout'])->name('ai-logout-action');

