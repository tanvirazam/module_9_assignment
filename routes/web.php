<?php
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

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

Route::get("/home", [PortfolioController::class, 'home'])->name('home.name');
Route::get("/about", [PortfolioController::class, 'about'])->name('about.name');
Route::get("/project", [PortfolioController::class, 'project'])->name("project");
Route::get("/contact", [PortfolioController::class, 'contact'])->name("contact");

