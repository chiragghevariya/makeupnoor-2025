<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


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

        $obj = new Contact;
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->message = $request->message;

        $obj->save();

        flashMessage('success', 'email sent Successfully !!');

        return response()->json(['status' => true,'redirect_url' => route('contact')]);

    }

    public function gallery()
    {
    	return view('front.gallery');
    }
}
