@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">
@endsection


@section('title','E-Training')


@section('content')
    <div class="page-block" style="display: none;">
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">PROVIDE DECENT EMPLOYMENT OPPORTUNITIES FOR YOUTH USING INFORMATION TECHNOLOGY
            </h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead">
                            In 2017, RDI won the tender for the preparation of ‘training content’ aimed at developing the managerial skills of young people in (The Administrative and Executive Secretariat - Warehouse Management).

                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/e-training-section1.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">SUPPORT SKILLS FOR EMPLOYMENT OF PERSONS WITH DISABILITIES
            </h2>
            <hr class="line"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead">
                            In 2015, RDI won the tender for the preparation of ‘training content’ to support the employment of persons with disabilities, with an emphasis on ICT-based solutions.
                            Through e-learning solutions, PWD can train in some skills that provide them with jobs (in the field of graphics).



                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/e-training-section2.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection