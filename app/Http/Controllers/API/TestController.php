<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiResponse;

class TestController extends Controller
{


    public function test()
    {
        dd(111);
        $aaa=array();
        $aaa['studentid']= "123456789";
        $aaa['studentname']= "老王";
        $aaa['school']= 2;
        $aaa['sex']= 2;
        $aaa['checknames']= [1,2];
        return ApiResponse::makeResponse(true, $aaa, ApiResponse::SUCCESS_CODE);
        return ApiResponse::makeResponse(false, "管理员不存在", ApiResponse::INNER_ERROR);
    }

}
