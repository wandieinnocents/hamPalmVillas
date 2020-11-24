<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function villasPage(){
        return view('pages.villas');
    }

    public function SingleBedroomVillas(){
        return view('pages.7BedroomVillas');
    }

    public function ammenitiesPage(){
        return view('pages.amenities');
    }

    public function constructionStatusPage(){
        return view('pages.constructionstatus');
    }

    public function salesPage(){
        return view('pages.sales');
    }


    public function aboutUsPage(){
        return view('pages.aboutus');
    }

    public function House2Villas(){
        return view('pages.house_two');
    }

    public function house3Villas(){
        return view('pages.house_three_details');
    }
    







}
