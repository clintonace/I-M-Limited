
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BroadcastController;
use App\Http\Controllers\SiteBuilderController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('admin')->group(function () {



    Route::get('/activate-user/{info?}', [AdminController::class, 'activateUser'])->name('admin.activate.user');
    Route::get('/deactivate-user/{info?}', [AdminController::class, 'deactivateUser'])->name('admin.deactivate.user');

    Route::get('/all-candidates', [AdminController::class, 'allCandidates'])->name('admin.all.candidates');
    Route::get('/single-candidate/{email}', [AdminController::class, 'singleCandidate'])->name('admin.single.candidate');

    Route::get('/all-requests', [AdminController::class, 'allRequest'])->name('admin.all.requests');
    Route::get('/single-request/{request_id}', [AdminController::class, 'singleRequest'])->name('admin.single.request');
    Route::get('/respond-to-request/{req}', [AdminController::class, 'respondRequest'])->name('admin.respond.request');


    Route::get('/all-companies', [AdminController::class, 'allCompanies'])->name('admin.all.companies');
    Route::post('/edit-company/{company?}', [AdminController::class, 'editCompany'])->name('admin.edit.company');
    Route::get('/edit-company-view/{company?}', [AdminController::class, 'editCompanyView'])->name('admin.edit.company.view');
    Route::get('/company-activate/{company?}', [AdminController::class, 'activateCompany'])->name('admin.activate.company');
    Route::get('/company-deactivate/{company?}', [AdminController::class, 'deactivateCompany'])->name('admin.deactivate.company');
    // Route::get('/single-request', [AdminController::class, 'singleRequest'])->name('admin.single.request');


    Route::get('/book-event', [AdminController::class, 'bookEvent'])->name('admin.book.event');
    Route::post('/book', [AdminController::class, 'book'])->name('admin.book');
    Route::get('/all-events', [AdminController::class, 'allEvents'])->name('admin.all.events');
    Route::post('/cancel-event/{booking}', [AdminController::class, 'cancelEvent'])->name('admin.cancel.event');

    Route::get('/remake-event/{booking}', [AdminController::class, 'remakeEvent'])->name('admin.remake.event');
    Route::post('/update-event/{booking}', [AdminController::class, 'updateEvent'])->name('admin.update.book');


    Route::get('/all-users', [AdminController::class, 'allUsers'])->name('admin.all.users');
    Route::get('/delete-user/{user?}', [AdminController::class, 'deleteUser'])->name('admin.delete.user');


    Route::prefix('site-builder')->middleware('admin')->group(function () {

     Route::get('/build-testimonies-view', [SiteBuilderController::class, 'testimoniesView'])->name('admin.testimonies.view');
     Route::post('/build-testimonies', [SiteBuilderController::class, 'storeTestimony'])->name('admin.testimonies');

    });


    Route::prefix('tools')->middleware('admin')->group(function () {

     Route::get('/dept-tool-view', [ToolController::class, 'deptView'])->name('admin.dept.view');
     Route::get('/skill-tool-view', [ToolController::class, 'skillView'])->name('admin.skill.view');
     Route::get('/hobby-tool-view', [ToolController::class, 'hobbyView'])->name('admin.hobby.view');

     Route::post('/dept-create', [ToolController::class, 'deptCreate'])->name('admin.dept.create');
     Route::post('/skill-create', [ToolController::class, 'skillCreate'])->name('admin.skill.create');
     Route::post('/hobby-create', [ToolController::class, 'hobbyCreate'])->name('admin.hobby.create');

     Route::post('/dept-edit', [ToolController::class, 'deptEdit'])->name('admin.dept.edit');
     Route::post('/skill-edit', [ToolController::class, 'skillEdit'])->name('admin.skill.edit');
     Route::post('/hobby-edit', [ToolController::class, 'hobbyEdit'])->name('admin.hobby.edit');
    });

    Route::prefix('broadcast')->middleware('admin')->group(function () {

      Route::post('/broadcast-create', [BroadcastController::class, 'broadcastCreate'])->name('admin.broadcast');

      Route::get('/prompt-view', [BroadcastController::class, 'promptView'])->name('admin.prompt.view');
      Route::post('/prompt-create', [BroadcastController::class, 'promptCreate'])->name('admin.prompt');

    });

});

