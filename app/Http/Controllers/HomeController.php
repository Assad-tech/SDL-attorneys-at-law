<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsNotification;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\ContactUs;
use App\Models\Home;
use App\Models\Property;
use App\Models\SupportingStaff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    // HomePage
    public function index()
    {

        $homeSection = Home::where('status', 1)->get();
        // dd($homeSection);
        return view('User.home.index',compact('homeSection'));
    }


    // Attorneys 
    public function attorneys(){

        return view('User.meetOurTeam.attorneys');
    }

    // Supporing Staff
    public function supportingStaff(){
        $banner = SupportingStaff::where('staff_banner', '!=', null)->first();
        $allStaff = SupportingStaff::where('staff_banner', '=', null)->get();
        return view('User.meetOurTeam.supportingStaff',compact('banner','allStaff'));
    }

    // meet-Our-Team
    public function meetOurTeam(){

        return view('User.meetOurTeam.meetOurTeam');
    }

    // Business & Corporate Law
    public function businessAndCorporateLaw(){

        return view('User.practiceAreas.businessAndCorporateLaw');
    }

    // Civil Litigation
    public function civilLitigation(){

        return view('User.practiceAreas.civilLitigation');
    }

    // construction contactor and disability law
    public function constructionContactorLaw(){

        return view('User.practiceAreas.constructionContactorAndDisabilityLaw');
    } 

    // Criminal Law
    public function criminalLaw(){

        return view('User.practiceAreas.criminalLaw');
    }

    // Probate
    public function probate(){

        return view('User.practiceAreas.probate');
    }

    // Estate Planning (Will and Trusts)
    public function estatePlanning(){
        return view('User.practiceAreas.estatePlanning');
    }

    // Family Law
    public function familyLaw(){
        return view('User.practiceAreas.familyLaw');
    }

    // Immigration
    public function immigration(){
        return view('User.practiceAreas.immigration');
    }

    // Personal Injury
    public function personalInjury(){
        return view('User.practiceAreas.personalInjury');
    }

    // Employment Law
    public function employmentLaw(){
        return view('User.practiceAreas.employmentLaw');
    }

    //Contact
    public function contactUs()
    {
        $contact = Contact::first();
        // remove non-numeric characters like (), -
        $contact->sanitized_phone = preg_replace('/\D/', '', $contact->phone);
        $contact->sanitized_fax = preg_replace('/\D/', '', $contact->fax);

        return view('User.contact.contact',compact('contact'));
    }
    // Blog
    public function blog()
    {
        // $blogData = Blog::all();
        $banner = Blog::where('type', 'banner')->first();
        $sponers = Blog::where('type', 'sponsor')->get();
        // dd($blogData);
        return view('User.Blog.blog',compact('banner','sponers'));
    }

    // Practice Areas
    public function practiceAreas()
    {
        return view('User.practiceAreas.practiceAreas');
    }

}
