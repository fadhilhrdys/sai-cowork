<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Place;
use App\Models\PlaceMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get name logged admin with guard
        $name_admin = Auth::guard('admin')->user()->name;

        return view('cms.pages.place.index', [
            'name_admin' => $name_admin,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // get name logged admin with guard
        $name_admin = Auth::guard('admin')->user()->name;

        // get data city
        $cities = City::all();

        return view('cms.pages.place.add', [
            'name_admin' => $name_admin,
            'cities' => $cities
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
        $request->validate([
            'medias' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // store to place table
        $place = new Place([
            'name' => $request->name_place,
            'city_id' => $request->city_place,
            'description' => $request->description_place,
            'address' => $request->address_place,
            'latitude' => $request->latitude_place,
            'longtitude' => $request->longtitude_place,
            'opening_hours' => $request->opening_hours_place,
            'amenities' => $request->amenities,
            'admin_id' => Auth::guard('admin')->user()->id
        ]);
        $place->save();

        // store image place to place media table
        foreach ($request->file('medias') as $file) {
            // change file name to time when upload the file
            $imageName = time().rand(1,99).'.'.$file->extension();

            // route media saving
            $file->move(public_path('medias'), $imageName);

            $medias = new PlaceMedia ([
                'category' => 'place',
                'alt_image' => $request->name_place,
                'content_file' => 'medias/'.$imageName,
                'place_id' => $place->id,
                'admin_id' => Auth::guard('admin')->user()->id,
            ]);

            $medias->save();
        }

        // data for toast notification
        $notification = array(
            'message' => 'Successfully done',
            'alert-type' => 'success'
        );
        
        return redirect()->route('place.create')->with($notification);
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
        //
    }
}
