<?php

use App\Http\Controllers\AiProject\AiController;
use App\Http\Controllers\AiProjectController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\OnboardingController;
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

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('web/')->group(function () {
    Route::get('/contact-us', [OnboardingController::class, 'contact_us'])->name('contact.us');
    Route::get('/about-us', [OnboardingController::class, 'about_us'])->name('about.us');
    Route::get('/candidates-list', [OnboardingController::class, 'candidates_list'])->name('candidates.list');
    Route::get('/employer-list', [OnboardingController::class, 'employer_list'])->name('employer.list');
    Route::get('/job-list', [OnboardingController::class, 'job_list'])->name('job.list');
    Route::get('/port', [OnboardingController::class, 'portfolio'])->name('portfolio');
    Route::get('/terms', [OnboardingController::class, 'terms'])->name('terms');
    Route::get('/privacy', [OnboardingController::class, 'privacy'])->name('privacy');
    Route::get('/works', [OnboardingController::class, 'works'])->name('works');
    Route::get('/disclaimer', [OnboardingController::class, 'disclaimer'])->name('disclaimer');

    Route::get('/sectors-list', [OnboardingController::class, 'sectors_list'])->name('sectors.list');

    Route::get('/search-candidate', [OnboardingController::class, 'candidateSearch'])->name('onboarding.search.candidates');
    Route::get('/search-company', [OnboardingController::class, 'companySearch'])->name('onboarding.search.company');

    Route::get('/testimonies', [OnboardingController::class, 'testimony'])->name('testimony');

    Route::get('/portfolio', [OnboardingController::class, 'portfolio_colors'])->name('portfolio.colors');


    Route::get('/for-talent', [OnboardingController::class, 'for_talent'])->name('for.talent');
    Route::get('/for-company', [OnboardingController::class, 'for_company'])->name('for.company');


});


Route::prefix('candidate-dash')->middleware('candidate')->group(function () {

    Route::get('/update-profile-view', [DashController::class, 'profileView'])->name('candidate.profile.view');
    Route::post('/update-profile', [DashController::class, 'profileUpdate'])->name('candidate.profile.update');
    Route::get('/profile-view', [DashController::class, 'profileDisplay'])->name('candidate.profile.display');
    Route::get('/profile-edit-view/{info?}', [DashController::class, 'profileEditView'])->name('candidate.edit.profile.view');


    Route::get('/update-education-view', [DashController::class, 'educationView'])->name('candidate.education.view');
    Route::post('/update-education', [DashController::class, 'educationUpdate'])->name('candidate.education.update');
    Route::post('/edit-education/{ed?}', [DashController::class, 'educationEdit'])->name('candidate.education.edit');

    Route::get('/update-work-view', [DashController::class, 'workView'])->name('candidate.work.view');
    Route::post('/update-work', [DashController::class, 'workUpdate'])->name('candidate.work.update');
    Route::post('/edit-work/{work?}', [DashController::class, 'workEdit'])->name('candidate.work.edit');

    Route::get('/update-media-view', [DashController::class, 'mediaView'])->name('candidate.media.view');
    Route::post('/update-media', [DashController::class, 'mediaUpdate'])->name('candidate.media.update');
    Route::post('/edit-media-upload/{media?}', [DashController::class, 'mediaUploadEdit'])->name('candidate.media-upload.edit');
    Route::post('/edit-vid-upload/{media?}', [DashController::class, 'videoEdit'])->name('candidate.intro-video.edit');
    Route::post('/edit-cv-upload/{media?}', [DashController::class, 'cvEdit'])->name('candidate.cv-upload.edit');
    Route::post('/edit-profile/{media?}', [DashController::class, 'profileEdit'])->name('candidate.profile-info.edit');


    Route::get('/event-view', [DashController::class, 'eventDisplay'])->name('candidate.events.display');

    Route::prefix('email')->group(function () {
        Route::post('confirmation/{id?}/{event?}', function ($id, $event) {
            $message = [
                'message' => 'I will be in attendance.',
                'user' => User::findOrFail($id)->email,
                'event' => Booking::findOrFail($event)->id,
            ];
            Mail::to('clintonace09@gmail.com')->send(new CandidateConfirmationMail($message));
            Alert::success('Success', 'Mail sent');
            return back();
        })->name('candidate.confirm.meeting');

        Route::post('reschedule/{id?}/{event?}', function ($id, $event) {
            $message = [
                'message' => 'Can we reschedule.',
                'user' => User::findOrFail($id)->email,
                'event' => Booking::findOrFail($event)->id,
            ];

            Mail::to('clintonace09@gmail.com')->send(new CandidateRescheduleMail($message));
            Alert::success('Success', 'Mail sent');
            return back();
        })->name('candidate.reschedule.mail');
    });


});


