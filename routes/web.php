<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\UserController;
use App\Models\Pricing;
use Illuminate\Support\Facades\Route;

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

// Routes  Front 
Route::get('/',[HomeController::class, 'indexFront'])->name('home');
Route::get('/about',[AboutController::class, 'indexFront'])->name('about-us');
Route::get('/classes', [ClasseController::class, 'indexFront'])->name('classes');
Route::get('/gallery', [GalleryController::class, 'indexFront'])->name('gallery');
Route::get('/contact',[ContactController::class, 'indexFront'])->name('contact');
// page de payment
Route::get('/payment/{id}', [PricingController::class, 'payment'])->name('payment');
Route::get('/payed/{id}', [PricingController::class, 'payed'])->name('payed');
// email
Route::resource('/mail', MailController::class);
// Routes Backoffice 
Route::get('/backoffice', [BackofficeController::class, 'index'])->middleware(['auth'])->name('backoffice');
Route::resource('/backoffice/title', TitleController::class);
Route::resource('/backoffice/header', HeaderController::class);
Route::resource('/backoffice/background', BackgroundController::class);
Route::resource('/backoffice/about', AboutController::class);
Route::resource('/backoffice/classe', ClasseController::class);
Route::resource('/backoffice/shedule', ScheduleController::class);
Route::resource('/backoffice/trainer', TrainerController::class);
Route::resource('/backoffice/gallery', GalleryController::class);
Route::resource('/backoffice/event', EventController::class);
Route::resource('/backoffice/pricing', PricingController::class);
Route::resource('/backoffice/client', ClientController::class);
Route::resource('/backoffice/newsletter', NewsletterController::class);
Route::resource('/backoffice/footer', FooterController::class);
Route::resource('/backoffice/user', UserController::class);
Route::resource('/backoffice/contact', ContactController::class);
Route::resource('/backoffice/tweet', TweetController::class);
// Email

Route::get('/send-email', [MailController::class, 'sendMail'])->name('sendEmail');
Route::post('/send-news',[NewsletterController::class, 'sendNews'])->name('sendNews');
Route::get('/dashboard', function () {
    return view('backoffice');
})->middleware(['auth'])->name('dashboard');
Route::post('/inscription/{classe}/{user}',[ClasseController::class, 'inscription'])->name('inscription');
Route::post('/changeWeek',[HomeController::class, 'changeWeek'])->name('changeWeek');
Route::post('/changeWeek2',[HomeController::class, 'changeWeek2'])->name('changeWeek2');
Route::post('/changeWeek3',[HomeController::class, 'changeWeek3'])->name('changeWeek3');



require __DIR__.'/auth.php';
