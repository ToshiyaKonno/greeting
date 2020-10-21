<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class commentsController extends Controller
{



    public function show($msg,$free)
     {


        $data = [
            'msg' => $msg,
            'free' => $free];


        return view('commentsController.show', $data);
           
        


        }


    public function random($msg)
    {


        $data = [
            'msg' => $msg
            
        ];


        return view('commentsController.show', $data);
    }
        
    }


