<?php

namespace App\Http\Controllers\ApexLegends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class ApexLegendsController extends Controller
{
    // i might add more endpoints depending on the services provided by Apex Legends.  
    // this controller will be responsible for fetching data from apex legends ( players stats, names, platforms (PS4, PC, X1))

    public function playerStatus(Request $request)
    {
        $nickname = $request->get('nickname');
        $platform = $request->get('platform');

    //    handle an error message if the platform does not exist
        
        return "Hello $nickname, your platform is $platform";
        // here i will allow the users to enter their game nickname + platform. 

        

    }
}
