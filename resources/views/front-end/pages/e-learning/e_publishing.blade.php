@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">
@endsection


@section('title','E-Publishing')


@section('content')
    <div class="page-block" style="display: none;">
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">SCIENCE MAGAZINE KUWAIT



            </h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead justfy">
                            RDI has implemented the electronic magazine project for the Science magazine in Kuwait. The contents of the various magazine issues have been transferred to electronic copies on the website of the magazine that the company has implemented. The article is presented using the company's linguistic techniques. The site contains a syntactic & semantic search engine where the user can browse and navigate the contents of the site.



                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/e-publishing-section-1.jpeg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">E-BOOK</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead justfy">
                            Based on RDI’s human spoken andwritten language technologies,  RDI has developed an innovative an inclusive solution where the book is introduced in a different style that matches the pace of the era. RDI’s e-Book compromises the following features: User-friendly browsing and navigation through the book content. Advanced Arabic text search engine. Arabic dictionaries that is dynamically bound to the text and the reader can know all the details related to the word meaning, root … by just a simple click. The ability to synthetically read any chosen part of the book. Dynamic adaptation of the appearance (font features, size, color…).


                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/e-publishing-section-2.jpeg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection