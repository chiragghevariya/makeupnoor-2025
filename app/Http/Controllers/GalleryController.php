<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;


class GalleryController extends Controller
{

    public function index()
    {
        $gallery = Gallery::paginate(10);

        return view('admin.gallery.index',compact('gallery'));
    }

    public function create()
    {
    	return view('admin.gallery.create');
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {
        $editdata = Gallery::where('id', $id)->firstOrfail();

    	return view('admin.gallery.create',compact('editdata'));
    }

    public function update(Request $request, $id)
    {

    }

    public function delete($id)
    {
        $obj = Gallery::where('id', $id)->first();

        $obj->delete();

        flashMessage('success', 'Deleted Successfully !');

        return response()->json(['status' => 1]);
    }
}

