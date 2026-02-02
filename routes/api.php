<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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


// Route::post('/ai-test', function (Request $request) {
//     $res = Http::withToken(config('services.openai.key'))
//         ->post('https://api.openai.com/v1/chat/completions', [
//             'model' => 'gpt-4o-mini',
//             'messages' => [
//                 ['role' => 'user', 'content' => $request->message]
//             ],
//         ]);

//     return $res->json();
// });



// Route::post('/gemini-test', function (Request $request) {

//     $response = Http::post(
//         'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.0-pro:generateContent?key=' . env('GEMINI_API_KEY'),
//         [
//             'contents' => [
//                 [
//                     'parts' => [
//                         ['text' => $request->message]
//                     ]
//                 ]
//             ]
//         ]
//     );

//     return $response->json();
// });


Route::post('/gemini-test', function (Request $request) {

    $response = Http::post(
        'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=' . env('GEMINI_API_KEY'),
        [
            'contents' => [
                [
                    'role' => 'user',
                    'parts' => [
                        ['text' => $request->message]
                    ]
                ]
            ]
        ]
    );

    return $response->json();
});
