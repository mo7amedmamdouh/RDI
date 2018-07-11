<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    /*
     * Return Home Page
     */
    public function homePage(){
        return view('front-end.pages.home-page');
    }
}
