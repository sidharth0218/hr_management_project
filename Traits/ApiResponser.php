<?php

namespace App\Traits;

trait ApiResponser
{

    protected function successResponse($data, $message = null, $code = 200)
    {
        if ($data != ''){
            return ($data)
                ->additional([
                    'status' => true,
                    'message' => $message,
                    'status_code' => $code,
                ]);
        }


        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    protected function errorResponse($message = null, $code = 401, $data = null)
    {
        if ($message == null) {
            $message = 'Something went Wrong! Please try Again.';
        }
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => $data,
        ], $code);
    }


    protected function successResponseArray($data, $message = null, $code = 200)
    {
        return array(
            'status' => true,
            'message' => $message,
            'data' => $data,
        );
    }

    protected function errorResponseArray($message = null, $code = 401, $data = null)
    {
        if ($message == null) {
            $message = 'Something went Wrong! Please try Again.';
        }
        return array(
            'status' => false,
            'message' => $message,
            'data' => $data,
        );
    }
}
