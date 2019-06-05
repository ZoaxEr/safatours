<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function index(request $request)
    {
    	$languages = ['tr', 'ar', 'en'];
		$locale = $request->lang;
		if (in_array($locale, $languages)) {
	    	Session::put('locale', $locale);
		}
	    return redirect()->back();
    }
}
