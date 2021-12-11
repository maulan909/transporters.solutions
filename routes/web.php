<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LandingPageSettingController;
use App\Http\Controllers\Backend\ServiceController as ServiceDashboard;
use App\Http\Controllers\Backend\PostController as PostDashboard;
use App\Http\Controllers\Backend\PageController as PageDashboard;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\MailController;
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
    return view('frontend.index');
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
    Route::resource('/services', ServiceDashboard::class)->except('show');
    Route::resource('/posts', PostDashboard::class)->except('show');
    Route::resource('/pages', PageDashboard::class)->except('show');
    Route::resource('/users', UserController::class)->except('show');
});

require __DIR__ . '/auth.php';
