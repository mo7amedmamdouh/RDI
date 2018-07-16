@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">

@endsection


@section('title','Scientific Publications')


@section('content')

    <div id="page_intro" style="display: none">

    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">NATIQ FEATURES</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">

                        <ul class="page-block-list">
                            <li>
                                <p><a href="#">Omnifont text recognition of printed cursive scripts via HMMs, compact lossless features, and soft data clustering</a>; Pattern Analysis and Applications, Springer London, 2014.</p>
                            </li>
                            <li>
                                <p><a href="#">A Robust Omnifont Open-Vocabulary Arabic OCR System Using Pseudo-2D-HMM</a><strong>; </strong>Document Recognition and Retrieval XIX. Proceedings of the SPIE, 2012.</p>
                            </li>
                            <li>
                                <p><a href="#">Unconstrained Arabic Online Handwritten Words Segmentation using New HMM State Design</a>; Accepted for publication in the International Conference on Computer Vision, Image and Signal Processing (ICCVISP 2012),&nbsp; 2012.</p>
                            </li>
                            <li>
                                <p><a href="#">Document Analysis and Preprocessing of Arabic OCR</a>; ALTIC, 2011.</p>
                            </li>
                            <li>
                                <p><a href="#">On-Line Arabic Handwriting Text Line Detection Using Dynamic Programming</a>;&nbsp;Proceedings of International Conference on Computer Mathematics and Natural Computing (ICCMNC 2011),&nbsp;2011.</p>
                            </li>
                            <li>
                                <p><a href="#">OHASD: The first on-line Arabic sentence database handwritten on tablet PC</a>;&nbsp;Proceedings of International Conference on Signal and Image Processing (ICSIP 2010),&nbsp;2010.</p>
                            </li>
                            <li>
                                <p><a href="#">Autonomously Normalized Horizontal Differentials as Features for HMM-Based Omni Font-Written OCR Systems for Cursively Scripted Languages</a>; Signal and Image Processing Applications (ICSIPA),&nbsp;IEEE International, 2009.</p>
                            </li>
                            <li>
                                <p><a href="#">Arabic OCR System Analogous to HMM-Based ASR Systems</a>; Implementation and Evaluation; Journal of Engineering and Applied Science, Cairo University, 2008.</p>
                            </li>
                            <li>
                                <p><a href="#">Arabic Handwritten Script Recognition Towards Generalization: A Survey</a>;&nbsp;the 7th Conference on Engineering Language, Ain Shams University, 2007.</p>
                            </li>
                            <li>
                                <p><a href="#">Simultaneous segmentation and recognition of Arabic characters in an unconstrained on-line cursive handwritten document</a>;&nbsp;International conference on Machine learning and Pattern Recognition MLPR2007, Organized by The World Academy of Science, Engineering and Technology (WASET), 2007.</p>
                            </li>
                            <li>
                                <p><a href="#">A Multiple Classifiers System for Solving the Character Recognition Problem in Arabic Alphabet</a>;&nbsp;The 6th Conference on Language Engineering, Organized by The Egyptian Society of Language Engineering (ESLE), 2006.</p>
                            </li>
                            <li>
                                <p><a href="#">Segmentation of connected Arabic Characters Using Hidden Markov Models</a>;&nbsp;IEEE International Conference on Computational Intelligence for Measurement Systems and Applications&nbsp;(CIMSA2004), 2004.</p>
                            </li>
                            <li>
                                <p><a href="#">Hierarchical Classification of Bank Checks Using Genetic Algorithm</a>;&nbsp;Proc. of the 3rd International Symposium on Image and Signal Processing and Analysis&nbsp;(ISPA 2003), 2003.</p>
                            </li>
                            <li>
                                <p><a href="#">A New OCR System Similar to ASR System</a>;&nbsp;The 10th International Conference on Computing and Information&nbsp;(ICCI 2000), 2000.</p>
                            </li>
                            <li>
                                <p><a href="#">A Tree Structured Neural Network for Document Analysis and Recognition</a>;&nbsp;Proceedings of the 2nd International Conference on Document Analysis and Recognition, 1993.</p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">PAPERS ON DIGITAL SPEECH PROCESSING</h2>
            <hr class="line"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">

                        <ul class="page-block-list">

                        <li>
                                <p><a href="#">Speak Correct: A Computer Aided Pronunciation Training System for Native Arabic Learners of English</a>; Life Science Journal,&nbsp;2014.</p>
                            </li>
                            <li>
                                <p><a href="#">Speak Correct: Phonetic Editor Approach</a>; Life Science Journal,&nbsp;2014.</p>
                            </li>
                            <li>
                                <p><a href="#">Enhancing the Confidence Measure for an Arabic Pronunciation Verification System</a>; Proceeding of the International Symposium on Automatic Detection of Errors in Pronunciation Training, IS ADEPT,&nbsp;2012.</p>
                            </li>
                            <li>
                                <p><a href="#">Hardware Implementation of Distributed Speech Recognition Front End</a>;&nbsp;17th European Signal Processing Conference (EUSIPCO), 2009.</p>
                            </li>
                            <li>
                                <p><a href="#">Optimized Hardware Implementation of FFT Processor</a>; 4th International Design and Test Workshop (IDT), IEEE Publication, 2009.</p>
                            </li>
                            <li>
                                <p><a href="#">Enhancing Usability of CAPL System for Qur'an Recitation Learning</a>; INTERSPEECH, 2007.</p>
                            </li>
                            <li>
                                <p><a href="#">Qur'anic Speech Recognition System</a>; Hafss© Evaluation Study, The 7th Conference on Language Engineering, Organized by The Egyptian Society of Language Engineering (ESLE), 2007.</p>
                            </li>
                            <li>
                                <p><a href="#">Computer Aided Pronunciation Learning System Using Speech Recognition Techniques</a>; INTERSPEECH, 2006.</p>
                            </li>
                            <li>
                                <p><a href="#">Automatic Generation of Hypotheses for Automatic Diagnosis of Pronunciation Errors</a>; Proceedings of the Arabic Language Technologies and Resources Int’l Conference; NEMLAR,&nbsp;2004.</p>
                            </li>
                            <li>
                                <p><a href="#">Performance Tuning and System Evaluation for Computer Aided Pronunciation Learning</a>; Proceedings of the Arabic Language Technologies and Resources Int’l Conference; NEMLAR, 2004.</p>
                            </li>
                            <li>
                                <p><a href="#">New Technique for Speaker Independent Isolated Word Recognition</a>; IEE&nbsp;proceedings, 1988.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">PAPERS ON NATURAL LANGUAGE PROCESSING</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <ul class="page-block-list">
                        <li>
                            <p><a href="#">Deep Learning Framework with Confused Sub-set Resolution Architecture for Automatic Arabic Diacritization</a>; IEEE Transactions on Audio Speech and Language Processing, 2015.</p>
                        </li>
                        <li>
                            <p><a href="#">Arabic Phrase-Level Contextual Polarity Recognition to Enhance Sentiment Arabic Lexical Semantic Database Generation</a>; (IJACSA) International Journal of Advanced Computer Science and Applications, 2014.</p>
                        </li>
                        <li>
                            <p><a href="#">Automatic Arabic Diacritics Restoration Based on Deep Nets</a>; EMNLP Conference, ANLP 2014, 2014.</p>
                        </li>
                        <li>
                            <p><a href="#">Semantic Query Expansion for Arabic Information Retrieval</a>; Arabic Natural Language Processing Workshop, EMNLP 2014, 2014.</p>
                        </li>
                        <li>
                            <p><a href="#">Using Automated Lexical Resources In Arabic Sentence Subjectivity</a>; International Journal of Artificial Intelligence &amp; Applications (IJAIA),&nbsp;2014.</p>
                        </li>
                        <li>
                            <p><a href="#">Online English to Arabic Translation Enhancement by Domain Data Adaptation</a>; ICCTA Conference,&nbsp;2013.</p>
                        </li>
                        <li>
                            <p><a href="#">E-Mail Classification Using Deep Networks</a>; Journal of Theoretical and Applied Information Technology JATIT, 2012.</p>
                        </li>
                        <li>
                            <p><a href="#">A Stochastic Arabic Diacritizer Based on a Hybrid of Factorized and Un-factorized Textual Features</a>; IEEE Transactions on Audio, Speech, and Language Processing (TASLP), 2011.</p>
                        </li>
                        <li>
                            <p><a href="#">Generating lexical resources for Opinion Mining in Arabic language automatically</a>; The proceedings of the 11th Conference on Language Engineering; the Egyptian Society of Language Engineering (ESOLE),&nbsp;2011.</p>
                        </li>
                        <li>
                            <p><a href="#">Self Learning Machines using Deep Networks</a>; IEEE Soft Computing and Pattern Recognition conference&nbsp;(SoCPaR), 2011.</p>
                        </li>
                        <li>
                            <p><a href="#">A Comparative Study of Rocchio Classifier Applied to supervised WSD Using Arabic Lexical Samples</a>; The proceedings of the 10th Conference on Language Engineering, the Egyptian Society of Language Engineering (ESOLE),&nbsp;2010.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection
