<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image; //Intervention Image
use Illuminate\Support\Facades\Storage; //Laravel Filesystem


class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('imageUpload1');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('profile_image')) {

            foreach($request->file('profile_image') as $file){

                //get filename with extension
                $filenamewithextension = $file->getClientOriginalName();

                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                //get file extension
                $extension = $file->getClientOriginalExtension();

                //filename to store
                $filenametostore = $filename.'_'.uniqid().'.'.$extension;

                Storage::put('public/profile_images/'. $filenametostore, fopen($file, 'r+'));
                Storage::put('public/profile_images/thumbnail/'. $filenametostore, fopen($file, 'r+'));

                //Resize image here
                $thumbnailpath = public_path('storage/profile_images/thumbnail/'.$filenametostore);
                $img = Image::make($thumbnailpath)->resize(400, 150, function($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save($thumbnailpath);
            }

            return redirect( ('upload-image'))->with('success', "Image uploaded successfully.");
        }
    }
}
