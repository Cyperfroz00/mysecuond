<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(StudentController::class)->group(function(){
    Route::get('/','index');
    Route::get('/add','create');
    Route::post('/add-data','store');
    Route::get('/view','show');
    Route::get('/update/{id}','edit');
    Route::post('/update-data','update');
    Route::delete('/delete','destroy');
});

