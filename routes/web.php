<?php

use Illuminate\Support\Facades\Route;
use App\Gallery;
use App\Fayl;
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
    $user = Gallery::all();
    $family = Gallery::count();
    // $fayl = Fayl::all();
    
    
    return view('welcome',[
        'gal' => $user,
        'family' => $family
        // 'fayl'=> $fayl
       
    ]);
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/video', 'VideoController@video')->name('video');
Route::get('/teacher', 'HomeController@teacher')->name('teacher');
Route::get('/student', 'HomeController@student')->name('student');
Route::get('/fayl', 'UserController@fayl')->name('fayl');
Route::get('/javohir', 'HomeController@javohir')->name('javohir');
Route::get('/newboy', 'HomeController@Newboy')->name('Newboy');
Route::get('/gallery', 'HomeController@gallery');
Route::get('/Image', 'HomeController@Image');
Route::get('/LoginImage', 'HomeController@LoginImage');
Route::get('/about', 'UserController@about');
// Route::get('/delete/{id}', 'HomeController@delete');
Route::get('/deleUser/{id}', 'HomeController@salom');
Route::get('/gallerdel/{id}', 'HomeController@gallerdel');
Route::get('/delLimage/{id}', 'HomeController@delLimage');
Route::get('/teachdelete/{id}', 'HomeController@teachdelete')->name('teacher');
Route::get('/ahmoq/{id}', 'HomeController@studelete')->name('student');
Route::get('/kalla/{id}', 'HomeController@pupdelete')->name('pupil');
Route::get('/javohir/{id}', 'HomeController@javohirdele')->name('javohir');
Route::get('/newDel/{id}', 'HomeController@newDel');
Route::get('/editUser/{id}', 'HomeController@eus');
Route::get('/editahmoq/{id}', 'HomeController@editahmoq');
Route::get('/editkalla/{id}', 'HomeController@editkalla');
Route::get('/editLimage/{id}', 'HomeController@editLimage');

Route::get('/egals/{id}', 'UserController@egals');

Route::get('/salom22', 'UserController@salom22');

// add
// Route::get('/addteacher', 'HomeController@addteacher');
// Route::post('/addteachersave', 'HomeController@addteachersave');



// add student
Route::get('/addstudent', 'HomeController@addstudent');
Route::get('/addLoginImage', 'HomeController@addLoginImage');



Route::get('/addimage', 'HomeController@addimage');
Route::post('/addimagesave', 'HomeController@addimagesave');
Route::post('/addImageL0gsave', 'HomeController@addImageL0gsave');

Route::post('/editimage/{id}', 'UserController@editimage');


// gal
Route::get('/addgal', 'HomeController@addgal');
// Route::post('/filter', 'FilterController@filter');

// --gal


Route::post('/addstudentserve', 'HomeController@addstudentserve');

Route::post('/label23/{id}', 'HomeController@label23');


// gal
Route::post('/addgalsave', 'HomeController@addgalsave');
Route::post('/editsavelogin/{id}', 'HomeController@editsavelogin');

// --gal


// add pupil

Route::get('/addpupil', 'HomeController@addpupil');
Route::post('/addpupilserve', 'HomeController@addpupilserve');
Route::post('/editsaveus/{id}', 'HomeController@editsaveus');
Route::post('/editsavestu/{id}', 'HomeController@editsavestu');
Route::post('/editsavepupil/{id}', 'HomeController@editsavepupil');

// add javohirga
Route::get('/addjavohir', 'HomeController@addjavohir');
Route::post('/addjavohirserve', 'HomeController@addjavohirserve');


Route::get('/addteacher', 'HomeController@addteacher');
Route::post('/addteachersave', 'HomeController@addteachersave');
// add newboy


Route::get('/addnewboy', 'HomeController@addnewboy');
Route::post('/addnewboyserve', 'HomeController@addnewboyserve');

Route::get('/newboy', 'UsefulController@newboy');
Route::post('/Userprofile/{id}','UsefulController@Userprofile');


// xabar
Route::get('/student', 'XabarController@xaba2r');
Route::get('/editoqil/{id}', 'XabarController@editoqil');
Route::get('/editoqilmagan/{id}', 'XabarController@editoqilmagan');



Route::get('/Deletes/{id}', 'HomeController@Deletes');






Route::get('/falydel/{id}', 'UserController@falydel');

Route::get('/faylpdf', 'UserController@faylpdf');
// Route::post('/addfayl', 'UserController@



Route::post('/xabar', 'XabarController@xabar');

// export qismi  

Route::get('export', 'XabarController@export')->name('export');
Route::get('export3', 'XabarController@export3')->name('export');   
Route::get('export2', 'XabarController@export2')->name('export');

// --/export qismi  


// import qismi
Route::get('importExportView', 'XabarController@importExportView');
Route::post('/import','XabarController@import');

Route::get('import2', 'XabarController@import2');
Route::post('/import3','XabarController@import3');

Route::get('importmess', 'XabarController@importmess');
Route::post('/importmess2','XabarController@importmess2');




// Route::post('/filter','HomeController@filter');

// video controller

Route::get('addvideo', 'VideoController@addvideo');
Route::post('/addvideos','VideoController@addvideos');
Route::get('delvideo/{id}', 'VideoController@delvideo');
Route::post('/editvideo/{id}','VideoController@editvideo');


// --/import qismi


// 404 part


Route::get('{messages}',function (){
    return view('404');
});
