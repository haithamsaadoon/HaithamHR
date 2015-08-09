<?php

use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    
    session::regenerate();
    session::put("name","haitham");
    if(!session::has("name"))
    {
        
      return redirect('user/unauthenticated');  
        
    }
    
    
    return view('login');
});


Route::get('/users', "testcontroller@allusers");
Route::get('/employee', function(){return view('employee');});





Route::get('test', function() {

    $phpWord = new \PhpOffice\PhpWord\PhpWord();
$section = $phpWord->createSection();
$section->addText('Hello World!');
$file = 'HelloWorld.docx';
header("Content-Description: File Transfer");
header('Content-Disposition: attachment; filename="' . $file . '"');
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Expires: 0');
$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$xmlWriter->save("php://output");
});


