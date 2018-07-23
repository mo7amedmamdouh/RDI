@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">
@endsection


@section('title','speech recognation')


@section('content')

    <div id="page_intro" style="background-image: url({{asset('images/siteImages/mice.jpeg')}})">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-6">d
                    <p class="page_intro_text"><strong>Kateb</strong> is the real time Automatic Speech Recognition (ASR) software solution that transcribes Arabic voice from recorded audio files into a fully editable and searchable text files. Besides supporting Modern Standard Arabic (MSA), it supports the Egyptian Dialectical Arabic. Kateb provides one of the best recognition experiences by using an innovative technology with high, fast and reliable dictation rates.</p>
                    <a class="btn btn-lg get-started" href="https://rdi-kateb.com/#/">TRY NOW!</a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">KATEB FEATURES</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{--<div class="col-md-7">--}}
                        {{--<ul class="page-block-list">--}}
                            {{--<li>Support different audio sampling rates. 16KHZ (16 bit per sample) sampling rate is recommended.</li>--}}
                            {{--<li>Kateb has a real time performing recognizer that transcribes Arabic voice at least 5 times faster than typing while maintaining high recognition rates.</li>--}}
                            {{--<li>Support major audio/video file formats as well as all types of files that follow the FFmpeg formats.</li>--}}
                            {{--<li>Transcribed text can be saved in one of the following file formats:--}}
                                {{--<ul style="list-style-type:circle">--}}
                                    {{--<li>TXT, CSV</li>--}}
                                    {{--<li>HTML, RTF, ODT and DOCX</li>--}}
                                    {{--<li>PDF (searchable and/or secured)</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li>Provide consistent synchronization between speech spans and resultant text.</li>--}}
                            {{--<li>Kateb admits large vocabulary, thus it has ability to recognize wide range of unusual Arabic words.</li>--}}
                            {{--<li>Kateb has a speech and silence detection module that precedes the recognizer.</li>--}}

                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-5 text-right">--}}
                        {{--<img src="{{asset('images/siteImages/hz.png')}}">--}}
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
                                        Support different audio sampling rates. 16KHZ (16 bit per sample) sampling rate is recommended.
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
                                        Kateb has a real time performing recognizer that transcribes Arabic voice at least 5 times faster than typing while maintaining high recognition rates.
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
                                        Support major audio/video file formats as well as all types of files that follow the FFmpeg formats.
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
                                        Transcribed text can be saved in one of the following file formats:
                                        TXT, CSV , HTML, RTF, ODT and DOCX , PDF (searchable and/or secured)
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
                                        Provide consistent synchronization between speech spans and resultant text.
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
                                        Kateb admits large vocabulary, thus it has ability to recognize wide range of unusual Arabic words.
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
                                        Kateb has a speech and silence detection module that precedes the recognizer.
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
            <h2 class="page-block-header">WHY KATEB FOR ARABIC ASR?</h2>
            <hr class="line"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <ul class="page-block-list">
                            <li>Kateb contains a set of models that specially designed to serve Arabic language, making the recognizer outperforms its general-model counterparts.</li>
                            <li>Kateb improves your personal and business productivity as it is 5 times faster than typing with the possibility of faster recognition rates using higher hardware specifications.</li>
                            <li>Kateb respects customer privacy and does not share his own input/output files with third parties. We can setup the solution environment at your side, train your employees and provide a full customer support service.</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">KATEB FAQS</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion accordion-bg clearfix">

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Can Kateb transcribe dialectical Arabic? Can it transcribe Gulf?</div>
                        <div class="acc_content clearfix">Kateb can transcribe Egyptian Dialectical Arabic only. Gulf Dialectical Arabic will be supported in future releases.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What type of audio files does Kateb need?</div>
                        <div class="acc_content clearfix">Kateb is able to recognize any audio file that follows the FFmpeg formats (WAV, MP3, MP4, 3GP, AMR … etc.). </div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Does Kateb support video files?</div>
                        <div class="acc_content clearfix">Yes, Kayeb can transcribe voice from different video files that follow the FFmpeg formats.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Can Kateb be installed on mobile devices?</div>
                        <div class="acc_content clearfix">The current version of Kateb is server based only. A light version for mobile devices will be available in near future.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Does Kateb support real time performance?</div>
                        <div class="acc_content clearfix">Yes, Kateb has 0.5X real time recognition with consistent synchronization between speech spans and resultant text. Using higher hardware specifications would make it faster.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What is the optimal sampling rate for recognition purposes?</div>
                        <div class="acc_content clearfix">The preferred audio sampling rate is 16KHZ (16 bit per sample).</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Can Kateb handle the English expressions that could appear in the Arabic context?</div>
                        <div class="acc_content clearfix">Yes, Kateb can recognize the English words that added in the vocabulary if they pronounced in Arabic.</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection