<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class FilterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function filter(Request $request)
    {
        dd($request);

        // if ($request->filter == 1) {
        //   $type = 1;
        //   $use = Gallery::where('num',$_POST['filter'])->get();

        // }
        // else if ($request->filter == 2) {
        //     $type = 2;
        //     $use = Gallery::where('num',$_POST['filter'])->get();
        // }
        // else if ($request->filter == 3) {
        //     $type = 3;
        //     $use = Gallery::where('num',$_POST['filter'])->get();
        // }
        // else if ($request->filter == 'all') {
        //     $type = 3;
        //     $use = Gallery::where('num',$_POST['filter'])->get();
        // }
        // return view('/gallery',[
        //     'type'=>$type,
        //     'tea'=>$use,
        // ]);



    }
}
