<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result, $message = 'success')
    {
    	$response = [
            'message' => $message,
            'data'    => $result,
        ];
        return response()->json($response, 200);
    }

    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($message = "failed", $result = [], $code = 404)
    {
    	$response = [
            'message' => $message,
        ];
        if(!empty($result)){
            $response['data'] = $result;
        }
        return response()->json($response, $code);
    }
}