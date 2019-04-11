<?php
use App\Arisan;
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

Route::get('/', function(){
    return redirect()->route('arisan.index');
});
Route::resource('arisan', 'AnggotaController');
Route::post('arisan/{id}/bayar', 'AnggotaController@lunas')->name('arisan.bayar');
Route::post('arisan/{id}/kocok', 'AnggotaController@menang')->name('arisan.kocok');
