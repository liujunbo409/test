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
//dd($data);
        $result=array();
        switch ($data["flag"]){
            case "login":
                $result['studentid']= $data['stuid'];
                $result['studentname']= "老王";
                $result['school']= "2";
                $result['sex']= "2";
                break;

            case "update":
            $result['studentid']= $data['studentid'];
            $result['studentname']= $data['studentname'];
            $result['school']= $data['selected'];
            $result['sex']= $data['sex'];
                break;
                
            default:
                break;

        }
        return view('mypage', ['data' => $result]);
    }

}
