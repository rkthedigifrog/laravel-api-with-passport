<?php

namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
   
class ReferrerController extends BaseController
{
    /**
     * Referrer api
     *
     * @return \Illuminate\Http\Response
     */
    public function userip(Request $request)
    {
        
        $success['ip'] =  $request->ip();
        if($request->name){
            $success['greeting'] =  $request->name;
        }
        
        return $this->sendResponse($success, 'Received referrer ip successfully.');
    }
   
}