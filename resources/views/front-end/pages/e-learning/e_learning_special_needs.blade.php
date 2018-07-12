@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">
@endsection


@section('title','E-Learning Special Needs')


@section('content')
    <div class="page-block" style="display: none;">
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">PHOTOSHOP LEARNING</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead">
                            The application teaches Photoshop to people with hearing impairments by presenting various tutorials accompanied by videos designed in sign language.



                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/e-learning-special-needs-section1.jpeg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">COMPUTER LITERACY</h2>
            <hr class="line"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead">
                            The program aims to teach the principles and basics of using the computer for people with hearing disabilities by presenting the various tutorials accompanied by videos designed in sign language.


                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/e-learning-special-needs-section2.jpeg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">CURRICULUM FOR THE PRIMARY STAGE FOR PEOPLE WITH SPECIAL NEEDS</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead">
                            At the beginning of 2012, RDI won the tenders for the implementation of educational curricula for children with special needs who are visually impaired and hearing impaired.
                            The company implemented the curricula of the fifth and sixth grades of the primary and the training of teachers and students on the productive curricula.
                            The company implemented these curricula and training in two deaf and dumb schools and two schools for the blind under the supervision of the Egyptian Ministry of Communications and Information, the Egyptian Ministry of Education, the United Nations Development Program and the Islamic Development Bank.

                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/e-learning-special-needs-section3.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection