<?php

namespace App\Http\Controllers;

use App\Models\MassegTextMessage;
use Illuminate\Http\Request;

class MassegController extends Controller
{
    public function index(Request $request){
        MassegTextMessage::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'comments' => $request->comments,
                'status' => 1,
            ]
        );
        return back();
    }

    public function mail(){
       $data['mail']= MassegTextMessage::orderBy('created_at', 'desc')-> get();
       return view('mail',$data);
//        return response()->json([
//            "message" => $data
//        ]);
    }
}
