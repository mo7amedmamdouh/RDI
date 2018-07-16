@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">
@endsection


@section('title','hafss')


@section('content')

    <div id="page_intro" style="background-image: url({{asset('images/siteImages/hafss.jpeg')}})">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-6">
                    <p class="page_intro_text"><strong>Hafss</strong> is an innovative technology for teaching the Holy Qur'an with the narration of Hafss on the authority of Assim. This is one of the most famous modes of reciting the Holy Qur'an. The main idea of the software depends on simulating the (session) of memorizing the Qur'an. Hafss recites the verse, asks the learner to do the same, and corrects the mistake, if any, orally and in writing. Then, Hafss asks the learner to recite it again and trains him/her on all rules of recitation until he/she gets Hafss' approval. Hafss is an easy-to-use software and it is highly accurate and quick.</p>
                    <a class="btn btn-lg get-started" href="http://www.hafss.net/">TRY NOW!</a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">HAFSS FEATURES</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{--<div class="col-md-7">--}}
                        {{--<ul class="page-block-list">--}}
                            {{--<li>Hafss provides an audio collection of attractive, famous poems that sum up the rules of Qur'an Tajweed (Tuhfat Al-Atfal).</li>--}}
                            {{--<li>Hafss can automatically analyze the recitation of the learner to decide about its correctness, and produce a comprehensive report about learner’s errors, if any.</li>--}}
                            {{--<li>Generate a detailed report setting out the occurrences of the mistakes committed by the learner.</li>--}}
                            {{--<li>Provide numerous textual, audio, and visual means to help learners enhance their recitation performance.</li>--}}
                            {{--<li>Provide consistent synchronization between speech spans and resultant text.</li>--}}
                            {{--<li>Animated and colored explanations that teach you how to easily produce the proper points of articulation.</li>--}}

                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-5 text-right">--}}
                        {{--<img src="{{asset('images/siteImages/hafss2.png')}}">--}}
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
                                        Hafss provides an audio collection of attractive, famous poems that sum up the rules of Qur'an Tajweed (Tuhfat Al-Atfal).
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
                                        Hafss can automatically analyze the recitation of the learner to decide about its correctness, and produce a comprehensive report about learner’s errors, if any.
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
                                        Generate a detailed report setting out the occurrences of the mistakes committed by the learner.
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
                                        Provide numerous textual, audio, and visual means to help learners enhance their recitation performance.
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
                                        Animated and colored explanations that teach you how to easily produce the proper points of articulation.
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
            <h2 class="page-block-header">WHY HAFSS FOR TAJWEED LEARNING?</h2>
            <hr class="line"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <ul class="page-block-list">
                            <li>Hafss© is unique among other Tajweed learning applications that can automatically analyze the recitation of the learner to decide about its correctness, and produce a comprehensive report about learner’s errors, if any.</li>
                            <li>Hafss has been declared first in the 2007 World Summit Award 2007 contest for best e-content/e-Learning track where about 850 other candidates from 160 countries had participated.</li>
                            <li>Hafss closes the feedback loop between the machine and learner which is essential for a successful learning process as what would be done by an experienced Qur’an teacher (Sheikh Al-Kuttab).</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">HAFSS FAQS</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion accordion-bg clearfix">

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>How Hafss works?</div>
                        <div class="acc_content clearfix">Hafss© recites a verse, asks the learner to imitate it, analyzes the learner’s utterance, hence reports automatically about mistakes (if any) via an oral as well as written report.<br>
                            If mistaken, the learner then tries iteratively to concentrate on correcting his/her pronunciation of the same given verse according to the report produced by Hafss© and with the aid of its explanatory means, until the approval of Hafss© is obtained.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Does Hafss teach Tajweed using the whole Quran?</div>
                        <div class="acc_content clearfix">No, Hafss uses only A selection of verses that include all Tajweed rules.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Can the user hear the Tajweed of the verses correctly as well as different explanations?</div>
                        <div class="acc_content clearfix">Yes, Hafss explanations are accompanied by graphic elements and audio recording of one of the famous announcers in the Egyptian Radio.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Can Hafss used to teach children?</div>
                        <div class="acc_content clearfix">Hafss is very effective with all family members regardless of their age or gender. It is also helpful with the various dialects adopted in some countries.</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/mf9uXuAP2lE" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection