<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $name_admin = Auth::guard('admin')->user()->name;
        // get data
        $cities = City::all();

        return view('cms.pages.city.index', [
            'name_admin' => $name_admin,
            'cities' => $cities
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_city' => 'required',
            'thumbnail_city' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // input image

        // change file name to time when upload the file
        $imageName = time().'.'.$request->thumbnail_city->extension();

        // route media saving
        $request->thumbnail_city->move(public_path('medias'), $imageName);

        $media = new Media([
            'category' => 'city',
            'alt_image' => $request->name_city,
            'content_file' => 'medias/'.$imageName,
            'admin_id' => Auth::guard('admin')->user()->id,
        ]);
        $media->save();

        // save data
        $city = new City([
            'name' => $request->name_city,
            'media_id' => $media->id,
            'admin_id' => Auth::guard('admin')->user()->id
        ]);

        $city->save();

        // data for toast notification
        $notification = array(
            'message' => 'Successfully done',
            'alert-type' => 'success'
        );
        
        return redirect()->route('city.index')->with($notification);

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city = City::find($id);
        $city->delete();

        // data for toast notification
        $notification = array(
            'message' => 'Successfully Delete',
            'alert-type' => 'success'
        );
        
        return redirect()->route('city.index')->with($notification);

    }
}
