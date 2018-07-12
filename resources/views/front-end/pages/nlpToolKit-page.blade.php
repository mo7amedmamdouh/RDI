@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">
@endsection


@section('title','Search Engine')


@section('content')

    <div id="page_intro" style="background-image: url({{asset('images/siteImages/axe.jpeg')}})">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-6">
                    <p class="page_intro_text">NLP Toolkit is the RDI’s framework of tools targeted at processing Arabic Language to apply its main NLP tasks. It includes powerful number of tools for Stemming, summarization, named entities recognition as well as many more features. NLP toolkit provides many building block libraries that make it easy to innovate without having to ..</p>
                    {{--<a class="btn btn-lg get-started" href="https://www.rdi-sotoor.com/#/">TRY NOW!</a>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">ABOUT KASHEF</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="page_intro_textv2">Kashef is the RDI’s Arabic text search engine based on Apache Solr. Kashef provides different search alternatives so that users can do the search at the level of the stem or the word. It is also able to semantically expand queries by using the appropriate synonyms for the context used in the original search query. Kashef helps you to explore your enormous data effectively and quickly compared to traditional search engines.</p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/kashef.jpeg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">ABOUT ROMOOZ</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="page_intro_text"><strong>Romoz</strong> is the RDI’s Arabic named entity recognizer that is able to find mentions of specific entities in text. Because it is not possible to limit the entities that belong to all areas, we have focused on the entities of the news domain, namely persons, locations and organizations. Given sufficient data, Romoz can be easily applied to other domain texts making it powerful, reusable, and comprehensive tool.</p>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/rmoz.jpeg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">ABOUT SUMMARIZER</h2>
            <hr class="line"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <p class="page_intro_textv2">RDI Summarizer is a professional Arabic text summarization tool based on Natural Language Processing and Machine Learning technologies. It’s an extractive summarizer that automatically analyzes text and tries to identify the most significant sentences that keep important details as well as ignore sentences that do not add new information. The ability of the summarizer to achieve the desired results with high accuracy lies in the strength of its powerful sentences ranker. RDI Summarizer helps you get a clearer picture in less time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">ABOUT TOPIC CLASSIFIER</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <p class="page_intro_text">RDI Topic Classifier is an effective tool that helps users to classify different Arabic documents into their right class based on a predefined set of topics. One of the most important experiences in the company to ensure the quality of the proposed model, an experiment applied on articles in the news domain to classify them into seven different subjects, namely, politics, economy, health, sports, technology, arts and religion. This experiment has achieved results reaching 97% with an average of 93% demonstrating the efficiency of the model and its high capabilities. RDI Topic Classifier can be applied to articles of any domain. It only needs to have a sufficient number of pre-categorized documents to learn from them.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">ABOUT KEY-PHRASES EXTRACTOR</h2>
            <hr class="line"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <p class="page_intro_textv2">RDI has a model for extracting key phrases from Arabic texts using a set of techniques designed specifically for this purpose. Key phrases provide a brief description of the content of the document; they can therefore be used for several aspects such as document classification, indexing, search, and summarization as well as the possibility of use in semantic search. RDI Key-phrases Extractor follows a hybrid model that combines statistical approaches and morphological analyzes where maximum benefit can be achieved while avoiding the disadvantages of each approach if used separately.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection