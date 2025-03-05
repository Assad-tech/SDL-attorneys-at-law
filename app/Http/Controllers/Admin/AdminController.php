<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    public function index()
    {

        // dd($allProperties);
        return view('admin.pages.index');
    }

    // public function datatables()
    // {
    //     $getAllContactUs = ContactUs::orderBy('id', 'desc')->get();
    //     foreach ($getAllContactUs as $key => $value) {
    //         $getAllContactUs[$key]->user_fullname = $value->first_name . ' ' . $value->last_name;
    //     }
    //     // return $getAllContactUs;
    //     // dd($getAllContactUs);
    //     // return view('admin.pages.contactUs', compact('getAllContactUs'));
    //     return DataTables::collection($getAllContactUs)->toJson();
    // }

    // public function contactUs()
    // {

    //     // dd($getAllContactUs);
    //     return view('Admin.pages.viewContactUs');
    // }

    // public function destroy()
    // {
    //     $id = request('id');
    //     $contactUs = ContactUs::find($id);
    //     $contactUs->delete();
    //     return response()->json(['success' => 'Contact Us deleted successfully.']);
    // }

    // get all contact us by yajra datatables

    // Admin Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
