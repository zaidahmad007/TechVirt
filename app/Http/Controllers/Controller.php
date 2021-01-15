<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function dashboard(){
         $usertype=Auth::user()->usertype;
         //print_r($usertype);
        //echo "Hello";
        if ($usertype === "user")
        {
            return redirect()->route('studentD');
        }
        else if($usertype === "admin")
        {
            return redirect()->route('studentD');
        }
        else {
            return redirect()->route('teacherD');
        }
    }
}
