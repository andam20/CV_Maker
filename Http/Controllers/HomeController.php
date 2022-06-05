<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    // public function edit ($id){
    //     $cv=User::find($id);
    //     return view('edit',compact('cv'));
    // }
    
    // public  function update (Request $request,$id){
    //     $data=$request->validated();   
    //     $cv=User::where('id',$id)->
    //         update([
    //             'name'=>$data['name'],
    //         ]);
    //         return redirect('/home')->with('status',"ur resume updated");
    //     }

}
