<?php

use App\Models\Materi;
use App\Models\Isimateris;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\DiskusiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\DashboardKuisController;
use App\Http\Controllers\DashboardNewsController;
use App\Http\Controllers\DashboardMateriController;
use App\Http\Controllers\DashboardDiskusiController;
use App\Http\Controllers\DashboardWelcomeController;
use App\Http\Controllers\DashboardLandingImageController;
use App\Http\Controllers\DashboardIsiMateriController;
use App\Http\Controllers\DashboardUserResultsController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('general/welcome');
// });



Route::get('/about', function () {
    return view('general/about');
});
Route::get('/',[NewsController::class, 'index']);
Route::get('/article/{news:slug}',[NewsController::class, 'show']);



Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth','admin'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/dashboard/news', DashboardNewsController::class)->middleware('auth','admin');

// Route::get('/dashboard/news/checkSlug,', [DashboardNewsController::class, 'checkSlug'])->middleware('auth','admin');


Route::middleware('auth','admin')->group(function () {
    // Route::view('about', 'about')->name('about');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    //user
    Route::post('/user/addToAdmin/{id}', [App\Http\Controllers\UserController::class, 'addToAdmin'])->name('user.addToAdmin');
    Route::post('/user/addToUser/{id}', [App\Http\Controllers\UserController::class, 'addToUser'])->name('user.addToUser');
    Route::post('/user/deleteUser/{id}', [App\Http\Controllers\UserController::class, 'deleteUser'])->name('user.deleteUser');

    Route::get('/diskusi', [App\Http\Controllers\DiskusiController::class, 'index'])->name('diskusi');
    Route::post('/diskusi', [App\Http\Controllers\DiskusiController::class, 'addKomentar'])->name('addKomentar');


});
