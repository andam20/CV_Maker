<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
  
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/edit/{id}', function  ($id){
//     $cv=User::find($id);
//     return view('edit',compact('cv'));
// });

// Route::put('/update_data/{id}',function (RegisterController $request,$id){
 
//     $cv=User::where('id',$id)->
//         update([
//             'name'=>$data['name'],
//         ]);
//         $data=$request->validator($cv);   
//         return redirect('/home')->with('status',"ur resume updated");
//     });

