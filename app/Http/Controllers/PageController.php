<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function villasPage(){
        return view('pages.villas');
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
    







}
