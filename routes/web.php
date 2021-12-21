<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LandingPageSettingController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\ServiceController as ServiceDashboard;
use App\Http\Controllers\Backend\PostController as PostDashboard;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PageController as PageDashboard;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\ImageController;
use App\Http\Controllers\MailController;
use App\Models\Homepage;

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

Route::get('/', function () {
    return view('frontend.index', [
        'data' => Homepage::find(1)
    ]);
});
Route::post('/', [MailController::class, 'contact']);
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard', [
            'title' => 'Dashboard'
        ]);
    })
        ->name('dashboard');
    Route::get('/landing-page', [LandingPageSettingController::class, 'index'])
        ->name('landing-setting');
    Route::put('/landing-page/{homepage}', [LandingPageSettingController::class, 'update']);
    Route::resource('/teams', TeamController::class)->except('show');
    Route::resource('/services', ServiceDashboard::class)->except('show');
    Route::resource('/posts', PostDashboard::class)->except('show');
    Route::resource('/categories', CategoryController::class)->except('show');
    Route::resource('/pages', PageDashboard::class)->except('show');
    Route::resource('/users', UserController::class)->except('show');
    Route::get('/website-settings', [SettingController::class, 'index']);
    Route::get('/profile', [UserController::class, 'profile']);
    Route::post('/image-upload', [ImageController::class, 'upload']);
});

require __DIR__ . '/auth.php';
