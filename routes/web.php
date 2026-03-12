<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GBMemberController;
use App\Http\Controllers\NewsEventController;

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
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('front.page.index');
// });

 Route::get('/', [NewsEventController::class, 'frontIndex'])->name('index');



Route::get('/about', function () {
    return view('front.page.about');
})->name("about");


Route::get('/testimonial', function () {
    return view('front.page.testimonial');
})->name("testimonial");


Route::get('/newsletter', function () {
    return view('front.page.newsletter');
})->name("newsletter");

// Our funders and partners

Route::get('/our-funders-and-partners', function () {
    return view('front.page.our-funders-and-partners');
})->name("our-funders-and-partners");

Route::get('/call-for-applications-2026', function () {
    return view('front.page.call-for-applications-2026');
})->name("call-for-applications-2026");





Route::prefix('gb-members')->group(function () {
    Route::get('/', [GBMemberController::class, 'index'])->name('gb_members.index');
    // Route::get('/create', [GBMemberController::class, 'create'])->name('gb_members.create');
    // Route::post('/import', [GBMemberController::class, 'importCsv'])->name('gb_members.import');
    // Route::get('/{id}', [GBMemberController::class, 'show'])->name('gb_members.show');
    // Route::delete('/{id}', [GBMemberController::class, 'destroy'])->name('gb_members.destroy');
});

// Admin
Route::resource('news-events', NewsEventController::class);



// Past Venture
Route::get('/past-venture/2022', function () {
    return view('front.page.past-venture.past-venture-2022');
})->name("past-venture.2022");

Route::get('/past-venture/2018', function () {
    return view('front.page.past-venture.past-venture-2018');
})->name("past-venture.2018");

Route::get('/past-venture/2016', function () {
    return view('front.page.past-venture.past-venture-2016');
})->name("past-venture.2016");

Route::get('/past-venture/2014', function () {
    return view('front.page.past-venture.past-venture-2014');
})->name("past-venture.2014");

Route::get('/past-venture/2013', function () {
    return view('front.page.past-venture.past-venture-2013');
})->name("past-venture.2013");

Route::get('/past-venture/2012', function () {
    return view('front.page.past-venture.past-venture-2012');
})->name("past-venture.2012");

Route::get('/past-venture/2010', function () {
    return view('front.page.past-venture.past-venture-2010');
})->name("past-venture.2010");

