<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiResponse;

class TestController extends Controller
{


    public function test()
    {
        $aaa=array();
        $aaa['active']='111';
        return ApiResponse::makeResponse(true, $aaa, ApiResponse::SUCCESS_CODE);
        return ApiResponse::makeResponse(false, "管理员不存在", ApiResponse::INNER_ERROR);
    }

}
