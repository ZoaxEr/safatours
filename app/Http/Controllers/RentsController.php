<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Rents;

class RentsController extends Controller
{
    public function index()
    {
    	$rents = Rents::all();
        $title = 'Car Rents!';
        $sub_title = 'here you can review, confirm or cancel cars rents';
        
    	return view('admin.rents.all_rents', ['rents' => $rents, 'title' => $title, 'sub_title' => $sub_title]);
    }

    public function confirmed()
    {
        $rents = Rents::where('confirmed', '1')->get();
        $title = 'Confirmed Car Rents!';
        $sub_title = 'here you can find confirmed cars rents';

        return view('admin.rents.all_rents', ['rents' => $rents, 'title' => $title, 'sub_title' => $sub_title]);
    }

    public function cancelled()
    {
        $rents = Rents::where('cancelled', '1')->get();
        $title = 'Confirmed Car Rents!';
        $sub_title = 'here you can find cancelled cars rents';

        return view('admin.rents.all_rents', ['rents' => $rents, 'title' => $title, 'sub_title' => $sub_title]);
    }

    public function not_reviewed()
    {
        $rents = Rents::where('reviewed', '0')->get();
        $title = 'Reviewd Rents!';
        $sub_title = 'here you can fine reviewed cars rents';

        return view('admin.rents.all_rents', ['rents' => $rents, 'title' => $title, 'sub_title' => $sub_title]);
    }
}
