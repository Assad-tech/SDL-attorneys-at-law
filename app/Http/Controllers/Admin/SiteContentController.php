<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteContent;
use Illuminate\Http\Request;

class SiteContentController extends Controller
{

    // View All Content
    public function index()
    {
        $logo = SiteContent::where('type', 'logo')->first();
        $phone = SiteContent::where('type', 'phone')->first();
        $address = SiteContent::where('type', 'address')->first();
        $footer_description = SiteContent::where('type', 'footer_content')->first();
        $footer_copyright = SiteContent::where('type', 'footer_copyright')->first();
        $whyChooseUs_Heading = SiteContent::where('type', 'why_choose_us_heading')->first();
        $whyChooseUs_Description = SiteContent::where('type', 'why_choose_us_description')->first();
        $whyChooseUs_Image = SiteContent::where('type', 'why_choose_us_image')->first();
        // dd($whyChooseUs_Image);
        return view('Admin.pages.SiteContent.manageContent', compact('logo', 'phone', 'address', 'footer_description', 'footer_copyright', 'whyChooseUs_Heading', 'whyChooseUs_Description','whyChooseUs_Image'));
    }

    // // View Logo
    // public function showLogo()
    // {
    //     // $logo = SiteContent::select('logo', 'id')->first();
    //     $logo = SiteContent::where('type', 'logo')->first(); // Get the first row where type is 'phone'

    //     // dd($logo);
    //     return view('Admin.pages.SiteContent.manageLogo', compact('logo'));
    // }
    // // View Phone
    // public function showPhone()
    // {
    //     // $content = SiteContent::select('phone', 'id')->get();
    //     $content = SiteContent::where('type', 'phone')->first(); // Get the first row where type is 'phone'

    //     // dd($content);
    //     return view('Admin.pages.SiteContent.managePhone', compact('content'));
    // }


    // Upload Logo
    public function uploadLogo(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $imagePath = null;

        // Handle file upload
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('user/assets/images/logo');
            $image->move($destinationPath, $imageName);

            $imagePath = 'user/assets/images/logo/' . $imageName;

            // Check if logo ID exists in the request
            if ($request->has('logoId') && !empty($request->input('logoId'))) {
                // Update the existing record
                $uploadLogo = SiteContent::find($request->input('logoId'));
                if ($uploadLogo) {
                    $uploadLogo->logo = $imagePath; // Update the file path
                    $uploadLogo->save();

                    $notification = [
                        'message' => 'Logo updated successfully!',
                        'alert-type' => 'success',
                    ];
                    return redirect()->back()->with($notification);
                } else {
                    // If logo ID is invalid
                    $notification = [
                        'message' => 'Logo ID not found.',
                        'alert-type' => 'error',
                    ];
                    return redirect()->back()->with($notification);
                }
            } else {
                // Create a new record
                $uploadLogo = new SiteContent();
                $uploadLogo->type = 'logo'; // Store the file path
                $uploadLogo->logo = $imagePath; // Store the file path
                $uploadLogo->save();

                $notification = [
                    'message' => 'Logo uploaded successfully!',
                    'alert-type' => 'success',
                ];
                return redirect()->back()->with($notification);
            }
        }

