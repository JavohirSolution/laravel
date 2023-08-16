<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Newboy;
use App\Gallery;

use App\Exports\UsersExport;
use App\Exports\GallerysExport;
use App\Exports\StudentsExport;


use App\Imports\UsersImport;
use App\Imports\MessagesImport;
use App\Imports\messesImport;

use Maatwebsite\Excel\Facades\Excel;

class XabarController extends Controller
{
    public function xabar(Request $request){
        // dd($request);
        
        $get = new Message();
        $get->name = $_POST['name'];
        $get->email = $_POST['email'];
        $get->subject = $_POST['subject'];
        $get->message = $_POST['message'];

        $get->save();

        return redirect('/');
    }
    public function xaba2r()
    {
        $wet = Message::all();
        $count = 1;
        $count2 = 1;
        $kur = Message::count();
        $kim =Gallery::count();
        $tuw = $kim + $kur;
      


        
        return view('/student',[
            'wet'=>$wet,
            'count'=>$count,
            'count2'=>$count2,
            'kur'=>$kur,
            'ilm'=>$tuw,
            'who' => $kim,


        ]);
    }


    public function editoqil(Request $request,$id){
        Message::where('id',$id)->update([
            'type'=>$request = 1
        ]);
        return redirect('/student');
    }

    public function editoqilmagan(Request $request,$id){
        Message::where('id',$id)->update([
            'type'=>$request = 0
        ]);
        return redirect('/student');
    }

    
    // public function student()
    // {
    //     $kim =Gallery::count();
    //     $kur = Message::count();

    //     $tuw = $kim + $kur;
    //     $count = 1;

    //     return view('/student',[
    //         '' => $new,
    //         '' => $kim,
    //         '' => $tur,
    //         '' => $tuw,
    //         'count'=>$count


    //     ]);
    // }


    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function export3() 
    {
        return Excel::download(new GallerysExport, 'gallerys.xlsx');
    }
    public function export2() 
    {
        return Excel::download(new StudentsExport, 'students.xlsx');
    }

    public function importExportView()
    {
       $type = 'one';
       return view('import',[
        'type'=>$type
       ]);
    }
    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
           
        return redirect('/user');
    }

    public function import2()
    {
       $type = 'lol';
       return view('import',[
        'type'=>$type
       ]);
    }
    public function import3() 
    {
        Excel::import(new MessagesImport,request()->file('file'));
           
        return redirect('/gallery');
    }

    public function importmess()
    {
       $type = 'mess';
       return view('import',[
        'type'=>$type
       ]);
    }
    public function importmess2() 
    {
        Excel::import(new messesImport,request()->file('file'));
           
        return redirect('/student');
    }
   
   

   
}
