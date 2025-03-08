<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SupportingStaff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SupportingStaffController extends Controller
{
    public function manageSupportingStaff()
    {

        $staffs = SupportingStaff::where('staff_banner', '=', null)->where('status', 1)->get();
        $banner = SupportingStaff::where('staff_banner', '!=', null)->where('status', 1)->first();
        // dd($ba);
        return view('Admin.pages.supportingStaff.manageSupportingStaff', compact('staffs', 'banner'));
    }

    public function create()
    {
        return view('Admin.pages.supportingStaff.createSupportingStaff');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'staff_fullname' => 'required|string',
            'staff_education' => 'nullable|string',
            'staff_professional_aff' => 'nullable|string',
            'staff_bio' => 'nullable|string',
            'staff_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',

            'staff_fb_link' => 'nullable|url',
            'staff_insta_link' => 'nullable|url',
            'staff_yelp_link' => 'nullable|url',
        ]);

        $staff = new SupportingStaff();

        // Handle staff_image
        if ($request->hasFile('staff_image')) {
            // if ($staff->staff_image && File::exists(public_path($staff->staff_image))) {
            //     File::delete(public_path($staff->staff_image)); // Unlink old image
            // }
            $staff_image = $request->file('staff_image');
            $path = $staff_image->move('user/assets/images/advisors/', $staff_image->getClientOriginalName());
            $staff->staff_image = str_replace('\\', '/', $path); // Normalize the path to use forward slashes
        }



        // Save other fields
        $staff->type = $request->type;
        $staff->staff_fullname = $request->staff_fullname;
        $staff->staff_education = $request->staff_education;
        $staff->staff_professional_aff = $request->staff_professional_aff;
        $staff->staff_bio = $request->staff_bio;
        $staff->status = 1;
        $staff->staff_fb = $request->staff_fb_link;
        $staff->staff_insta = $request->staff_insta_link;
        $staff->staff_yelp = $request->staff_yelp_link;
        $staff->save();


        $notification = [
            'message' => 'Supporting staff saved successfully.',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }

    public function updateBanner(Request $request)
    {
        // Validate the request
        $request->validate([
            'staff_banner' => 'required|image|mimes:jpeg,png,jpg,gif',
            'banner_id' => 'required|exists:supporting_staff,id',
        ]);

        // Find the banner record
        $banner = SupportingStaff::findOrFail($request->banner_id);

        // Handle the staff_banner upload
        if ($request->hasFile('staff_banner')) {
            // Delete the old banner if it exists
            if ($banner->staff_banner && File::exists(public_path($banner->staff_banner))) {
                File::delete(public_path($banner->staff_banner));
            }

            // Upload the new banner
            $staff_banner = $request->file('staff_banner');
            $path = $staff_banner->move('user/assets/images/home/', $staff_banner->getClientOriginalName());
            $banner->staff_banner = str_replace('\\', '/', $path); // Normalize the path
        }

        // Save the updated banner record
        $banner->save();

        // Return success notification
        $notification = [
            'message' => 'Banner updated successfully.',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $staff = SupportingStaff::find($id);
        return view('Admin.pages.supportingStaff.editSupportingStaff', compact('staff'));
    }

    // working on this..
    public function update(Request $request)
    {

        dd($request->all());
        $request->validate([
            'type' => 'required|string',
            'staff_fullname' => 'required|string',
            'staff_education' => 'nullable|string',
            'staff_professional_aff' => 'nullable|string',
            'staff_bio' => 'nullable|string',
            'staff_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',

            'staff_fb_link' => 'nullable|url',
            'staff_insta_link' => 'nullable|url',
            'staff_yelp_link' => 'nullable|url',
        ]);

        $staff = new SupportingStaff();

        // Handle staff_image
        if ($request->hasFile('staff_image')) {
            // if ($staff->staff_image && File::exists(public_path($staff->staff_image))) {
            //     File::delete(public_path($staff->staff_image)); // Unlink old image
            // }
            $staff_image = $request->file('staff_image');
            $path = $staff_image->move('user/assets/images/advisors/', $staff_image->getClientOriginalName());
            $staff->staff_image = str_replace('\\', '/', $path); // Normalize the path to use forward slashes
        }



        // Save other fields
        $staff->type = $request->type;
        $staff->staff_fullname = $request->staff_fullname;
        $staff->staff_education = $request->staff_education;
        $staff->staff_professional_aff = $request->staff_professional_aff;
        $staff->staff_bio = $request->staff_bio;
        $staff->status = 1;
        $staff->staff_fb = $request->staff_fb_link;
        $staff->staff_insta = $request->staff_insta_link;
        $staff->staff_yelp = $request->staff_yelp_link;
        $staff->save();


        $notification = [
            'message' => 'Supporting staff saved successfully.',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
