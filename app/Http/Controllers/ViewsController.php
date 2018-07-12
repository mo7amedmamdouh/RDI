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

    public function textToSpeechPage(){
        return view('front-end.pages.textToSpeech-page');
    }

    public function speechRecognation(){
        return view('front-end.pages.speechRecognation-page');
    }

    public function hafss(){
        return view('front-end.pages.hafss-page');
    }

    public function typeWritten(){
        return view('front-end.pages.typeWritten-page');
    }

    public function handWritten(){
        return view('front-end.pages.handWritten-page');
    }

    public function sentimentAnalysis(){
        return view('front-end.pages.sentimentAnalysis-page');
    }

    public function arabicTextDiacritizer(){
        return view('front-end.pages.arabicTextDiacritizer-page');
    }

    public function nlpToolKit(){
        return view('front-end.pages.nlpToolKit-page');
    }
}
