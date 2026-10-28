<?php


use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\New\OnboardingController;
use App\Http\Controllers\ProfileController;
use App\Mail\CandidateConfirmationMail;
use App\Mail\CandidateRescheduleMail;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\CustomMailAssistantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/section', 'sect')->name('section');

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::prefix('web/')->group(function () {

    Route::get('/contact', [OnboardingController::class, 'contact'])->name('new.contact');

    Route::get('/book-a-call-page', [OnboardingController::class, 'bookACall'])->name('new.book_a_call');
    Route::post('/book', [OnboardingController::class, 'bookClient'])->name('new.client.book');

    Route::get('/faqs', [OnboardingController::class, 'faqs'])->name('new.faqs');

    Route::get('/services', [OnboardingController::class, 'services'])->name('new.services');

    Route::get('/aboutus', [OnboardingController::class, 'aboutus'])->name('new.aboutus');

    Route::get('/how-it-works', [OnboardingController::class, 'howItWorks'])->name('new.how-it-works');

    Route::post('/edit-free-time/{id?}', [OnboardingController::class,'editFreeTime'])->name('new.edit.freetime');

    Route::post('/send-client-mail', [OnboardingController::class,'sendClientMail'])->name('new.send.client.mail');
    

    



});

Route::put('/admin/free-time/{freetime}', [
    FreeTimeController::class,
    'update'
])->name('admin.update.freetime');

Route::post('/ai/custom-mail/chat', [
    CustomMailAssistantController::class,
    'chat',
])
    ->middleware(['auth', 'throttle:20,1'])
    ->name('ai.custom-mail.chat');