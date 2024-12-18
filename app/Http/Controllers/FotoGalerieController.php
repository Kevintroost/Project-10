<?php

namespace App\Http\Controllers;

use App\Models\FotoGalerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Storage;

class FotoGalerieController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        $images = FotoGalerie::all();
        return view('images.create', compact('images'));


    }

    public function Store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imagename);

        $admin_id = auth()->user()->id;

        $image = new FotoGalerie();
        $image->foto = $imagename;
        $image->user_id = $admin_id;
        $image->save();

        return redirect('admin/dashboard/image/create')->with('success', 'Image uploaded successfully');

    }



    public function Destroy(Request $request)
    {
        $imageid = $request->input('image_id');
    
        $image = FotoGalerie::find($imageid);
    
        if ($image) {
            
            $imagepath = public_path('Images/' . $image->foto);
    
            
            if (file_exists($imagepath)) {
                
                unlink($imagepath);
            }
    
            
            $image->delete();
    
            
            return redirect('admin/dashboard/image/create')->with('success', 'Image deleted successfully');
        }
    
    
    }
    

}

