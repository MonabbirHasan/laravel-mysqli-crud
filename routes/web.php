<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rotingController;
use Illuminate\Http\Request;

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
//     return view('add');
// });

Route::get('/', [rotingController::class, 'home']);
Route::get('/view', [rotingController::class, 'view']);
Route::get('/add', [rotingController::class, 'add']);
Route::post('/insert', [rotingController::class, 'insert']);
Route::get('/delete/{id}', [rotingController::class, 'DeleteUser']);
Route::get('update/{id}', [rotingController::class, 'update']);
Route::post('/updatedata/{id}', [rotingController::class, 'updatedata']);
Route::get("/show",function(){
    $session=session()->all();
    echo "<pre>";
    print_r($session);
    echo "</pre>";

});
Route::get('/set', function (Request $request) {
    $request->session()->put('name','monabbir');
    $request->session()->put('id','20');
    $request->session()->flash("status",'success');
});
Route::get('/trash',function(Request $request){
    session()->forget('name');
    session()->forget('id');
    return redirect("/");
});