<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

use App\Mail\Contact;

class PagesController extends Controller
{
    public function index()
    {
    	$isLogged = Auth::check();
        $states = array('---');
        $vehicles = Vehicle::all();
        foreach (\App\States::pluck('state') as $state) {
            $states[] = $state;
        }
        return view('welcome', ['isLogged' => $isLogged, 'states' => $states, 'vehicles' => $vehicles]);
    }

    public function service()
    {
        $pageName = 'OUR SERVICES';
        $contentName = 'services_page';
        return view('page_template', ['pageName' => $pageName, 'contentName' => $contentName]);
    }

    public function about()
    {
        $pageName = 'About Us';
        $contentName = 'about_us';
        return view('page_template', ['pageName' => $pageName, 'contentName' => $contentName]);
    }

    public function contact()
    {
        $pageName = 'Contact Us';
        $contentName = 'contact_us';
        return view('page_template', ['pageName' => $pageName, 'contentName' => $contentName]);
    }

    public function contact_us(Request $request)
    {
        $user = $request;
        \Mail::to($user->email)->send(new Contact($user));

        back()->with('success', 'thanks_for_contacting_us');
        return Redirect::to(URL::previous() . "#contact-us");

        $data = [];
        $data['pageName'] = 'Thank You!';
        $data['contentName'] = 'thank_you';
        $data['first_message'] = 'For Reaching Us';
        $data['second_message'] = 'We\'ll Reply as soon as we can.';

        // return view('page_template', $data);
    }

    public function localang()
    {
        $words = [
            'address' => 'Address',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'contact_us' => 'Contact Us',
            'subject' => 'Subject',
            'your_message' => 'Your Message',
            'send_message' => 'Send a message',
        ];

        $keywords = '';

        // $keywords = array_keys($words);
        // $keyvalues = array_values($words);

        foreach (array_keys($words) as $keyword) {
            echo $keyword . ' <br>';
        }

        echo "<br><br><br><br>";

        foreach (array_values($words) as $keyvalue) {
            echo htmlspecialchars($keyvalue) . ' <br>';
        }

        // foreach ($words as $word) {
        //     $keywords .= '{{__(\'vehicles.' . str_slug(strtolower($word), '_') . '\')' . "}}<br>";
        // }

        // foreach ($words as $word) {
        //     if ($word == 'space') {
        //         $keywords .= "<br>";
        //     } else {
        //         $keyword = str_slug(strtolower($word), '_');
        //         $keywords .= '\'' . $keyword . '\' => \'sssssssssssssss\',' . "<br>";
        //     }
        // }

        return $keywords;
    }

    public function styles($style)
    {
        $site_settings = array();
        foreach (\App\setting::all() as $value) {
            $site_settings[$value->key] = $value->value;
        }
        $site_settings_keys = array_keys($site_settings);
        if (in_array($style, $site_settings_keys)) {
            return $site_settings[$style];
        }
        return redirect('/');
    }

}
