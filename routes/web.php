<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;


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

Route::get('/', [MemberController::class, 'index'])->name('index');
Route::get('/createMember', [MemberController::class, 'create'])->name('functions.createMember');
Route::post('/addNewMember', [MemberController::class, 'store'])->name('addNewMember');
Route::get('/editMember/{id}', [MemberController::class, 'edit'])->name('functions.editMember');
Route::post('/update/{id}', [MemberController::class, 'update'])->name('update');
Route::post('/destroy/{id}', [MemberController::class, 'destroy'])->name('destroy');
