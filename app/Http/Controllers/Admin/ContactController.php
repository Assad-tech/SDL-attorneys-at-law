<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{
    //
    public function manageContact()
    {
        $contact = Contact::first();
        // dd($contact);
        return view('Admin.pages.contact.manageContact', compact('contact'));
    }

    public function storeContact(Request $request)
    {

        $request->validate([
            'contact_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'side_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'contact_heading' => 'nullable|string',
            'phone' => 'nullable|string',
            'fax' => 'nullable|string',
            'address' => 'nullable|string',
            'office_hours_open' => 'nullable|string',
            'office_hours_closed' => 'nullable|string',
        ]);

        $contact = Contact::first(); // Assume there's only one record for the contact page

        if (!$contact) {
            $contact = new Contact();
        }
        // dd($contact);

        // Handle contact_banner
        if ($request->hasFile('contact_banner')) {
            if ($contact->contact_banner && File::exists(public_path($contact->contact_banner))) {
                File::delete(public_path($contact->contact_banner)); // Unlink old image
            }
            $contact_banner = $request->file('contact_banner');
            $path = $contact_banner->move('user/assets/images/home/', $contact_banner->getClientOriginalName());
            $contact->contact_banner = str_replace('\\', '/', $path); // Normalize the path to use forward slashes
        }

        // Handle side_image
        if ($request->hasFile('side_image')) {
            if ($contact->side_image && File::exists(public_path($contact->side_image))) {
                File::delete(public_path($contact->side_image)); // Unlink old image
            }
            $side_image = $request->file('side_image');
            $path = $side_image->move('user/assets/images/advisors/', $side_image->getClientOriginalName());
            $contact->side_image = str_replace('\\', '/', $path); // Normalize the path to use forward slashes
        }

        $contact->contact_heading = $request->contact_heading;
        $contact->phone = $request->phone;
        $contact->fax = $request->fax;
        $contact->address = $request->address;
        $contact->office_hours_open = $request->office_hours_open;
        $contact->office_hours_closed = $request->office_hours_closed;

        $contact->save();
        $notification = [
            'message' => 'Contact page updated successfully.',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
