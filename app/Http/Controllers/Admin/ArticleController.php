<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get name logged admin with guard
        $name_admin = Auth::guard('admin')->user()->name;
        return view('cms.pages.article.index', ['name_admin' => $name_admin]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // get name logged admin with guard
        $name_admin = Auth::guard('admin')->user()->name;
        return view('cms.pages.article.add', ['name_admin' => $name_admin]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_article' => 'required',
            'slug_article' => 'required',
            'content' => 'required',
            'thumbnail_article' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // store thumbnail and get id

        // change file name to time when upload the file
        $imageName = time().'.'.$request->thumbnail_article->extension();

        // route media saving
        $request->thumbnail_article->move(public_path('medias'), $imageName);

        $media = new Media([
            'category' => 'article',
            'alt_image' => $request->title_article,
            'content_file' => 'medias/'.$imageName,
            'admin_id' => Auth::guard('admin')->user()->id,
        ]);
        $media->save();

        // keep the media id and store article
        $article = new Article([
            'title' => $request->title_article,
            'slug' => $request->slug_article,
            'is_active' => $request->status ? true : false,
            'content' => $request->content,
            'admin_id' => Auth::guard('admin')->user()->id,
            'media_id' => $media->id
        ]);
        $article->save();

        // data for toast notification
        $notification = array(
            'message' => 'Successfully done',
            'alert-type' => 'success'
        );
        
        return redirect()->route('article.index')->with($notification);
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
