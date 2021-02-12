<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function contact() {
		return view('welcome');
	}
	public function contactPost(Request $request){

        $this->validate($request, [
                        'firstname' => 'required',
                        'lastname'  => 'required',
                        'email'     => 'required|email',
                        'message'   => 'required'
                ]);

/*
        Mail::send('email', [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'comment' => $request->get('comment') ],
                function ($message) {
                        $message->from('youremail@your_domain');
                        $message->to('youremail@your_domain', 'Your Name')
                        ->subject('Your Website Contact Form');
        });
*/

//        return back()->with('success', 'Thanks for contacting us, We will get back to you soon!');

	return view('success');

    }
}