        $notification = [
            'message' => 'No file uploaded.',
            'alert-type' => 'error',
        ];
        return redirect()->back()->with($notification);
    }




    // Upload Phone
    public function uploadPhone(Request $request)
    {
        // Validate the phone field
        $request->validate([
            'phone' => 'required|string',
        ]);

        // Check if content ID exists in the request
        if ($request->has('contentId') && !empty($request->input('contentId'))) {
            // Update the existing record
            $uploadContent = SiteContent::find($request->input('contentId'));
            if ($uploadContent) {
                $uploadContent->phone = $request->phone;
                $uploadContent->save();

                $notification = [
                    'message' => 'Phone updated successfully!',
                    'alert-type' => 'success',
                ];
                return redirect()->back()->with($notification);
            } else {
                // If content ID is invalid
                $notification = [
                    'message' => 'Content ID not found.',
                    'alert-type' => 'error',
                ];
                return redirect()->back()->with($notification);
            }
        } else {
            // Create a new record
            $uploadContent = new SiteContent();
            $uploadContent->type = 'phone'; // Store the phone field
            $uploadContent->phone = $request->phone; // Store the phone field
            $uploadContent->save();

            $notification = [
                'message' => 'Phone uploaded successfully!',
                'alert-type' => 'success',
            ];
            return redirect()->back()->with($notification);
        }
    }


    // Upload Why Choose Us Heading
    public function uploadWhyChooseHeading(Request $request)
    {
        // Validate the why_choose_us_heading field
        $request->validate([
            'why_choose_us_heading' => 'required|string',
        ]);

        // Check if content ID exists in the request
        if ($request->has('contentId') && !empty($request->input('contentId'))) {
            // Update the existing record
            $uploadContent = SiteContent::find($request->input('contentId'));
            if ($uploadContent) {
                $uploadContent->why_choose_us_heading = $request->why_choose_us_heading;
                $uploadContent->save();

                $notification = [
                    'message' => 'Why Choose Us Heading updated successfully!',
                    'alert-type' => 'success',
                ];
                return redirect()->back()->with($notification);
            } else {
                // If content ID is invalid
                $notification = [
                    'message' => 'Content ID not found.',
                    'alert-type' => 'error',
                ];
                return redirect()->back()->with($notification);
            }
        } else {
            // Create a new record
            $uploadContent = new SiteContent();
            $uploadContent->type = 'why_choose_us_heading';
            $uploadContent->why_choose_us_heading = $request->why_choose_us_heading;
            $uploadContent->save();

            $notification = [
                'message' => 'Why Choose Us Heading uploaded successfully!',
                'alert-type' => 'success',
            ];
            return redirect()->back()->with($notification);
        }
    }


    // Upload Why Choose Us Description
    public function uploadWhyChooseDescription(Request $request)
    {
        // Validate the why_choose_us_description field
        $request->validate([
            'why_choose_us_description' => 'required|string',
        ]);

        // Check if content ID exists in the request
        if ($request->has('contentId') && !empty($request->input('contentId'))) {
            // Update the existing record
            $uploadContent = SiteContent::find($request->input('contentId'));
            if ($uploadContent) {
                $uploadContent->why_choose_us_description = $request->why_choose_us_description;
                $uploadContent->save();

                $notification = [
                    'message' => 'Why Choose Us Description updated successfully!',
                    'alert-type' => 'success',
                ];
                return redirect()->back()->with($notification);
            } else {
                // If content ID is invalid
                $notification = [
                    'message' => 'Content ID not found.',
                    'alert-type' => 'error',
                ];
                return redirect()->back()->with($notification);
            }
        } else {
            // Create a new record
            $uploadContent = new SiteContent();
            $uploadContent->type = 'why_choose_us_description';
            $uploadContent->why_choose_us_description = $request->why_choose_us_description;
            $uploadContent->save();

            $notification = [
                'message' => 'Why Choose Us Description uploaded successfully!',
                'alert-type' => 'success',
            ];
            return redirect()->back()->with($notification);
        }
    }


    // Upload Why Choose Us Image
    public function uploadWhyChooseImage(Request $request)
    {
        // Validate the why_choose_us_image field
        $request->validate([
            'why_choose_us_image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Handle file upload
        if ($request->hasFile('why_choose_us_image')) {
            $image = $request->file('why_choose_us_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('user/assets/images/provide/');
            $image->move($destinationPath, $imageName);

            $imagePath = 'user/assets/images/provide/' . $imageName;

            // Check if content ID exists in the request
            if ($request->has('contentId') && !empty($request->input('contentId'))) {
                // Update the existing record
                $uploadContent = SiteContent::find($request->input('contentId'));
                if ($uploadContent) {
                    $uploadContent->why_choose_us_image = $imagePath; // Update the file path
                    $uploadContent->save();

                    $notification = [
                        'message' => 'Why Choose Us Image updated successfully!',
                        'alert-type' => 'success',
                    ];
                    return redirect()->back()->with($notification);
                } else {
                    // If content ID is invalid
                    $notification = [
                        'message' => 'Content ID not found.',
                        'alert-type' => 'error',
                    ];
                    return redirect()->back()->with($notification);
                }
            } else {
                // Create a new record
                $uploadContent = new SiteContent();
                $uploadContent->type = 'why_choose_us_image';
                $uploadContent->why_choose_us_image = $imagePath; // Store the file path
                $uploadContent->save();

                $notification = [
                    'message' => 'Why Choose Us Image uploaded successfully!',
                    'alert-type' => 'success',
                ];
                return redirect()->back()->with($notification);
            }
        }

        $notification = [
            'message' => 'No file uploaded.',
            'alert-type' => 'error',
        ];
        return redirect()->back()->with($notification);
    }

    // Upload Address
    public function uploadAddress(Request $request)
    {
        // Validate the address field
        $request->validate([
            'address' => 'required|string',
        ]);

        // Check if content ID exists in the request
        if ($request->has('contentId') && !empty($request->input('contentId'))) {
            // Update the existing record
            $uploadContent = SiteContent::find($request->input('contentId'));
            if ($uploadContent) {
                $uploadContent->footer_address = $request->address;
                $uploadContent->save();

                $notification = [
                    'message' => 'Address updated successfully!',
                    'alert-type' => 'success',
                ];
                return redirect()->back()->with($notification);
            } else {
                // If content ID is invalid
                $notification = [
                    'message' => 'Content ID not found.',
                    'alert-type' => 'error',
                ];
                return redirect()->back()->with($notification);
            }
        } else {
            // Create a new record
            $uploadContent = new SiteContent();
            $uploadContent->type = 'address'; // Store the address field
            $uploadContent->footer_address = $request->address; // Store the address field
            $uploadContent->save();

            $notification = [
                'message' => 'Address uploaded successfully!',
                'alert-type' => 'success',
            ];
            return redirect()->back()->with($notification);
        }
    }

    // Upload Footer Content
    public function uploadFooterDescription(Request $request)
    {
        // Validate the footer address field
        $request->validate([
            'footer_description' => 'required|string',
        ]);

        // Check if content ID exists in the request
        if ($request->has('contentId') && !empty($request->input('contentId'))) {
            // Update the existing record
            $uploadContent = SiteContent::find($request->input('contentId'));
            if ($uploadContent) {
                $uploadContent->footer_content = $request->footer_description;
                $uploadContent->save();

                $notification = [
                    'message' => 'Footer content updated successfully!',
                    'alert-type' => 'success',
                ];
                return redirect()->back()->with($notification);
            } else {
                // If content ID is invalid
                $notification = [
                    'message' => 'Content ID not found.',
                    'alert-type' => 'error',
                ];
                return redirect()->back()->with($notification);
            }
        } else {
            // Create a new record
            $uploadContent = new SiteContent();
            $uploadContent->type = 'footer_content';
            $uploadContent->footer_content = $request->footer_description;
            $uploadContent->save();

            $notification = [
                'message' => 'Footer content uploaded successfully!',
                'alert-type' => 'success',
            ];
            return redirect()->back()->with($notification);
        }
    }

    // Upload Footer Copyright
    public function uploadFooterCopyright(Request $request)
    {
        // Validate the footer copyright field
        $request->validate([
            'footer_copyright' => 'required|string',
        ]);

        // Check if content ID exists in the request
        if ($request->has('contentId') && !empty($request->input('contentId'))) {
            // Update the existing record
            $uploadContent = SiteContent::find($request->input('contentId'));
            if ($uploadContent) {
                $uploadContent->footer_copyright = $request->footer_copyright;
                $uploadContent->save();

                $notification = [
                    'message' => 'Footer copyright updated successfully!',
                    'alert-type' => 'success',
                ];
                return redirect()->back()->with($notification);
            } else {
                // If content ID is invalid
                $notification = [
                    'message' => 'Content ID not found.',
                    'alert-type' => 'error',
                ];
                return redirect()->back()->with($notification);
            }
        } else {
            // Create a new record
            $uploadContent = new SiteContent();
            $uploadContent->type = 'footer_copyright';
            $uploadContent->footer_copyright = $request->footer_copyright;
            $uploadContent->save();

            $notification = [
                'message' => 'Footer copyright uploaded successfully!',
                'alert-type' => 'success',
            ];
            return redirect()->back()->with($notification);
        }
    }


    
}
