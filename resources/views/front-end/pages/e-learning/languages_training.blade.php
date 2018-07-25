@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">
@endsection


@section('title','Language Training')


@section('content')
    <div class="page-block" style="display: none;">
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">TEACHING BUSINESS ARABIC FOR (NON-ARABIC) SPEAKERS

            </h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead justfy">
                            At the end of 2012, RDI won the tender for the implementation of a special web-site for the Al-Jazeera Media Network for the implementation of two levels of teaching Arabic language for business to (NON-ARABIC) speakers.


                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/lang-training-section1.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection
