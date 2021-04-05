<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\WebuserController;
use App\Http\Controllers\UploadFileController;
use App\Models\Webuser;

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


Route::get('/', function () {
    return view('main');
})->name('main');



/*Route::get('user/add', function(){
    DB::table('webuser')->insert([
        'name' => 'Emin',
        'surname' => 'Yilmaz',
        'email' => 'emin@gmail.com',
        'image' => 'favicon.ico'
    ]);
});*/

/*Route::get('webuser', function(){
    $webuser = Webuser::find(1);
    return $webuser->name;
    
});*/

Route::get('users', [WebuserController::class, 'index']);

Route::post('/', [WebuserController::class, 'store'])->name('add-user');
Route::get('/uploadfile', 'UploadFileController@index');
Route::post('/uploadfile', 'UploadFileController@showUploadFile');
