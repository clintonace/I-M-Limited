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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('web/')->group(function () {
    Route::get('/contact', [OnboardingController::class, 'contact'])->name('new.contact');
    


});