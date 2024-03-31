<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageUpload;


class ImageUploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2480',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        
        $image = new ImageUpload();
        $image->path = '/images/'.$imageName;
        $image->save();

        return back()->with('success', 'Image uploaded successfully');
    }
}
