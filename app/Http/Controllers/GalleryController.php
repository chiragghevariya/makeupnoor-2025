<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryImage;
use App\Models\Gallery;
use Validator;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::paginate(10);
        return view('admin.gallery.index', compact('gallery'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);

        $gallery = Gallery::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status,
            'description' => $request->description,
        ]);

        
        $galleryimages = GalleryImage::whereNull('gallery_id')->get();
        foreach ($galleryimages as $v) {
            if ($v->gallery_id == null) {
               $v->gallery_id= $gallery->id;
               $v->save();

            }
        }
        flashMessage('success', 'Record added successfully!');
        return response()->json(['status' => 1]);
    }

    public function edit($id)
    {
        $editdata = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('editdata'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);

        $gallery = Gallery::findOrFail($id);
        $gallery->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status,
            'description' => $request->description,
        ]);

        flashMessage('success', 'Record updated successfully!');
        return response()->json(['status' => 1]);
    }

    public function delete($id)
    {
        Gallery::findOrFail($id)->delete();
        flashMessage('success', 'Deleted Successfully!');
        return response()->json(['status' => 1]);
    }

    public function imagestore(Request $request)
    {
        $img = $request->file('file');
        $allowedExts = ['jpg', 'png', 'jpeg'];

        $validator = Validator::make($request->all(), [
            'file' => function ($attribute, $value, $fail) use ($img, $allowedExts) {
                if (!in_array(strtolower($img->getClientOriginalExtension()), $allowedExts)) {
                    $fail("Only png, jpg, jpeg images are allowed");
                }
            },
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $filename = uniqid() . '.jpg';
        $img->move('assets/front/img/gallery/images/', $filename);

        $galleryImage = new GalleryImage();
        $galleryImage->gallery_id = $request->gallery_id ?? null;
        $galleryImage->image = $filename;
        $galleryImage->save();

        return response()->json(['status' => 'success', 'file_id' => $galleryImage->id, 'image_url' => asset('assets/front/img/gallery/images/' . $filename)]);
    }

     public function images($gallery_id)
    {
        $images = GalleryImage::where('gallery_id', $gallery_id)->get();
        return $images;
    }

    public function sliderrmv(Request $request)
        {
            $pi = GalleryImage::findOrFail($request->fileid);
            @unlink('assets/front/img/gallery/images/' . $pi->image);
            $pi->delete();
            return $pi->id;
        }
    }
