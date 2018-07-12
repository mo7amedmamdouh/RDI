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


    public function e_learning(){
        return view('front-end.pages.e-learning.e_learning');
    }

    public function e_learning_special_needs(){
        return view('front-end.pages.e-learning.e_learning_special_needs');

    }
    public function e_training(){
        return view('front-end.pages.e-learning.e_training');

    }

    public function languages_learning(){
        return view('front-end.pages.e-learning.languages_training');

    }

    public function mobile_applications(){
        return view('front-end.pages.e-learning.mobile_applications');

    }

    public function e_publishing(){
        return view('front-end.pages.e-learning.e_publishing');

    }

    public function animation(){
        return view('front-end.pages.e-learning.animation');
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

    public function industries(){
        return view('front-end.pages.industries');
    }

    public function about_us(){
        return view('front-end.pages.about.about_us');

    }

    public function projects(){
        return view('front-end.pages.about.projects');

    }

    public function scientific_publishers(){
        return view('front-end.pages.about.scientific_publisher');

    }

    public function awards(){
        return view('front-end.pages.about.awards');

    }

    public function structure(){
        return view('front-end.pages.about.structure');

    }

    public function news(){
        return view('front-end.pages.about.news');

    }

    public function jobs(){
                return view('front-end.pages.about.jobs');
    }

    public function contact_us(){
        return view('front-end.pages.about.contact-us');
    }
}

