@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">
@endsection


@section('title','hand Written')


@section('content')

    <div id="page_intro" style="display: none">
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">ABOUT OCR HANDWRITTEN</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="page_intro_textv2">RDI Arabic handwriting recognition technology converts Arabic handwriting images into text.</p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/hand.jpeg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">OCR HANDWRITTEN FEATURES</h2>
            <hr class="line"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{--<div class="col-md-7">--}}
                        {{--<ul class="page-block-list">--}}
                            {{--<li>Open vocabulary coverage. Can recognize any Arabic words as sequence of Arabic characters.</li>--}}
                            {{--<li>As settings to tune the writing speed and the intra-words spaces.</li>--}}
                            {{--<li>As API to be integrated with other applications.</li>--}}
                            {{--<li>Possibility to provide n-best alternatives for the recognition result.</li>--}}
                            {{--<li>Can work either online or in batch mode. </li>--}}
                            {{--<li>Ability to correct the recognition errors using a post processing editor.</li>--}}

                        {{--</ul>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-5">--}}
                        {{--<img src="{{asset('images/siteImages/words.jpeg')}}">--}}
                    {{--</div>--}}

                    <div class="row">
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-sm-2 col-xs-3">
                                    <div class="feature-box " data-animate="fadeIn">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line-check"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10 col-xs-9">
                                    <p class="justfy-content">
                                        Open vocabulary coverage. Can recognize any Arabic words as sequence of Arabic characters.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <div class="row">
                                <div class="col-sm-2 col-xs-3">
                                    <div class="feature-box " data-animate="fadeIn">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line-check"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10 col-xs-9">
                                    <p class="justfy-content">
                                        As settings to tune the writing speed and the intra-words spaces.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-sm-2 col-xs-3">
                                    <div class="feature-box " data-animate="fadeIn">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line-check"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10 col-xs-9">
                                    <p class="justfy-content">
                                        As API to be integrated with other applications.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <div class="row">
                                <div class="col-sm-2 col-xs-3">
                                    <div class="feature-box " data-animate="fadeIn">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line-check"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10 col-xs-9">
                                    <p class="justfy-content">
                                        Possibility to provide n-best alternatives for the recognition result.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-sm-2 col-xs-3">
                                    <div class="feature-box " data-animate="fadeIn">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line-check"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10 col-xs-9">
                                    <p class="justfy-content">
                                        Can work either online or in batch mode.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <div class="row">
                                <div class="col-sm-2 col-xs-3">
                                    <div class="feature-box " data-animate="fadeIn">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line-check"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10 col-xs-9">
                                    <p class="justfy-content">
                                        Ability to correct the recognition errors using a post processing editor.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">OCR HANDWRITTEN FAQS</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion accordion-bg clearfix">

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What is the format of the recognition result?</div>
                        <div class="acc_content clearfix">Unicode text format that can be processed by the higher level application.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>How does the batch mode work?</div>
                        <div class="acc_content clearfix">Do the handwriting recognition for whole paragraph with possibility to enhance the recognition accuracy using longer context based language models.</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection