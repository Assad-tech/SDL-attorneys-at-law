<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\PropertyRepositoryInterface;
use App\Models\Property;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use Yajra\DataTables\Facades\DataTables;

class PropertyController extends Controller
{

    private PropertyRepositoryInterface $propertyRepository;

    public function __construct(PropertyRepositoryInterface $propertyRepository)
    {
        $this->propertyRepository = $propertyRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function datatable()
    {
        $allProperty = $this->propertyRepository->getAllProperties();
        // return $allProperty;
        return DataTables::collection($allProperty)->toJson();
    }

    public function index()
    {
        // $allProperty = $this->propertyRepository->getAllProperties();
        return view('Admin.property.show');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd("hello world");
        // return "hello world";
        return view('Admin.property.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'address' => 'required|string|between:1,255',
            'address_link' => 'required|url:http,https',
            'heading' => 'required|string|between:1,255',
            'description' => 'required|string|between:1,255',
            'view_detail_link' => 'required|url:http,https',

        ]);

        // return $request->hasFile('image');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image_path = public_path('admin/property_images');
            // $image->move($image_path, $imageName);
            $image->move($image_path, $imageName);
            // $image->move(public_path('images'),$imageName);
        }
        $data = [
            'amount' => $request->amount,
            'admin_id' => 1,
            'image' => $imageName,
            'location_text' => $request->address,
            'location_link' => $request->address_link,
            'heading' => $request->heading,
            'description' => $request->description,
            'url' => $request->view_detail_link,
        ];

        // return $data;

        $property = $this->propertyRepository->saveProperty($data);

        // return $property;
        // session()->set('success', 'Property created successfully.');
        //session()->flash('success', 'Property created successfully.');
        $notification = array(
            'message' => 'Property created successfully.',
            'alert-type' => 'success'
        );


        return redirect()->route('show.property')->with($notification);

        // $property = new Property();
        // $property->amount = $request->amount;
        // $property->image = $imageName;
        // $property->location_text = $request->location_text;
        // $property->location_link = $request->location_link;
        // $property->heading = $request->heading;
        // $property->description = $request->description;
        // $property->url = $request->url;
        // $property->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $edit = $this->propertyRepository->getPropertyById($id);
        // return $edit;
        return view('Admin.property.edit', compact('edit'));
    }

    /**
     *
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0',
            //'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'address' => 'required|string|between:1,255',
            'address_link' => 'required|url:http,https',
            'heading' => 'required|string|between:1,255',
            'description' => 'required|string|between:1,255',
            'view_detail_link' => 'required|url:http,https',

        ]);



        $this->propertyRepository->updateProperty($id, $request);

        $notification = array(
            'message' => 'Property updated successfully.',
            'alert-type' => 'success'
        );


        return redirect()->route('show.property')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $property = $this->propertyRepository->deleteProperty($id);

        return response()->json([
            'status' => 1,
            'data' => $property,
            'message' => 'Property deleted successfully.',
        ], 200);
        // return redirect()->route('admin.properties.index')->with('success', 'Property deleted successfully.');
    }
}
