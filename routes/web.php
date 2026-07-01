<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/', fn() => redirect()->route('login'));

Route::middleware(['auth','user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('complaints', \App\Http\Controllers\User\ComplaintController::class)->only(['index','create','store','show']);
    Route::resource('suggestions', \App\Http\Controllers\User\SuggestionController::class)->only(['index','create','store']);
    Route::get('/notifications', [\App\Http\Controllers\User\NotificationController::class, 'index'])->name('notifications.index');
    Route::post('/notifications/{id}/read', [\App\Http\Controllers\User\NotificationController::class, 'markRead'])->name('notifications.read');
    Route::get('/profile', [\App\Http\Controllers\User\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [\App\Http\Controllers\User\ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/password', [\App\Http\Controllers\User\ProfileController::class, 'updatePassword'])->name('profile.password');
});

Route::middleware(['auth','admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/complaints', [\App\Http\Controllers\Admin\ComplaintController::class, 'index'])->name('complaints.index');
    Route::get('/complaints/{complaint}', [\App\Http\Controllers\Admin\ComplaintController::class, 'show'])->name('complaints.show');
    Route::put('/complaints/{complaint}/status', [\App\Http\Controllers\Admin\ComplaintController::class, 'updateStatus'])->name('complaints.updateStatus');
    Route::get('/suggestions', [\App\Http\Controllers\Admin\SuggestionController::class, 'index'])->name('suggestions.index');
    Route::get('/suggestions/{suggestion}', [\App\Http\Controllers\Admin\SuggestionController::class, 'show'])->name('suggestions.show');
    Route::put('/suggestions/{suggestion}/status', [\App\Http\Controllers\Admin\SuggestionController::class, 'updateStatus'])->name('suggestions.updateStatus');
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->except(['show']);
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class)->only(['index','store','update','destroy']);
});