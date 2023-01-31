<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

use Barryvdh\DomPDF\Facade\Pdf;

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
Route::get('/viewMember/{id}', [MemberController::class, 'show'])->name('functions.showMember');
Route::get('/createMember', [MemberController::class, 'create'])->name('functions.createMember');
Route::post('/addNewMember', [MemberController::class, 'store'])->name('addNewMember');
Route::get('/editMember/{id}', [MemberController::class, 'edit'])->name('functions.editMember');
Route::post('/update/{id}', [MemberController::class, 'update'])->name('update');
Route::post('/destroy/{id}', [MemberController::class, 'destroy'])->name('destroy');

//generate odf
Route::get('/generate-pdf', function() {
    $members = App\Models\Member::all();
    $trainers = App\Models\Trainer::all();
    $data = [
        'members' => $members,
        'trainers' => $trainers,
    ];

    $pdf = PDF::loadView('memberlist', $data);

    return $pdf->stream('memberlist.pdf');

})->name('generate-pdf');
