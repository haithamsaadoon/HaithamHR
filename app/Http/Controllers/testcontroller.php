<?php

namespace App\Http\Controllers;
use App\employee;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class testcontroller extends Controller
{
    public function allusers()
    {
     
      // $users=hruser::findOrfail(2);
    //   $users=  hruser::where("users_name","=","haitham")->take(0)->count();
     // $rawaa= new employee();
     // $rawaa->users_name="rawaa";
      //$rawaa->users_password="rawaa";
      //$rawaa->save();
      
      //return compact(rawaa);
        print_r($_GET); 
        
    }
}
