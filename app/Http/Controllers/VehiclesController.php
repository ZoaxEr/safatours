<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Rents;
use Carbon;
// use PragmaRX\Countries\Package\Countries;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        $pageName = 'Vehicles';
        return view('vehicles.vehicles', ['pageName' => $pageName, 'vehicles' => $vehicles]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $vehicles = Vehicle::all();
        $pageName = 'Vehicles';
        return view('vehicles.vehicles', ['pageName' => $pageName, 'vehicles' => $vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $vehicle = Vehicle::where('slug', $slug)->first();
        if ($vehicle) {
            $pageName = $vehicle->mark . ' ' . $vehicle->model;
            $locale = \App::getLocale();
            $vehicle->pageName = $pageName;
            $vehicle->crLocale = $locale;
            $vehicle->Description = $vehicle->getTranslation('description', $locale);
            $vehicle->Features = $vehicle->getTranslation('features', $locale);
            return view('vehicles.single_vehicle', $vehicle);
        }
        return back();
    }

    public function rent_view($slug)
    {
        $vehicle = Vehicle::where('slug', $slug)->first();
        $rents = Rents::where('traceNumber', $vehicle->traceNumber)->get(['pick_up_date', 'drop_off_date']);
        $rents->map(function ($value) {
            $value->pick_up_date = Carbon\Carbon::createFromFormat('Y-m-d', $value->pick_up_date);
            $value->drop_off_date = Carbon\Carbon::createFromFormat('Y-m-d', $value->drop_off_date);
            return $value;
        });
        
        if ($vehicle) {
            $pageName = 'Rent Now';
            $contentName = 'rent';
            $vehicle['pageName'] = $pageName;
            $vehicle['contentName'] = $contentName;
            if ($rents) {
                $vehicle['rents'] = $rents;
            }
            // $vehicle['countries'] = Countries::all();
            
            return view('page_template', $vehicle);
        }
        return back();
    }

    public function rent($slug, Request $request)
    {
        $vehicle = Vehicle::where('slug', $slug)->first();
        if ($vehicle) {
            $request->request->add([
                'traceNumber' => $vehicle->traceNumber,
                'car_amount' => $vehicle->price,
            ]);

            Rents::create($request->all());
        }

        $data = [];
        $data['pageName'] = 'Thank You!';
        $data['contentName'] = 'thank_you';
        $data['first_message'] = 'For Using Us';
        $data['second_message'] = 'We\'ll reach you soon.';

        return view('page_template', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
