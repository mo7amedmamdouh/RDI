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


@section('title','News')


@section('content')
    <div class="page-block" style="display: none;">
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

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>The start of cooperation between RDI & Cairo University and NTRA</div>
                        <div class="acc_content clearfix">

                            <div class="col-md-6">
                                <p class="lead justfy">
                                    July 2016 is the start of the project “A Framework for Big Arabic Media Data Mining and Analytics” that is funded by NTRA and implemented at the Faculty of Engineering at Cairo University, with support for The Engineering Company for the Development of Digital Systems “RDI”.

                                </p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset('images/siteImages/news-section-1.jpeg')}}" alt="">
                            </div>
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>RDI Awarded For Participating In ITIDA MSE Project</div>
                        <div class="acc_content clearfix">

                            <div class="col-md-6">
                                <p class="lead justfy">
                                    In the presence of the Eng. Yasser ElKady, Minister of Communications and Information Technology, the Egyptian Information Technology Industry Development Agency – ITIDA awarded RDI a certificate of completion for delivering one of ICT products as a part of MSE Project 2015.
                                    Completion Ceremony was held on 4th April. 2016 at Conrad Cairo hotel.
                                    MSE project aim to support the development of Egyptian ICT products and help them compete in local and regional markets, through targeting a government entity as a client, And be responsible for the product deployment, as an integrated solution, at the client premises, ensuring the success of the integrated solution (Integrated solution includes developed product, the hardware required to deploy the product and the software licenses if applicable). The project is the “Semantic Search Engine For Arabic Information Retrieval” which was handed over to the Supreme Council of Universities-Egypt

                                </p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset('images/siteImages/news-section-2.jpeg')}}" alt="">
                            </div>

                        </div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Hafss won the First prize in WSA </div>
                        <div class="acc_content clearfix">


                            <div class="col-md-6">
                                <p class="lead justfy">
                                    The WSA Winners Conference and Awards Ceremony took place in Venice on November 3-5, 2007, celebrating excellence in e-Content creation.

                                    Hafss won the First prize in the 2007 World Summit Award (WSA) contest for the best e-content/e-Learning track where about 850 other candidates from 160 countries had participated. This international prize is awarded for RDI's Hafss© technology for the interactive learning of spoken language applied on the Tajweed


                                </p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset('images/siteImages/news-section-3.jpeg')}}" alt="">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection
