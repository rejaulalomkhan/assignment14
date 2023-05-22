<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller
{
    /*
    | ---------------------------------------------
    // Assignment 14
    | ---------------------------------------------
    */

    function RetrieveName(Request $request){
        $name = $request->input('name');
        $mobile = $request->input('mobile');
        return $name." ".$mobile; // Rejaul Alom Khan
    }

    function UserAgent(Request $request){
        $userAgent = $request->header('User-Agent');
        return $userAgent; // PostmanRuntime/7.32.2
    }

    function Page(Request $request){
        $page = $request->query('page', null);
        return $page; // 2
    }

    function CustomJsonResponse(Request $request): JsonResponse
    {
        $code = 201;
        $content = array(
            "message" => "Success",
            "data" => array(
                "name" => "John Doe",
                "age" => 25
            )
        );

        return response()->json($content,$code);
    }

    function UploadAvatar(Request $request): JsonResponse{
        $img = $request->file('avatar');
        $originalName = $img->getClientOriginalName();
        $img->move(public_path('uploads/'), $originalName);

        $code = 201;
        $content = array(
            "message" => "Successfully uploaded {$originalName}"
        );
        return response()->json($content,$code);
    }

    function RetrieveCookie(Request $request): array|string|null
    {
        $rememberToken = $request->cookie();
        return $rememberToken;
    }

    function RetrieveEmail(Request $request):JsonResponse
    {
        $email = $request->input('email');
        $code = 200;
        $content = array(
            "success" => "true",
            "message" => "Form submitted successfully",
            'email' => $email
        );

        return response()->json($content,$code);
    }
}
