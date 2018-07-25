@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">
@endsection


@section('title','E-Learning')


@section('content')

    <div id="page_intro" style="background-image: url({{asset('images/siteImages/e-learning-cover.jpeg')}})">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-6">
                    <p class="page_intro_text">
                        RDI helps students gain skills and knowledge by providing an integrated array of multimedia resources:
                        Animations and Videos, Simulated Virtual Labs, Exams & Evaluation, Educational Games … etc.
                        All these resources are concerted together for the training, education and student e-evaluation.
                        This e-content can be delivered in SCORM complaint format, and can also be integrated in any of the major LMS's.
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">EGYPTIAN UNIVERSITY OF E-LEARNING</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead justfy">
                            In 2009, the Egyptian GNSE-RDI-Bian won the tender of the Egyptian University
                            of e-Learning for the development of electronic curricula of the university over two years.
                            This is the first university of its kind in the Arab Republic of Egypt. The idea of the project is
                            to transform the educational curricula of the Egyptian University into electronic curricula that benefit
                            from the successive developments in the field of e-learning and multimedia.

                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/e-learning.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">SECONDARY SCHOOL CURRICULUM</h2>
            <hr class="line"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead justfy">
                            RDI has implemented a large number of secondary education units in many Gulf countries, in order to transform the scientific content of a number of subjects into electronic content with new and advanced capabilities in the field of multimedia and e-learning.

                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/e-learning-section2.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">LIBYAN CURRICULUM</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead justfy">
                            The idea of the project is to transform educational curricula in
                            the Libyan Arab Jamahiriya into electronic curricula that benefit from
                            the successive developments in the field of e-learning and multimedia.
                            The project is part of Intel's global plan to target the Middle East region,
                            especially Arab countries, to provide each student with a personal computer with courses in his / her school year.
                            This project was successfully completed by ISIS and RDI.

                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/e-learning-section3.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">SAUDI CURRICULUM
            </h2>
            <hr class="line"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead justfy">
                            RDI developed Saudi curriculum from the fourth primary grade to the third secondary grade, which included the conversion of textbooks into e-books as well as more than one thousand and one hundred educational components.
                            Microsoft has purchased a copy of this work for the Ministry of Education through Majid the partner company in charge of marketing the project at the time.                        </p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/e-learning-section4.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">SAUDI CURRICULUM
            </h2>
            <hr class="line"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead justfy">
                            RDI has implemented the e-learning project of the Smart School for the primary stage. The content of the curriculum has been reformulated in a different way. It differs from the content of the textbook and achieves the same objectives. It is suitable for the primary stage in terms of presentation of the educational material, questions banks and education games to enrich the child's mind at this age, along with the desired educational and upbringing goal, based on cumulative educational experience with RDI.

                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/e-learning-section5.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection
