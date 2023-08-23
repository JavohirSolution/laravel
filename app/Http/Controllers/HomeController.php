<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Teacher;
use App\Student;
use App\Pupil;
use App\Javohir;
use App\Newboy;
use App\Gallery;
use App\Message;
use App\Image;
use App\Video;
use App\LoginImage;
use Auth;

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
    public function index(Request $request)
    {
        $kim = Gallery::count();
        $gal = Gallery::all();
        $kur = Message::count();
        $wet = Message::all();
        $var = Video::count();

        $tuw = $kim + $kur;
        return view('home', [

            'gal' => $gal,

            'vedio' => $var,
            'wet' => $wet,
            'who' => $kim,
            'kur' => $kur,
            'ilm' => $tuw
        ]);
    }


    public function filter(Request $request)
    {
        $wet = Message::all();

        $count = 1;
        $kim = Gallery::count();
        $kur = Message::count();

        $tuw = $kim + $kur;
        if ($request->filter == 1) {
            $type = 1;
            $gal = Gallery::where('who', $_POST['filter'])->get();
        } else if ($request->filter == 2) {
            $type = 2;
            $gal = Gallery::where('who', $_POST['filter'])->get();
        } else if ($request->filter == 3) {
            $type = 3;
            $gal = Gallery::where('who', $_POST['filter'])->get();
        } else if ($request->filter == 'all') {
            $type = 'all';
            $gal = Gallery::all();
        }
        return view('/gallery', [
            'type' => $type,
            'wet' => $wet,
            'gal' => $gal,
            'number' => $count,
            'who' => $kim,
            'kur' => $kur,
            'ilm' => $tuw,
            'type' => $type
        ]);
    }





    public function gallery()
    {
        $gal = Gallery::all();
        $wet = Message::all();

        $count = 1;
        $kim = Gallery::count();
        $kur = Message::count();

        $type = 'all';

        $tuw = $kim + $kur;
        return view('gallery', [
            'wet' => $wet,
            'gal' => $gal,
            'number' => $count,
            'who' => $kim,
            'kur' => $kur,
            'ilm' => $tuw,
            'type' => $type
        ]);
    }
    public function LoginImage()
    {
        $log = LoginImage::all();
        return view('LoginImage', [
            'log' => $log
        ]);
    }
    public function Image()
    {
        $ima = Image::all();
        return view('image', [
            'image' => $ima
        ]);
    }

    public function teacher()
    {
        $some = Teacher::all();
        return view('teacher', [
            'some' => $some
        ]);
    }


    public function pupil()
    {
        $bear = Pupil::all();
        return view('pupil', [
            'back' => $bear
        ]);
    }

    public function javohir()
    {
        $javohir = Javohir::all();
        return view('javohir', [
            'behind' => $javohir
        ]);
    }
    public function Newboy()
    {
        $newboy = Newboy::all();


        return view('newboy', [
            'newboy' => $newboy
        ]);
    }
    // public function message() {
    //     $mes = Message::all();
    //     return view('message', [
    //         'me' => $mes
    //     ]);
    // }




    public function salom($id)
    {
        User::where('id', $id)->delete();
        return back();
    }
    public function gallerdel($id)
    {
        Gallery::where('id', $id)->delete();
        return back();
    }
    public function teachdelete($id)
    {
        Teacher::where('id', $id)->delete();
        return back();
    }
    public function studelete($id)
    {
        Student::where('id', $id)->delete();
        return back();
    }
    public function pupdelete($id)
    {
        Pupil::where('id', $id)->delete();
        return back();
    }
    public function javohirdele($id)
    {
        Javohir::where('id', $id)->delete();
        return back();
    }
    public function newDel($id)
    {
        Newboy::where('id', $id)->delete();
        return back();
    }
    public function delLimage($id)
    {
        LoginImage::where('id', $id)->delete();
        return back();
    }
    public function dgal($id)
    {
        Image::where('id', $id)->delete();
        return back();
    }
    public function Deletes($id)
    {
        Message::where('id', $id)->delete();
        return back();
    }










    // add teacherga
    // public function addteacher()
    // {
    //     return view('addteacher');
    // }
    // public function addteachersave(Request $request)
    // {
    //     // dd('keldi');
    //     $teach = new Teacher();
    //     $teach->name = $_POST['name'];
    //     $teach->age = $_POST['age'];
    //     $teach->address = $_POST['address'];

    //     $teach->save();

    //     return redirect('/teacher');

    // .AS1234512345.,


    // }
    public function addteacher()
    {
        $type = 'tech';
        return view('addteacher', [
            'type' => $type
        ]);
    }





    public function addimage()
    {
        $type = 'image';
        return view('addteacher', [
            'type' => $type
        ]);
    }




    public function addgal()
    {
        $type = 'gal';
        return view('/addteacher', [
            'type' => $type
        ]);
    }






    // public function addmes()
    // {
    //     $type = 'mes';
    //     return view('addteacher', [
    //         'type' => $type
    //     ]);
    // }

    // public function read($id) {
    //     Message::where('id', $id)->update([
    //         'rade'=>1
    //     ]);
    //     return redirect('message');
    // }
    public function addteachersave()
    {
        $teacher = new Teacher();
        $teacher->name = $_POST['name'];
        $teacher->age = $_POST['age'];
        $teacher->address = $_POST['address'];

        $teacher->save();
        return redirect('/teacher');
    }


    // gallery controller
    public function addgalsave(Request $request)
    {
        // dd($request);
        $salom = new Gallery();
        $salom->name = $_POST['name'];
        $salom->who = $_POST['job'];

        $images = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('file'), $images);

        $salom->image = $images;


        $salom->save();
        return redirect('/gallery');
    }



    public function addimagesave(Request $request)
    {
        $ima = new Image();
        $ima->name = $_POST['name'];
        $image = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $image);
        $ima->image = $image;

        $ima->save();
        return redirect('/home');
    }



    // add studentga

    public function addstudent()
    {
        return view('addstudent');
    }
    // public function addstudentserve()
    // {
    //     // dd('keldo');
    //     $student = new Student;
    //     $student->name =  $_POST['name'];
    //     $student->email = $_POST['Email'];


    //     $student->save();
    //     return redirect('/');
    // }

    public function addLoginImage()
    {
        $type = 'log';
        return view('addteacher', [
            'type' => $type
        ]);
    }
    public function addImageL0gsave(Request $request)
    {
        $logI = new LoginImage();
        $logI->name = $_POST['name'];

        $image = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $image);
        $logI->image = $image;

        $logI->save();
        return redirect('/LoginImage');
    }














    // add Pupilga

    public function addpupil()
    {
        return  view('addpupil');
    }
    public function addpupilserve()
    {
        // dd('efwef');
        $pupil = new Pupil;
        $pupil->name = $_POST['name'];
        $pupil->email = $_POST['Email'];
        $pupil->password = $_POST['Password'];

        $pupil->save();
        return redirect('/pupil');
    }

    // add javohirga
    public function addjavohir()
    {
        return view('addjavohir');
    }
    public function addjavohirserve()
    {
        // dd('efwef');
        $javohir = new Javohir;
        $javohir->name = $_POST['name'];
        $javohir->age = $_POST['age'];

        $javohir->save();
        return redirect('/javohir');
    }

    public function addnewboy()
    {
        return view('addnewboy');
    }
    public function addnewboyserve()
    {
        // dd('efefreg');
        $newboy = new Newboy();
        $newboy->name = $_POST['name'];
        $newboy->email = $_POST['Email'];

        $newboy->save();
        return redirect('Newboy');
    }





    // edit user
    // public function eus($id) {
    //     $ol = User::where('id', $id)->first();
    //     return view('/', [
    //         'ol' => $ol
    //     ]);
    // }
    // public function editsaveus(Request $request, $id) {
    //     User::where('id', $id)->update([
    //         'name'=>$request->name,
    //         'email'=>$request->Email,
    //         'password' => Hash::make($request->password)
    //     ]);
    //     return redirect('');
    // }
    // stu edit
    public function editahmoq($id)
    {
        $students = Student::where('id', $id)->first();
        return view('editstu', [
            'olim' => $students
        ]);
    }
    public function editsavestu(Request $request, $id)
    {
        Student::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect('');
    }

    public function editkalla($id)
    {
        $pupil = Pupil::where('id', $id)->first();
        return view('editpupil', [
            'pupil' => $pupil
        ]);
    }
    public function editsavepupil(Request $request, $id)
    {
        Pupil::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect('pupil');
    }


    // public function label23(Request $request, $id){
    //     User::where('id',$id)->update([
    //         'title'=>$request->titlt
    //     ]);
    //     return redirect('newboy');
    // }
    // public function editLimage($id){
    //     $lohin = LoginImage::where('id',$id)->first();
    //     return view('editLOGIN', [
    //         'lohin' => $lohin
    //     ]);
    // }
    // public function editsavelogin(Request $request,$id){
    //     LoginImage::where('id',$id)->update([
    //         'name'=>$request->name,
    //         'image'=>$request->image
    //     ]);
    //     return redirect('/LoginImage');
    // }


    // public function filter(Request $request){
    //     // dd($request);
    //      if ($request->filter = 1){
    //          $type = 1;
    //          $tea = Gallery::where('who',$_POST['filter'])->get();

    //      }
    //      elseif ($request->filter = 2){
    //          $type = 2;
    //          $tea = Gallery::where('who',$_POST['filter'])->get();

    //      }
    //      elseif ($request->filter = 3){
    //          $type = 3;
    //          $tea = Gallery::where('who',$_POST['filter'])->get();

    //      }
    //      elseif ($request->filter = "all"){
    //          $type = "all";
    //          $tea = Gallery::all();

    //      }

    //      $tea = Gallery::where('who',$_POST['filter'])->get();

    //      return view('/gallery',[
    //          'gal'=>$tea,
    //          'type'=>$type
    //      ]);
    // }

}
