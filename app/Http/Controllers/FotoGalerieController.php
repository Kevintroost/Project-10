<?php

namespace App\Http\Controllers;

use App\Models\FotoGalerie;
use Illuminate\Http\Request;

class FotoGalerieController extends Controller
{
    public function Index()
    {

    }

    public function Create()
    {

        // Fetch all images
        $images = FotoGalerie::all();
        $images = FotoGalerie::orderBy('created_at', 'desc')->paginate(6);
        return view('images.create', compact('images'));


    }

    public function Store(Request $request)
    {

        // Validate the request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Save the uploaded image directly to the public/images directory
        $imagename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imagename);


        // user_id
        $admin_id = auth()->user()->id;

        // Create the image
        $image = new FotoGalerie();
        $image->foto = $imagename;
        $image->user_id = $admin_id;
        $image->save();

        // success message
        return redirect('admin/dashboard/image/create')->with('success', 'Image uploaded successfully');

    }


    // Delete image
    public function Destroy(Request $request)
    {

        // Retrieve the image_id from the request
        $image_id = $request->input('image_id');

        // Find the image 
        $image = FotoGalerie::find($image_id);


        // Delete the image from the public/images directory
        if ($image) {
            $imagepath = public_path('Images/' . $image->foto);

            if (file_exists($imagepath)) {
                unlink($imagepath);
            }

            $image->delete();

            // Redirect back with a success message
            return redirect('admin/dashboard/image/create')->with('success', 'Image deleted successfully');
        } else {

            // Redirect back with an error message
            return redirect('admin/dashboard/image/create')->withErrors('Image not found');
        }
    }


}