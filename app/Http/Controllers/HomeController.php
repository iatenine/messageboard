<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;

class HomeController extends Controller
{
    //
    public function index(){
        $messages = message::all();
        return view('home', [
            'messages'=>$messages
        ]);
    }
}
