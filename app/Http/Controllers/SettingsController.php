<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\setting;
use Intervention\Image\Facades\Image;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.settings.logo');
    }

    public function id()
    {
        return view('admin.settings.id');
    }
    
    public function slider()
    {
        return view('admin.settings.slider');
    }
    
    public function colors()
    {
        return view('admin.settings.colors');
    }
    
    public function contacts()
    {
        return view('admin.settings.contacts');
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
    public function show($id)
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function set(Request $request)
    {
        $values = null;
        if ($request->has_file == 1) {

            $images = $request->file('value');
            if (!is_array($images)) {
                $images = array($images);
            }

            foreach ($images as $image) {
                $isImage = Validator::make(array('value' => $image), [
                    'value' => 'required|image|mimes:jpeg,png,jpg,gif,svg,ico|max:2048',
                ]);

                if (!$isImage->fails()) {
                    $year = now()->year;
                    $month = now()->month;
                    $day = now()->day;
                    $disk = 'public_folder';
                    $destination_path = "uploads/images/" .$year. "/" .$month. "/" .$day;

                    // $image =  Image::make($image)->resize(235, 122);
                    // $filename = \Storage::disk($disk)->put($destination_path, $image);

                    $filename    = md5($image->getClientOriginalName().time()) . '.' . $image->getClientOriginalExtension();
                    $image_resize = Image::make($image->getRealPath());
                    if ($request->setting == 'site_logo') {
                        $image_resize->resize(235, 122);
                    } elseif ($request->setting == 'site_favicon') {
                        $image_resize->resize(16, 16);
                    } elseif ($request->setting == 'slider_imgs') {
                        $image_resize->resize(1900, 1188);
                    }
                    $image_path = public_path($destination_path . '/' . $filename);
                    if (!file_exists(public_path($destination_path))) {
                        File::makeDirectory(public_path($destination_path));
                    }
                    $image_resize->save($image_path);

                    $filename = $destination_path . '/' . $filename;
                    $values[] = $filename;

                } else {
                    if ($request->setting == 'site_logo') {
                        return back()
                            ->with('logo_errors','The File is not an image, please upload a validate image format');
                    } elseif ($request->setting == 'site_favicon') {
                        return back()
                            ->with('fav_errors','The File is not an image, please upload a validate image format');
                    } else {
                        return back()
                            ->with('errors','The File is not an image, please upload a validate image format');
                    }
                }
            }
            $data = setting::where('key', $request->setting)->first();
            if ($data === null) {
                return back();
            } else {
                if (count($values) == 1 && $request->setting != 'slider_imgs') {
                    $values = $values[0];
                } elseif (count($values) > 1 || $request->setting == 'slider_imgs') {
                    $values = serialize($values);
                }
                $data->value = $values;
                $data->save();
            }
            if ($request->setting == 'site_logo') {
                return back()
                    ->with('logo_success','Settings successfully updated.');
            } elseif ($request->setting == 'site_favicon') {
                return back()
                    ->with('fav_success','Settings successfully updated.');
            } else {
                return back()
                    ->with('success','Settings successfully updated.');
            }

        }

        if ($request->is_text) {
            $values[$request->setting] = $request->value;
            $keys = array_keys($values);
            foreach ($values as $key => $value) {
                $data = setting::where('key', $key)->first();
                if ($data === null) {
                    return back();
                } else {
                    $value = is_array($value) ? serialize($value) : $value;
                    $data->value = $value;
                    $data->save();
                }
            }
            return back()
                ->with('clients_email_success','Settings successfully updated.');
        }

        if ($request->setting == 'colors') {
            $values['primary_color'] = is_string($request->value['primary_color']) ? $request->value['primary_color'] : '#ecac4a';
            // $values['secondary_color'] = is_string($request->value['secondary_color']) ? $request->value['secondary_color'] : '#000000';
            $keys = array_keys($values);
            foreach ($keys as $key) {
                $data = setting::where('key', $key)->first();
                if ($data === null) {
                    return back();
                } else {
                    $data->value = $values[$key];
                    $data->save();
                }
            }
            return back()
                ->with('success','Settings successfully updated.');
        }

        if ($request->setting == 'site_title') {
            $values['site_title'] = is_string($request->value) ? $request->value : 'Safar Tours';
            $keys = array_keys($values);
            foreach ($keys as $key) {
                $data = setting::where('key', $key)->first();
                if ($data === null) {
                    return back();
                } else {
                    $data->value = $values[$key];
                    $data->save();
                }
            }
            return back()
                ->with('title_success','Settings successfully updated.');
        }

        if ($request->setting == 'site_contacts') {
            $values['site_contacts'] = $request->value;
            $keys = array_keys($values);
            foreach ($values as $key => $value) {
                $data = setting::where('key', $key)->first();
                if ($data === null) {
                    return back();
                } else {
                    $data->value = serialize($value);
                    $data->save();
                }
            }
            return back()
                ->with('social_success','Settings successfully updated.');
        }

        if ($request->setting == 'phone_number') {
            $values['phone_number'] = $request->value;
            $keys = array_keys($values);
            foreach ($values as $key => $value) {
                $data = setting::where('key', $key)->first();
                if ($data === null) {
                    return back();
                } else {
                    $value = is_array($value) ? serialize($value) : $value;
                    $data->value = $value;
                    $data->save();
                }
            }
            return back()
                ->with('phone_success','Settings successfully updated.');
        }

        if ($request->setting == 'clients_email') {
            $values['clients_email'] = $request->value;
            $keys = array_keys($values);
            foreach ($values as $key => $value) {
                $data = setting::where('key', $key)->first();
                if ($data === null) {
                    return back();
                } else {
                    $value = is_array($value) ? serialize($value) : $value;
                    $data->value = $value;
                    $data->save();
                }
            }
            return back()
                ->with('clients_email_success','Settings successfully updated.');
        }

        
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
