<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BotManChatController;
use App\Http\Controllers\FileUploadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::match(['get', 'post'], '/botman-chat', 'BotManChatController@invoke');
Route::match(['get', 'post2'], '/botman-chat1', 'BotManChatController@invoke12');
Route::match(['get', 'post3'], '/botman-chat1', 'BotManChatController@invoke124');
Route::match(['get', 'post4'], '/botman-chat1', 'BotManChatController@invoke125');


Route::get('upload-ui', [FileUploadController::class, 'dropzoneUi' ]);
Route::post('file-upload', [FileUploadController::class, 'dropzoneFileUpload' ])->name('dropzoneFileUpload');