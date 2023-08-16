<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function video(Request $request){
        // dd($request);
        $ved = Video::all();
        $count = 1; 
        return view('video',[
            'ved'=>$ved,
            'count'=>$count
        ]);
    }
    public function delvideo(Request $request,$id){
        Video::where('id',$id)->delete();
        return redirect('video');
    }

    public function addvideo(Request $request){
        $type = 'addvideo';
        return view('addteacher',[
            'type' =>$type
        ]);
    }
    public function addvideos(Request $request){
        $new = new Video();
        $new->name = $_POST['name'];
        $new->file = $_POST['file'];

        $new->save();
        return redirect('video');
    }
    public function editvideo(Request $request,$id){
       Video::where('id',$id)->update([
            'name'=>$request->name,
            'file'=>$request->file
       ]);
       return redirect('/video');
    }

}
