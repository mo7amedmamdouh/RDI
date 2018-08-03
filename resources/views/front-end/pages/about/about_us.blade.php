@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">
    <style media="screen">

      #header.transparent-header{
        background-color: #385858;
        height: 100px;
      }
    </style>
@endsection


@section('title','About Us')


@section('content')
    <div class="page-block" style="display: none;">
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">WE SERVE ARABIC</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead justfy" style="font-weight:bold;">
                            <br>RDI or ‘The Engineering Company for the Development of Digital Systems’</b> began its journey on 1993 with a dream to develop a base that would convert raw ideas emerging from academia into workable prototypes, as well as providing an incubator for these prototypes that would allow further development until they reach the stage of commercial interest (products). These products come to the light with the effort of a team of expert programmers, research engineers and business developers who spend millions of working hours turning ideas and dreams to usable, useful applications to the society and creating one-of-a-kind Egyptian company.




                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/about-us-section-1.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">MISSION</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <p class="lead  text-center">
                            Realizing leadership and innovation in the CIT world through an economically successful corporation that provides outstanding products & services seeking for the development of the society.



                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection
