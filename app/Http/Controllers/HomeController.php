<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
    	return view('home');
    }

    public function about()
    {
    	return view('front.about');
    }

    public function contact()
    {

    	return view('front.contact');
    }

    public function contactPost(request $request)
    {

        $messages = [];
		$rules = [
			'name' => ['required'],
			'email' => ['required'],
		];

		if(env('IS_CAPTCHA_ENABLE')){

			$rules['recaptcha_response'] = ['required','VerifyRecaptcha'];
			$messages['recaptcha_response.required'] = 'The ReCAPTCHA verification field is required.';
			$messages['recaptcha_response.verify_recaptcha'] = 'ReCAPTCHA verification failed.';
		}

        $request->validate($rules, $messages);

        if (\Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

           flashMessage('success', 'Login Successfully Done!!');

            return response()->json(['status' => true]);
        } else {

            flashMessage('error', 'Please Enter Valid Email and Password');

            return response()->json(['status' => false]);
        }
    }

    public function gallery()
    {
    	return view('front.gallery');
    }
}
