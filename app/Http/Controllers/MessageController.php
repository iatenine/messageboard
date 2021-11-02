<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create(Request $request){
        $message = new message();
        $message->title = $request->title;
        $message->content = $request->content;

        $message->save();

        return redirect('/');
    }

    public function view($id){
        $message = message::findOrFail($id);
        return view('home', ['messages'=>[$message]]);
    }

    public function delete($id){
        $message = message::findOrFail($id);
        $message->delete();

        return redirect('/');
    }
}
