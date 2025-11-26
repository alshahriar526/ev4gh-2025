<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GBMemberController;

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

Route::get('/', function () {
    return view('front.page.index');
});

Route::get('/about', function () {
    return view('front.page.about');
})->name("about");


// Our funders and partners

Route::get('/our-funders-and-partners', function () {
    return view('front.page.our-funders-and-partners');
})->name("our-funders-and-partners");

Route::get('/call-for-applications-2026', function () {
    return view('front.page.call-for-applications-2026');
})->name("call-for-applications-2026");





Route::prefix('gb-members')->group(function () {
    Route::get('/', [GBMemberController::class, 'index'])->name('gb_members.index');
    Route::get('/create', [GBMemberController::class, 'create'])->name('gb_members.create');
    Route::post('/import', [GBMemberController::class, 'importCsv'])->name('gb_members.import');
    Route::get('/{id}', [GBMemberController::class, 'show'])->name('gb_members.show');
    Route::delete('/{id}', [GBMemberController::class, 'destroy'])->name('gb_members.destroy');

});
