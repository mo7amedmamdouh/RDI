@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">
@endsection


@section('title','sentiment analysis')


@section('content')

    <div id="page_intro" style="background-image: url({{asset('images/siteImages/like.jpeg')}})">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-6">
                    <p class="page_intro_text"><strong>Araa</strong> is multi-resource ground-breaking complete solution, integrating Automatic Speech Recognition (ASR), Sentiment Analysis technologies, and Arabic Natural Language Processing (NLP) techniques to enable Arabic social media text, Audio and Video recordings to be analyzed for sentiment analysis purposes. It is considered one of the best Arabic </p>
                    {{--<a class="btn btn-lg get-started" href="https://www.rdi-sotoor.com/#/">TRY NOW!</a>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">ARAA FEATURES</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <ul class="page-block-list">
                            <li>Supported Data Sources include - But not limited to- Tweeter, Facebook, You tube, TV Channels, Recorded Phone Calls, customers owned database.</li>
                            <li>Recognize if the opinion expressed within content is positive, negative, or neutral.</li>
                            <li>Provide trends and topic clustering modules.</li>
                            <li>Recommend influencers, communities, and issues that you should address.</li>
                            <li>Support user defined word-exclusion list.</li>
                            <li>Build your own customizable powerful dashboards and reports to monitor trends almost in real-time.</li>
                            <li>Provide APIs to enable users to leverage the true value of sentiment analysis through integration with third parties.</li>
                            <li>Ability to learn new terms that may have different sentiments.</li>

                        </ul>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/emotions.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">WHY ARAA FOR ARABIC SENTIMENT ANALYSIS?</h2>
            <hr class="line"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <ul class="page-block-list">
                            <li>Araa contains a set of models that specially designed to serve Arabic language and its different dialects, making the sentiment analyzer outperforms its general-model counterparts.</li>
                            <li>Araa helps you to discover vital insights within the billions of Arabic conversations happening every day. it can be used to improve client’s communication with his customers and disclose out-of-sight information. Araa also goes beyond measuring just sentiment of the text through its different integrated powerful modules.</li>
                            <li>Araa respects customer privacy and does not share his own input/output data with third parties. We can setup the solution environment at your side, train your employees and provide a full customer support service.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">ARAA FAQS</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion accordion-bg clearfix">

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Can Araa analyze content posted by any Facebook user?</div>
                        <div class="acc_content clearfix">Araa can analyze public content posted by anyone as well as private content that client has authority to access.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What are the supported language by Araa?</div>
                        <div class="acc_content clearfix">Currently, Araa supports Arabic with different forms (MSA, Egyptian, and Gulf).</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What are the available software delivery methods of Araa?</div>
                        <div class="acc_content clearfix">Araa is available as API, indoor service, cloud-based, and on-premises solution.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What is the output of the API call?</div>
                        <div class="acc_content clearfix">Araa API returns results in a format of JSON or XML, it can be displayed programmatically when integrated with client’s application.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Is there a daily limit for processing?</div>
                        <div class="acc_content clearfix">Daily limit of processing depends mainly on client’s plan. Client can upgrade his plan to get more data retrieval and processing per day.</div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection