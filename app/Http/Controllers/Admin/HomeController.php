<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.homeSectionIndex');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.homeSectionCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'greeting_title' => 'nullable|string|max:255',
            'slider_title' => 'nullable|string|max:255',
            'slider_desrcrition' => 'nullable|string|max:500',
            'slider_image' => 'required|image|mimes:jpeg,png,jpg,gif', // Ensures a valid image is uploaded
        ]);

        // dd($request);
        $imagePath = null;

        // Handle file upload
        if ($request->hasFile('slider_image')) {
            $image = $request->file('slider_image');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Generate a unique filename
            $destinationPath = public_path('user/assets/images/home'); // Full path to the desired directory
            $image->move($destinationPath, $imageName); // Move the file to the directory

            $imagePath = 'user/assets/images/home/' . $imageName; // Save the relative path
        }

        // Store the data in the Home model
        Home::create([
            'greetings' => $validatedData['greeting_title'] ?? null,
            'slider_title' => $validatedData['slider_title'] ?? null,
            'slider_description' => $validatedData['slider_desrcrition'] ?? null,
            'slider_image' => $imagePath ?? null,
            'status' => 1,
        ]);
        $notification = array(
            'message' => 'Slider created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function datatables()
    {
        $allSliders = Home::all();

        return DataTables::collection($allSliders)
            ->addColumn('action', function ($row) {
                return [
                    'deleteUrl' => route('admin.home-section.delete', $row->id),
                ];
            })
            ->toJson();
    }

    public function delete($id)
    {
        $slider = Home::findOrFail($id);

        // Check if the image exists and delete it
        if ($slider->slider_image && file_exists(public_path($slider->slider_image))) {
            unlink(public_path($slider->slider_image));
        }

        // Delete the record from the database
        $slider->delete();

        // Return a success response
        return response()->json([
            'status' => true,
            'success' => 'Slider deleted successfully!'
        ]);
    }


    
}