// to send a contact us mail to the admin
Route::post('/contact/mail', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    $toEmail = env('MAIL_FROM_ADDRESS', 'dev.imlimited@gmail.com');

    Mail::send([], [], function ($message) use ($data, $toEmail) {
        $message->to($toEmail)
                ->subject($data['subject'])
                ->html(
                    '<p><strong>Name:</strong> ' . $data['name'] . '</p>' .
                    '<p><strong>Email:</strong> ' . $data['email'] . '</p>' .
                    '<p><strong>Message:</strong> ' . $data['message'] . '</p>'
                );
    });

    Alert::success('Success', 'Your message has been sent successfully!');
    return back();
})->name('contact.mail');



Route::prefix('candidate')->group(function () {

    Route::get('/details/{info_email}', [OnboardingController::class, 'candidateDetails'])->name('onboarding.candidate.details');

});


// Route::prefix('engage')->middleware('company')->group(function () {

//     Route::post('/notify-candidate-admin/{user_id}', [OnboardingController::class, 'candidateEngage'])->name('candidate.engagement.notification');

// });

Route::prefix('engage')->middleware('company')->group(function () {

    Route::post(
        '/notify-candidate-admin/{user_id}',
        [OnboardingController::class, 'candidateEngage']
    )
    ->middleware('throttle:5,1')
    ->name('candidate.engagement.notification');

});

Route::prefix('company')->middleware('company')->group(function () {

    Route::get('profile-view', [CompanyController::class, 'profileView'])->name('company.profile.view');
    Route::post('profile-update', [CompanyController::class, 'profileUpdate'])->name('company.profile.update');
    Route::get('profile', [CompanyController::class, 'profile'])->name('company.profile.display');


    Route::get('events-display', [CompanyController::class, 'eventsDisplay'])->name('company.events.display');
    Route::get('requests-display', [CompanyController::class, 'requestsDisplay'])->name('company.requests.display');

    Route::get('talents-display/{query?}', [CompanyController::class, 'talentsDisplay'])->name('company.talents.display');
    Route::get('suggested-talents-display/{query?}', [CompanyController::class, 'suggestedTalentDisplay'])->name('company.suggested.talents.display');

    Route::get('create-opening-view', [CompanyController::class, 'createOpeningView'])->name('company.create.opening.view');
    Route::get('edit-opening-view/{id?}', [CompanyController::class, 'editOpeningView'])->name('company.edit.opening.view');

    Route::get('opening-display/{query?}', [CompanyController::class, 'openingDisplay'])->name('company.openings.display');

    Route::post('create-opening', [CompanyController::class, 'createOpening'])->name('company.create.opening');
    Route::post('edit-opening/{id?}', [CompanyController::class, 'editOpening'])->name('company.edit.opening');



});


// ussed as test for mistech site


Route::get('test-eureka', [CompanyController::class, 'testEureka'])->name('test.eureka');

Route::view('test-ai', 'test-ai')->name('test.ai');

// Mail::raw('Testing email functionality for the email', function ($message) {
//     $message->to('clintonace09@gmail.com')
//             ->subject('Test Email');
// });





require __DIR__.'/aiproject.php';

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
