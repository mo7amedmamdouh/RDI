@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">
@endsection


@section('title','2D & 3D Animation')


@section('content')
    <div class="page-block" style="display: none;">
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">MCIT – EGYPT

            </h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead justfy">
                            Within the scope of the Egyptian Ministry of Communications project to support and develop online content, RDI has implemented a project to transform 85 children's stories for the Ministry into two-dimensional animation.


                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/animation-section1.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">MHOMOS & BONDOK – KSA 

            </h2>
            <hr class="line"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead justfy">
                            The company has implemented the project of 30 episodes " MHOMOS & BONDOK Adventures", a three-dimensional animated series that deals with children's education of good and public morals. Episodes are prepared in simple classical Arabic.




                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/animation-section2.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection
