<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FactController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PortfolioController;
// use App\Http\Controllers\Admin\Profile_imgController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\Social_networkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
});

Route::prefix('admin/')->name('admin.')->middleware('auth')->group(function(){
    Route::get('dashboard', function(){
        return view('admin.layouts.dashboard');
    })->name('dashboard');

    Route::resources(
        [
        'abouts' => AboutController::class,
        'contacts' => ContactController::class,
        'facts' => FactController::class,
        'forms' => FormController::class,
        'home' => HomeController::class,
        'portfolios' => PortfolioController::class,
        // 'profile' => Profile_imgController::class,
        'services' => ServiceController::class,
        'skills' => SkillController::class,
        'social_networks' => Social_networkController::class,
        
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

