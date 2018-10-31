<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiResponse;
use Illuminate\Http\Request;

class IndexController extends Controller
{


    public function index(request $request)
    {
        $data = $request->all();
        $result=array();
        $result['studentid']= $data['stuid'];
        $result['studentname']= "老王";
        $result['school']= "2";
        $result['sex']= "2";
        $color = ['2','3'];
        return view('mypage', ['data' => $result, 'color' => $color]);
    }

}
