@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">
@endsection


@section('title','Mobile Applications')


@section('content')
    <div class="page-block" style="display: none;">
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">MEDICINE READER


            </h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead">
                            The first application designed to help visually impaired people to identify data on drugs using a smart phone camera. The application identifies the names of different medicines as well as their prices and reasons for use through the barcodes located on the medicine package.
                            The application displays the results and converts them into audio outputs for the user to listen to. The program contains a large database of pharmaceutical data.


                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/mobile-app-section1.jpeg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">ANA SHAYEF FOR BANKNOTES & COLORS READING



            </h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead">
                            The first application designed to help visually impaired people to identify the value of banknotes and colors names using smart phone camera.
                            The application can recognize the value of banknotes from different angles. The application displays the results and converts them into audio outputs for the user to listen to.



                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/mobile-app-section2.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">FI KHEDMETAK



            </h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead">
                            The application is designed to enable people with hearing disabilities to deal and communicate with services providers in supermarkets through the use of a large database of store-related images. The application converts selected images to user-defined markings as well as textual outputs understood by the service provider in the store.



                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/mobile-app-section3.jpeg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection