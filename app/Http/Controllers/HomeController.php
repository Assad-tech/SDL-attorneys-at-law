<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsNotification;
use App\Models\ContactUs;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    // HomePage
    public function index()
    {
        return view('User.home.index');
    }


    // Attorneys 
    public function attorneys(){

        return view('User.meetOurTeam.attorneys');
    }

    // Supporing Staff
    public function supportingStaff(){

        return view('User.meetOurTeam.supportingStaff');
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

        return view('User.contact.contact');
    }
    // Blog
    public function blog()
    {
        return view('User.Blog.blog');
    }

    // Practice Areas
    public function practiceAreas()
    {
        return view('User.practiceAreas.practiceAreas');
    }

}
