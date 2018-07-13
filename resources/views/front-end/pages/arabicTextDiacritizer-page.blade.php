@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">
@endsection


@section('title','Tashkeel')


@section('content')

    <div id="page_intro" style="background-image: url({{asset('images/siteImages/tashkeel.jpeg')}})">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-6">
                    <p class="page_intro_text"><strong>Tashkeel</strong>is the machine translation system provided by RDI that enables users to convert Arabic row data into vocalized text through adding diacritics to bare letters. It combines statistical and rule-based approaches in order to make advantage of their integration while avoiding their disadvantages. In addition to being a standalone system, its accurate outputs can be used to improve the performance of many other systems such as Text to Speech, Automatic Arabic Speech Recognition, and Search Engines.</p>
                    {{--<a class="btn btn-lg get-started" href="https://www.rdi-sotoor.com/#/">TRY NOW!</a>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">TASHKEEL FEATURES</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <ul class="page-block-list">
                            <li>Support morphological and syntactic diacritization with the possibility of using each separately.</li>
                            <li>Has an average diacritization speed of 35 words per second when using CPU while its speed reaches 150 words per second with the GPU.</li>
                            <li>Ability to enforce or ignore input diacritics.</li>
                            <li>Support user preferences list of diacritized words.</li>
                            <li>Support major text formats for inputs and outputs (TXT, DOC(X), ODT, RTF).</li>
                            <li>Ability to diacritize English words written in Arabic letters as well as Arabic words that has not been seen before with high accuracy.</li>

                        </ul>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/tashkeel2.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">WHY TASHKEEL FOR ARABIC DIACRITIZATION?</h2>
            <hr class="line"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <ul class="page-block-list">
                            <li>Tashkeel contains a set of models that specially designed to serve Arabic language, making the recognizer outperforms its general-model counterparts.</li>
                            <li>Tashkeel improves your personal and business productivity as it is 40 times faster than manual diacritization with the possibility of faster processing rates using higher hardware specifications.</li>
                            <li>Tashkeel can be used to improve the performance of many other systems such as Text to Speech, Automatic Arabic Speech Recognition, and Search Engines.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">TASHKEEL FAQS</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion accordion-bg clearfix">

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Can Tashkeel pull text from a .DOCX file?</div>
                        <div class="acc_content clearfix">Yes, Tashkeel supports many text formats such as TXT, DOC(X), ODT, and RTF.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Can Tashkeel process an input text that already has diacritics?</div>
                        <div class="acc_content clearfix">Yes, Tashkeel can handle the diacritized input in two ways as desired by the user. It can process the entire text or just add diacritics to bare letters.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Can Tashkeel generate only the morphological diacritics while ignoring the syntactic diacritics?</div>
                        <div class="acc_content clearfix">Yes, Tashkeel has the ability to use each type of diacritics separately.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What will happen if a text contains numbers or English letters is entered?</div>
                        <div class="acc_content clearfix">Tashkeel has a preprocessing module that can recognize and set aside non-Arabic characters while preserving their contexts and then displaying them as they are in the output.</div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection