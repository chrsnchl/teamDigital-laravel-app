<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function contact() {
                return view('welcome'); // view the contact form
	}
	public function contactPost(Request $request){

                $this->validate($request, [
                                'firstname' => 'required',
                                'lastname'  => 'required',
                                'email'     => 'required|email',
                                'message'   => 'required'
                        ]);

                        //redirect()->back()->withErrors($validator)->withInput()

                $request = $request->all();
                
                return view('success', compact('request'));
    }
}
