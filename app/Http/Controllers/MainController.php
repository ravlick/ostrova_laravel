<?php

namespace App\Http\Controllers;

use App\ContactModel;
use Illuminate\Http\Request;


class MainController extends Controller

{

    public function home(){
        return view ('home');
    }

    public function review(){
        $reviews = new ContactModel();
        return view ('review' , ['reviews' => $reviews->all()]);
    }

    public function review_check(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
             'subject' => 'required|min:5|max:50',
            'message' => 'required|min:5|max:50'
        ]);

        $review = new ContactModel();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }
}
