<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;


Route::get('/', [AuthController::class, 'showDashboard'])->name('dashboard');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/home', [AuthController::class, 'showHome'])->middleware('auth')->name('home');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/profile', [ProfileController::class, 'show'])->name('profile');


Route::get('/profil', [ProfileController::class, 'show'])->name('profile');

use App\Http\Controllers\BooksController;
Route::resource('books', BooksController::class);

use App\Http\Controllers\BorrowingsController;
Route::post('/books/{book}/borrow', [BorrowingsController::class, 'borrow'])->name('books.borrow');
Route::post('/books/{book}/return', [BorrowingsController::class, 'returnBook'])->name('books.return');
Route::get('/borrowings/{user}', [BorrowingsController::class, 'listBorrowedBooks'])->name('borrowings.index');
