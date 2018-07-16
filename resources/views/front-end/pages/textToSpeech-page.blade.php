@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">

    <style media="screen">
      p.justfy-content{
        font-size: 16px;
        text-align: justify;
      }
      p.justfy{
        text-align: justify;
      }
    </style>
@endsection


@section('title','text to speech')


@section('content')

    <div id="page_intro" style="background-image: url({{asset('images/siteImages/speechTechPage.jpeg')}})">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-6">
                    <p class="page_intro_text justfy"><strong>Natiq</strong> is the professional state-of-the-art text-to-speech software provided by RDI that enables users to convert the Arabic row text into spoken words with different natural voices. This technology is built on Tashkeel (RDI Diacretizer) that converts the row text into diacretized text so that it can be converted into speech easily. This easy-to-use robust software, admitting different users’ preferences, enables seamless audio-powered applications to enrich user experiences and engage audiences.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">NATIQ FEATURES</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">


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
                              Full automatic text-to-speech conversion supported by abbreviation expansion and number-to-text conversion modules.
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
                            Full automatic text-to-speech conversion supported by abbreviation expansion and number-to-text conversion modules.
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
                                        Provide built-in user-preferences custom dictionary.
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
                                        Support major text file formats (TXT, DOC, DOCX, HTML, and PDF).
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
                                        Natiq facilitates the process of following the text through highlighting the text currently being read.
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
                                        High-quality natural-sounding male & female voices.
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
                                        Support exporting outputs to audio files.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>




                    <!-- <div class="col-md-5">
                        <ul class="page-block-list list-unstyled">
                            <li style="margin-top:10px;">
                              <div class="row">
                                <div class="col-md-2">
                                  <img class="services-image" src="http://localhost:8000/images/siteImages/slider1-2.png" alt="Customer Testimonails" style="hight:50px;width:50px; margin-right:5px;">
                                </div>
                                <div class="col-md-10">
                                  Full automatic text-to-speech conversion supported by abbreviation expansion and number-to-text conversion modules.
                                </div>
                              </div>
                          </li>
                            <li style="margin-top:10px;">
                              <div class="row">
                                <div class="col-md-2">
                                  <img class="services-image" src="http://localhost:8000/images/siteImages/slider1-2.png" alt="Customer Testimonails" style="hight:50px;width:50px; margin-right:5px;">
                                </div>
                                <div class="col-md-10">
                                  Ability to enforce/ignore input diacritics.
                                </div>
                              </div>

                            </li>

                            <li style="margin-top:10px;">
                              <div class="row">
                                <div class="col-md-2">
                                    <img class="services-image" src="http://localhost:8000/images/siteImages/slider1-2.png" alt="Customer Testimonails" style="hight:50px;width:50px; margin-right:5px;">
                                  </div>
                                  <div class="col-md-10">
                                    Provide built-in user-preferences custom dictionary.
                                  </div>
                              </div>

                              </li>

                        </ul>
                    </div> -->

                    <!-- <div class="col-md-5 col-md-offset-1">
                        <ul class="page-block-list list-unstyled">
                            <li>Support major text file formats (TXT, DOC, DOCX, HTML, and PDF).</li>
                            <li style="margin-top:10px;">Natiq facilitates the process of following the text through highlighting the text currently being read.</li>
                            <li style="margin-top:10px;">High-quality natural-sounding male & female voices.</li>
                            <li style="margin-top:10px;">Support exporting outputs to audio files.</li>

                        </ul>
                    </div> -->


                    <!-- <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/headPhone.png')}}">
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">WHY NATIQ FOR ARABIC TEXT TO SPEECH?</h2>
            <hr class="line"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <ul class="page-block-list">
                            <li>Natiq contains a set of models that specially designed to serve Arabic language, making the TTS model outperforms its general-model counterparts.</li>
                            <li>Natiq respects customer privacy and does not share his own input/output files with third parties. We can setup the solution environment at your side, train your employees and provide a full customer support service.</li>
                            <li>Natiq – which does not need retraining – is ready to start generating voice at the click of a button. It also provides customers with a range of options that allow them to control the system seamlessly, saving time and effort that other products may require.</li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">NATIQ FAQS</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion accordion-bg clearfix">

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Is it possible to install Natiq on mobile phones and tablets?</div>
                        <div class="acc_content clearfix">The program can be used on mobile phones and tablets through the web service (cloud version). We are working to provide a light-weight version to be installed on mobile phones and tablets in the near future.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Does Natiq provide a web reader?</div>
                        <div class="acc_content clearfix">Natiq is a standalone service and software, but it can be customized to be integrated with third parties.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Can Natiq deal with abbreviations and numbers?</div>
                        <div class="acc_content clearfix">Yes, Natiq preprocessor has two powerful modules for abbreviation expansion as well as number-to-text conversion.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Does Natiq support real time performance?</div>
                        <div class="acc_content clearfix">It depends on the generated audio file length. Natiq has 0.9X real time generation for an X-second length audio file.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>How Natiq deals with dialects?</div>
                        <div class="acc_content clearfix">Natiq can neglect them at the preprocessing stage. Also it can force the generation module to use them as is. It depends on user preferences.</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection
