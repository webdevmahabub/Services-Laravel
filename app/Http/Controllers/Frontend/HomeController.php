<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

public function Home(){

return view('frontend.home');

}//end index



public function About(){

    return view('frontend.about');

}// End Method

public function Contact(){

    return view('frontend.contact');

}// End Method
public function Terms(){

    return view('frontend.terms');

}// End Method  terms
}
