<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;


class GalleryController extends Controller
{
    public function create()
    {
    	return view('admin.gellary.create');
    }

    public function listing(Request $request)
    {
dd($request->all());
        $sql = Gallery::select("*");

        return Datatables::of($sql)

            ->editColumn('id', function ($data) {
                return $data->id;
            })

            ->editColumn('image', function ($data) {
                return '<img src="' . \asset('uploads/faq') . '/' . $data->image . '">';
            })

            ->editColumn('name', function ($data) {
                return $data->name;
            })

            ->addColumn('status', function ($data) {
                return getStatusIcon($data);
            })

            ->addColumn('action', function ($data) {

                $string = ' <div class="flex justify-center items-center"><a href="' . route('admin.faq.edit', Crypt::encrypt($data->id)) . '" class="flex items-center btn btn-primary"><i class="bx bx-edit"></i></a>
                  <a href="javascript:void(0)" data-link="' . route('admin.faq.delete', Crypt::encrypt($data->id)) . '" class="flex items-center  btn btn-danger delete"><i class="bx bx-trash"></i></a></div>';

                return $string;
            })

            ->filter(function ($query) use ($request) {
            })
            ->rawColumns(['id', 'image',  'name', 'status', 'action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cover_image' => 'required|image|max:20048',
            'image' => 'required|image|max:20048',
            'trigger_image' => 'required|image|max:20048',
            ]);

        try {
            $filePath = upload_picture($request->file('cover_image'), 'muscle', 'muscle');
            $imageFilePath = upload_picture($request->file('image'), 'muscle', 'muscle');
            $triggerImageFilePath = upload_picture($request->file('trigger_image'), 'muscle', 'muscle');

            $muscle = Muscle::create([
                'name' => $request->name,
                'cover_image' => $filePath,
                'image' => $imageFilePath,
                'trigger_image' => $triggerImageFilePath,
                'region' => $request->region,
                'general_description' => $request->general_description,
                'related_muscle' => $request->related_muscle,
                'antagonist' => $request->antagonist,
                'common_injuries' => $request->common_injuries,
                'resistance_exercises' => $request->resistance_exercises,
                'stretches' => $request->stretches,
                'origin' => $request->origin,
                'insertion' => $request->insertion,
                'major_arteries' => $request->major_arteries,
                'neural_innervation' => $request->neural_innervation,
                'trigger_text' => $request->trigger_text,
                'concentric' => $request->concentric,
                'eccentric' => $request->eccentric,
                'isometric_function' => $request->isometric_function,
            ]);

            return response()->json([
                'success' => true,
                'url' => route('gellary.index'),
                'message' => 'Muscle created successfully!',
            ]);
        } catch (\Exception $e) {

            Log::error('Muscle creation failed: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while creating the Muscle.',
            ], 500);
        }
    }

    public function index()
    {
        return view('admin.gellary.index');
    }

    public function edit($id)
    {
        $editdata = Muscle::where('id', $id)->firstOrfail();

    	return view('admin.gellary.create',compact('editdata'));
    }

    public function update(Request $request, $id)
    {
         $request->validate([
            'name' => 'required',
            'cover_image' => 'image|max:20048',
            'image' => 'image|max:20048',
            'trigger_image' => 'image|max:20048',
        ]);

        try {
            $muscle = Muscle::findOrFail($id);

            $muscle->update([
                'name' => $request->name,
                'region' => $request->region,
                'general_description' => $request->general_description,
                'related_muscle' => $request->related_muscle,
                'antagonist' => $request->antagonist,
                'common_injuries' => $request->common_injuries,
                'resistance_exercises' => $request->resistance_exercises,
                'stretches' => $request->stretches,
                'origin' => $request->origin,
                'insertion' => $request->insertion,
                'major_arteries' => $request->major_arteries,
                'neural_innervation' => $request->neural_innervation,
                'trigger_text' => $request->trigger_text,
                'concentric' => $request->concentric,
                'eccentric' => $request->eccentric,
                'isometric_function' => $request->isometric_function,
            ]);

            if ($request->hasFile('cover_image')) {
                // Delete old file if it exists
                if ($muscle && $muscle->cover_image) {
                    Storage::delete($muscle->cover_image);
                }

                $filePath = upload_picture($request->file('cover_image'), 'muscle', 'muscle');
                $muscle->update([
                    'cover_image' => $filePath,
                ]);
            }

            if ($request->hasFile('image')) {
                if ($muscle && $muscle->image) {
                    Storage::delete($muscle->image);
                }

                $imageFilePath = upload_picture($request->file('image'), 'muscle', 'muscle');
                $muscle->update([
                    'image' => $imageFilePath,
                ]);
            }

            if ($request->hasFile('trigger_image')) {
                // Delete old file if it exists
                if ($muscle && $muscle->trigger_image) {
                    Storage::delete($muscle->trigger_image);
                }

                $triggerFilePath = upload_picture($request->file('trigger_image'), 'muscle', 'muscle');
                $muscle->update([
                    'trigger_image' => $triggerFilePath,
                ]);
            }

            return response()->json([
                'success' => true,
                'url' => route('gellary.index'),
                'message' => 'Muscle updated successfully!',
            ]);
        } catch (\Exception $e) {

            Log::error('Muscle update failed: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while updating the Muscle.',
            ], 500);
        }
    }

    public function view($id)
    {
        $view = Muscle::where('id', $id)->firstOrfail();

    	return view('admin.gellary.view',compact('view'));
    }

    public function delete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:muscles,id',
        ]);

        try{

            Muscle::whereIn('id', $request->ids)->delete();

            return response()->json(['success' => true, 'message' => 'Muscle deleted successfully!']);

        }catch(\Throwable $e){

            return response()->json(['success' => false, 'message' => $e->getMessage() ], 500);
        }
    }
}

