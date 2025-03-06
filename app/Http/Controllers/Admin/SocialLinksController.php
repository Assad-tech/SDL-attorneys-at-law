<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinksController extends Controller
{
    // View All Social Links,
    public function manageSocialLinks()
    {
        // $socialLinks = SocialLink::all();
        $socialLinks = SocialLink::all()->keyBy('type'); // Key the collection by 'type'

        return view('Admin.pages.socialLinks.socialLinks', compact('socialLinks'));
    }

    // update Social Links
    public function updateSocialLinks(Request $request)
    {
        // Validate the inputs, allowing nullable fields
        $request->validate([
            'facebook' => 'nullable|url',
            'google_map' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
            'yepl' => 'nullable|url',
        ]);

        // Retrieve only the provided social links and their IDs
        $data = $request->only(['facebook', 'google_map', 'twitter', 'linkedin', 'instagram', 'yelp']);
        $ids = $request->input('ids', []); // Retrieve the IDs, default to an empty array
        // dd($request->all());
        foreach ($data as $type => $url) {
            if (array_key_exists($type, $ids)) { // Ensure the type exists in IDs
                SocialLink::updateOrCreate(
                    ['id' => $ids[$type]], // Match by the 'id'
                    [
                        'type' => $type,  // Ensure 'type' is set
                        'link' => $url,   // Update the 'link' column (null is allowed)
                        'status' => '1',  // Set 'status' to '1'
                    ]
                );
            }
        }


        // Prepare notification and redirect back
        $notification = [
            'message' => 'Social links updated successfully.',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
