<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OwnerController;
use App\Models\Admin;
use GuzzleHttp\Middleware;
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

Route::get("/", [AuthController::class, "index"])->name("home");
Route::get("/logout", [AuthController::class, "logout"])->name("auth.logout");
// Route::get("/test", [AuthController::class, "test"])->name("test.guard");

Route::middleware(['preventLoggedInUsers'])->group(function () {
    Route::get("/login", [AuthController::class, "loginview"])->name("login");
    Route::post("/auth.login", [AuthController::class, "login"])->name("auth.login");
    Route::get("/register", [AuthController::class, "registerview"])->name("register");
    Route::post("/auth.register", [AuthController::class, "register"])->name("auth.register"); 
    
    // admin auth route-----------
    Route::get("/admin.login", [AdminController::class, "loginview"])->name("admin.login");
    Route::post("/auth.admin.login", [AdminController::class, "login"])->name("auth.admin.login");
    Route::get("/admin.register", [AdminController::class, "registerview"])->name("admin.register");
    Route::post("/auth.admin.register", [AdminController::class, "register"])->name("auth.admin.register");
});

Route::middleware('checkUserRole:user,owner')->group(function () {
    // Routes accessible to users and owners
});

// routes/web.php

Route::middleware('auth:user')->group(function () {
   
});

Route::middleware('auth:owner')->group(function () {
    
    Route::resource('owners', OwnerController::class);
    Route::resource('cars', CarController::class);
    Route::get('owner.addcar', [CarController::class,'addcar'])->name('owner.addcar');
    // Route::get('edit.show/{car}', [CarController::class,'editcar'])->name('edit.show');
    Route::get('customer.search', [CarController::class, 'searchcars'])->name('customer.search');



});

Route::middleware('auth:admin')->group(function () {

    Route::get('admin.users', [AdminController::class,'index'])->name('admin.users');

});

