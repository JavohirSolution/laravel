<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Gallery;
use App\Message;
use Illuminate\Support\Facades\Hash;


class UsefulController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function newboy(){
        $user = User::all();

        $wet2 = Message::all();

        $kur = Message::count();
        $kim =Gallery::count();
        $tuw = $kim + $kur;

        return view('newboy',[
            'user' => $user,


            'wet'=>$wet2,

            'kur'=>$kur,
            'ilm'=>$tuw,
            'who' => $kim,

        ]);
    }

    public function Userprofile(Request $request,$id){
          User::where('id',$id)->update([

            'name'=>$request->name,
            'company'=>$request->company,
            'job'=>$request->job,
            'country'=>$request->country,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password' => Hash::make($request->password)

           
           
        ]); 
          return redirect('/newboy');
            

        
    } 


}
