@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/home.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('include/rs-plugin/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('include/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('include/rs-plugin/css/navigation.css')}}">
    <style media="screen">

    .services-image{
        display: block;width: 64px !important; height: 64px; margin:0 auto;
    }
    .testi-content p:before, .testi-content p:after{
      content: "" !important;
    }
    </style>
@endsection


@section('title','Home')


@section('content')

    <div id="slider1" style="background-image: url({{asset('images/siteImages/sliderBackground.jpg')}})">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="col-md-4 col-md-push-4">
                    <img class="slider1-img" src="{{asset('images/siteImages/slider1-1.png')}}" />
                    <h3 class="slider1-content">Sotoor is the Arabic typewritten optical character recognition (OCR)</h3>
                    <a class="btn btn-lg get-started" href="{{route('typeWritten')}}">GET STARTED!</a>
                </div>
            </div>

            <div class="item">
                <div class="col-md-4 col-md-push-4">
                    <img class="slider1-img" src="{{asset('images/siteImages/slider1-2.png')}}" />
                    <h3 class="slider1-content">Kateb is the real time Automatic Speech Recognition (ASR)</h3>
                    <a class="btn btn-lg get-started" href="{{route('speechRecognation')}}">GET STARTED!</a>
                </div>
            </div>

            <div class="item">
                <div class="col-md-4 col-md-push-4">
                    <img class="slider1-img" src="{{asset('images/siteImages/slider1-3.png')}}" />
                    <h3 class="slider1-content">Natiq is the professional state-of-the-art text-to-speech software (TTS)</h3>
                    <a class="btn btn-lg get-started" href="{{route('textToSpeechPage')}}">GET STARTED!</a>
                </div>
            </div>

            <div class="item">
                <div class="col-md-4 col-md-push-4">
                    <img class="slider1-img" src="{{asset('images/siteImages/slider1-4.png')}}" />
                    <h3 class="slider1-content">Hafss is an innovative technology for teaching the Holy Qur'an</h3>
                    <a class="btn btn-lg get-started" href="{{route('hafss')}}">GET STARTED!</a>
                </div>
            </div>

            <div class="item">
                <div class="col-md-4 col-md-push-4">
                    <img class="slider1-img" src="{{asset('images/siteImages/slider1-5.png')}}" />
                    <h3 class="slider1-content">Tashkeel is the machine translation system and adding diacritics to bare letters</h3>
                    <a class="btn btn-lg get-started" href="{{route('arabicTextDiacritizer')}}">GET STARTED!</a>
                </div>
            </div>

            <div class="item">
                <div class="col-md-4 col-md-push-4">
                    <img class="slider1-img" src="{{asset('images/siteImages/slider1-6.png')}}" />
                    <h3 class="slider1-content">Araa is considered one of the best Arabic Sentiment Analysis solutions in terms of quality, price, accuracy and speed</h3>
                    <a class="btn btn-lg get-started" href="{{route('sentimentAnalysis')}}">GET STARTED!</a>
                </div>
            </div>

        </div>
    </div>

    <div id="company-description">
        <div class="container">
            <div class="col-md-12">
                <p>RDI or ‘The Engineering Company for the Development of Digital Systems’ began its journey on 1993 with a dream to develop a base that would convert raw ideas emerging from academia into workable prototypes, as well as providing an incubator for these prototypes that would allow further development until they reach the stage of commercial interest (products). These products come to the light with the effort of a team of expert programmers, research engineers and business developers who spend millions of working hours turning ideas and dreams to usable, useful applications to the society and creating one-of-a-kind Egyptian company.</p>
            </div>
        </div>
    </div>

    <div id="our-services">
        <div class="container">

            <div class="col-md-12 text-center" >
                <h2 class="section-header">OUR SERVICES</h2>
                <hr class="line"/>
            </div>
            <div class="col-md-12">

                <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget" data-loop="true"  data-margin="20" data-items-xs="1" data-items-sm="2" data-items-lg="3">

                    <div class="oc-item">
                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-content">
                                  <a href="{{route('typeWritten')}}">
                                    <img class="services-image" src="{{asset('images/siteImages/slider1-1.png')}}" alt="Customer Testimonails"></a>

                                    <h3 class="text-center"><a href="{{route('typeWritten')}}">SOTOOR</a></h3>
                                    <p>Sotoor is the all-in-one Arabic typewritten optical character recognition (OCR) software package that converts scanned images of Arabic documents into a fully editable and searchable text file. In addition to the accurate and reliable recognition engine, Sotoor is able to maintain the layout of the original document.</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="testimonial">

                            <div class="testi-content">
                              <a href="{{route('speechRecognation')}}"><img class="services-image" src="{{asset('images/siteImages/slider1-2.png')}}" alt="Customer Testimonails"></a>

                                <h3 class="text-center"> <a href="{{route('speechRecognation')}}">KATEB</a></h3>
                                <p>Kateb is the real time Automatic Speech Recognition (ASR) software solution that transcribes Arabic voice from recorded audio files into a fully editable and searchable text files. Kateb is supporting Modern Standard Arabic (MSA), and the Egyptian Dialectical Arabic. Kateb provides one of the best recognition.</p>

                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="oc-item">
                            <div class="testimonial">

                                <div class="testi-content">
                                  <a href="{{route('textToSpeechPage')}}"><img class="services-image"  src="{{asset('images/siteImages/slider1-3.png')}}" alt="Customer Testimonails"></a>

                                    <h3 class="text-center"><a href="{{route('textToSpeechPage')}}">NATIQ</a></h3>
                                    <p>Natiq is the professional state-of-the-art text-to-speech software provided by RDI that enables users to convert the Arabic row text into spoken words with different natural voices. This technology is built on Tashkeel (RDI Diacretizer) that converts the row text into diacretized text so that it can be converted into speech easily.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="oc-item">
                            <div class="testimonial">

                                <div class="testi-content">
                                  <a href="{{route('hafss')}}"><img class="services-image" src="{{asset('images/siteImages/slider1-4.png')}}" alt="Customer Testimonails"></a>

                                    <h3 class="text-center"><a href="{{route('hafss')}}">HAFSS</a></h3>
                                    <p>Hafss© which has proved effective in helping people learn Tajweed of the holy Qur’an. Hafss© recites a verse, asks the learner to imitate it, analyzes the learner’s utterance, hence reports automatically about mistakes (if any) via an oral as well as written report. Hafss has been declared first in the 2007 WSA Award.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="oc-item">
                            <div class="testimonial">

                                <div class="testi-content">
                                  <a href="{{route('arabicTextDiacritizer')}}"><img class="services-image" src="{{asset('images/siteImages/slider1-5.png')}}" alt="Customer Testimonails"></a>

                                    <h3 class="text-center"><a href="{{route('arabicTextDiacritizer')}}">TASHKEEL</a></h3>
                                    <p>Tashkeel is the machine translation system provided by RDI that enables users to convert Arabic row data into vocalized text through adding diacritics to bare letters. It combines statistical and rule-based approaches in order to make advantage of their integration while avoiding their disadvantages.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="oc-item">
                            <div class="testimonial">

                                <div class="testi-content">
                                  <a href="{{route('sentimentAnalysis')}}"><img class="services-image" src="{{asset('images/siteImages/slider1-6.png')}}" alt="Customer Testimonails"></a>

                                    <h3 class="text-center"><a href="{{route('sentimentAnalysis')}}">ARAA</a></h3>
                                    <p>Araa is multi-resource ground-breaking complete solution, integrating Automatic Speech Recognition (ASR), Sentiment Analysis technologies, and Arabic Natural Language Processing (NLP) techniques to enable Arabic social media text, Audio and Video recordings to be analyzed for sentiment analysis purposes.</p>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>

    </div>

    <div id="our-clients">
        <div class="container">
            <div class="col-md-12 text-center" >
                <h2 class="section-header">OUR CLIENTS</h2>
                <hr class="line"/>
            </div>

            <div class="col-md-12">
                <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-loop="true" data-margin="20" data-nav="true" data-pagi="true" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6">

                    <div class="oc-item"><a target="_blank" href="https://ec.europa.eu/"><img src="{{asset('images/siteImages/client1.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="http://www.elra.info/en/"><img src="{{asset('images/siteImages/client2.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="http://www.cengage.com/"><img src="{{asset('images/siteImages/client3.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="https://www.baidu.com/"><img src="{{asset('images/siteImages/client4.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="https://www.orange.com/en/home"><img src="{{asset('images/siteImages/client5.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="http://www.acapela-group.com/"><img src="{{asset('images/siteImages/client6.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="#"><img src="{{asset('images/siteImages/client7.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="https://www.raytheon.com/ourcompany/bbn"><img src="{{asset('images/siteImages/client8.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="https://www.essex.ac.uk/"><img src="{{asset('images/siteImages/client9.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="https://www.kacst.edu.sa"><img src="{{asset('images/siteImages/client10.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="https://www.microsoft.com/en-sa"><img src="{{asset('images/siteImages/client11.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="http://www.emgd.com/"><img src="{{asset('images/siteImages/client12.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="http://nahjj.com/"><img src="{{asset('images/siteImages/client13.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="http://www.kfas.org/ar/"><img src="{{asset('images/siteImages/client14.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="https://www.gust.edu.kw/"><img src="{{asset('images/siteImages/client15.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="http://islam.gov.kw"><img src="{{asset('images/siteImages/client16.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="http://www.redsoft.org/"><img src="{{asset('images/siteImages/client17.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="#"><img src="{{asset('images/siteImages/client18.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="https://schoolcity.com/"><img src="{{asset('images/siteImages/client19.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="https://www.qf.org.qa/"><img src="{{asset('images/siteImages/client20.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="https://www.sure.com.sa/"><img src="{{asset('images/siteImages/client21.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="https://www.aucegypt.edu/ar"><img src="{{asset('images/siteImages/client22.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="http://www.eelu.edu.eg/"><img src="{{asset('images/siteImages/client23.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="http://www.scu.eun.eg/"><img src="{{asset('images/siteImages/client24.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="https://www.intel.com"><img src="{{asset('images/siteImages/client25.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="http://www.mcit.gov.eg/"><img src="{{asset('images/siteImages/client26.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="http://arabiainform.com/"><img src="{{asset('images/siteImages/client27.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a target="_blank" href="http://asgatech.com/AsgaSite/?lang=ar"><img src="{{asset('images/siteImages/client28.jpeg')}}" alt="Clients"></a></div>

                </div>

            </div>
        </div>
    </div>


    <div id="our-awards">
        <div class="container">
            <div class="col-md-12 text-center" >
                <h2 class="section-header">OUR AWARDS</h2>
                <hr class="line"/>
            </div>

            <div class="col-md-12">
                <div id="oc-clients" class="owl-carousel image-carousel carousel-widget ocl-section-2" data-margin="20" data-nav="false" data-pagi="true" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6">

                    <div class="oc-item"><a href="https://ec.europa.eu/"><img src="{{asset('images/siteImages/award1.png')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://www.elra.info/en/"><img src="{{asset('images/siteImages/award2.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://www.cengage.com/"><img src="{{asset('images/siteImages/award3.jpeg')}}" alt="Clients"></a></div>
                    <!-- <div class="oc-item"><a href="https://www.baidu.com/"><img src="{{asset('images/siteImages/award4.png')}}" alt="Clients"></a></div> -->
                    <div class="oc-item"><a href="https://www.orange.com/en/home"><img src="{{asset('images/siteImages/award5.png')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://www.acapela-group.com/"><img src="{{asset('images/siteImages/award6.png')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="{{asset('images/siteImages/award7.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://asgatech.com/AsgaSite/?lang=ar"><img src="{{asset('images/siteImages/award8.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://asgatech.com/AsgaSite/?lang=ar"><img src="{{asset('images/siteImages/award9.jpeg')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://asgatech.com/AsgaSite/?lang=ar"><img src="{{asset('images/siteImages/award10.png')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://asgatech.com/AsgaSite/?lang=ar"><img src="{{asset('images/siteImages/award11.png')}}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://asgatech.com/AsgaSite/?lang=ar"><img src="{{asset('images/siteImages/award12.jpeg')}}" alt="Clients"></a></div>

                </div>

            </div>
        </div>
    </div>
@endsection


@section('scripts')
     {{-- Add Scripts Here --}}
     <script type="text/javascript" src="{{asset('include/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('include/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

     <script type="text/javascript" src="{{asset('include/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('include/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('include/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('include/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('include/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>

    <script>
        $('#slider1 .owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay:true,
               autoplayTimeout:3000,
               autoplayHoverPause:true,
                smartSpeed:1500,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });


               var owl = $('#oc-clients');
               owl.owlCarousel({
                   items:4,
                   loop:true,
                   margin:10,
                   autoplay:true,
                   autoplayTimeout:3000,
                   autoplayHoverPause:true,
                    smartSpeed:1500
               });

               var owl = $('.ocl-section-2');
               owl.owlCarousel({
                   items:4,
                   loop:true,
                   margin:10,
                   autoplay:true,
                   autoplayTimeout:3000,
                   autoplayHoverPause:true,
                    smartSpeed:1500
               });

               var owl = $('#oc-testi');
               owl.owlCarousel({
                   items:3,
                   loop:true,
                   margin:10,
                   autoplay:true,
                   autoplayTimeout:3000,
                   autoplayHoverPause:true,
                    smartSpeed:1500
               });


    </script>

@endsection
