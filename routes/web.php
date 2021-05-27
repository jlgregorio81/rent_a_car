<?php

use App\Models\City;
use App\Models\Client;
use App\Models\Telephone;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/teste', function (){
    //..transaction
    $client = new Client();
    $client->name = 'Han Solo';
    $client->city()->associate(City::find(1));
    $tel = new Telephone();    
    $tel->number = '(11)445566';
    
    //..begin the transaction 
    DB::beginTransaction();
    try{
        $client->save();
        $client->telephone()->save($tel);
        DB::commit();
        echo "<h1>Salvou</h1>";
    } catch(Exception $ex){
        DB::rollBack();
        dd($ex);
    } 

});