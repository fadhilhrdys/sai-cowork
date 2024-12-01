<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get name logged admin with guard
        $name_admin = Auth::guard('admin')->user()->name;
        // get data
        $medias = Media::all();
        
        // var_dump($user);
        return view('cms.pages.media.index', [
            'name_admin' => $name_admin,
            'medias' => $medias,
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
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // change file name to time when upload the file
        $imageName = time().'.'.$request->image->extension();

        // route media saving
        $request->image->move(public_path('medias'), $imageName);

        // create new payload
        $media = new Media();

        // input request to field in DB
        $media->admin_id = Auth::guard('admin')->user()->id;
        $media->category = $request->category;
        $media->content_file = 'medias/'.$imageName;
        $media->alt_image = $request->alt_image;
        $media->save();

        // data for toast notification
        $notification = array(
            'message' => 'Successfully done',
            'alert-type' => 'success'
        );
       
        return redirect()->route('media.index')->with($notification);
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
    public function destroy($id)
    {

        Media::destroy($id);

        // data for toast notification
        $notification = array(
            'message' => 'Media deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('media.index')->with($notification);
    }
}
