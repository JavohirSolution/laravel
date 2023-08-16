<?php

namespace App\Http\Controllers;
use App\User;
use App\Gallery;
use App\Fayl;
use App\Student;
use App\Message;
use Illuminate\Support\Facades\Hash;


use App\Imports\UsersImport;
use App\Imports\messesImport;
use App\Imports\MessagesImport;


// Export 
use App\Exports\UsersExport;
use App\Exports\GallerysExport;
use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;
// / Export 


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function egals($id){
        $who = Gallery::where('id', $id)->first();
        return view('/egal',[
            'kim'=>$who  
        ]);
    }
    public function editimage(Request $request,$id){
        Gallery::where('id',$id)->update([
            'name'=>$request->name,
            'who'=>$request->jobs,

        ]);
        return redirect('/gallery');
    }

    public function about()
    {
        $var = User::all();
        return view('/about',[
            'var' =>$var
        ]);
    }

    // public function fayl(){
    //     $fayl = Fayl::all();
    //     return view('fayl',[
    //         'fayl'=>$fayl,
    //         'fayl2'=>$fayl
    //     ]);
    // }

    // public function faylpdf(){
    //     $type = 'fayl';
    //     return view('addteacher', [
    //         'type' => $type
    //     ]);
    // }
    // public function addfayl(Request $request){
    //     $fayl2 = new Fayl();

    //     $image = time().'.'.$request->pdf->getClientOriginalExtension();
    //     $request->pdf->move(public_path('pdf'), $image);
        
    //     $fayl2->image= $image;

    //     $fayl2->save();
    //     return redirect('/fayl');
    // }
    // public function falydel($id){
    //     Fayl::where('id',$id)->delete();
    //     return back();
    // }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function export2() 
    {
        return Excel::download(new StudentsExport, 'students.xlsx');
    }
    public function export3(){
        return Excel::download(new GallerysExport, 'gallerys.xlsx');
    }


    

    public function importExportView()
    {
        $type = 'one';
        return view('import', [
            'type' => $type
        ]);
    }
   
    public function import(Request $request) 
    {
        Excel::import(new UsersImport,request()->file('file'));       
        return back();
    }


    public function import2 (){
        $type = 'lol';
        return view('import', [
            'type' => $type
        ]);
    }
    public function import3(Request $request) 
    {
        Excel::import(new MessagesImport, request()->file('file'));
        return back();
    }

    public function importmess(){
        $type = 'mess';
        return view('import', [
            'type' => $type
        ]);
    }
    public function importmess2(Request $request) 
    {
        // dd($request);
        Excel::import(new messesImport, request()->file('file'));
        return redirect('/student');
    }
}
