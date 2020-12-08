<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller

{

    public function home(){
        return view ('home');
    }

    public function review(){
        return view ('review');
    }

    public function review_check(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
             'subject' => 'required|min:5|max:50',
            'message' => 'required|min:5|max:50'
        ]);
    }
}
