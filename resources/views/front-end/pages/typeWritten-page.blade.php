@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">
@endsection


@section('title','type Written')


@section('content')

    <div id="page_intro" style="background-image: url({{asset('images/siteImages/book.jpeg')}})">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-6">
                    <p class="page_intro_text"><strong>Sotoor</strong> is the all-in-one Arabic typewritten optical character recognition (OCR) software package that converts scanned images of Arabic documents into a fully editable and searchable text file. In addition to the accurate and reliable recognition engine, Sotoor is able to maintain the layout of the original document.</p>
                    <a class="btn btn-lg get-started" href="https://www.rdi-sotoor.com/#/">TRY NOW!</a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">SOTOOR FEATURES</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <ul class="page-block-list">
                            <li>Support major input image formats (JPEG, PNG, BMP, HDR, PSD, TGA, PIC, PGM, PPM) and PDF.</li>
                            <li>Extracted text can be downloaded as one of the following file formats:
                                <ul style="list-style-type:circle">
                                    <li>PDF.</li>
                                    <li>Editable formats: DOC(X), HTML, RTF, TXT, and ODT.</li>
                                    <li>E-book formats: EPUB, FB2.</li>
                                </ul>
                            </li>
                            <li>Provide single page as well as batch recognition strategies.</li>
                            <li>Recognize texts on scans and photos of different types of Arabic Documents (Newspapers, Computer printed Documents). Future releases will support new types (Captions, Historical typewritten and handwritten manuscripts).</li>
                            <li>Different resolutions are supported by the recognition engine, 300 dpi resolution images are recommended.</li>
                            <li>Improve the quality of input images via perspective correction and noise removal stages to guarantee higher recognition rates.</li>
                            <li>The sophisticated editor displays the recognized text side by side with the original input image to smooth the way for reviewing outputs.</li>
                            <li>Provide automated and customized conversion procedures with workflows.</li>

                        </ul>
                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/book2.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">WHY SOTOOR FOR ARABIC OCR?</h2>
            <hr class="line"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <ul class="page-block-list">
                            <li>As Arabic language is our mother tongue, Sotoor recognition model can deeply deal with complex patterns on the syntactic and semantic levels.</li>
                            <li>Sotoor can be customized to support customer’s preferred input and output formats.</li>
                            <li>Sotoor the highest recognition rates compared to other Arabic OCR solutions.</li>
                            <li>Sotoor respects customer privacy and does not share his own input/output files with third parties. We can setup the solution environment at your side, train your employees and provide a full customer support service.</li>
                            <li>Sotoor is the only available OCR solution that can deal with noisy documents.</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">SOTOOR FAQS</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion accordion-bg clearfix">

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Can Sotoor capture hand-written text?</div>
                        <div class="acc_content clearfix">Sotoor can only capture the different types of the Arabic typewritten documents (Newspapers, Computer Printed Documents). Historical handwritten manuscripts will be supported in future releases.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What resolution of the scanned documents does Sotoor need?</div>
                        <div class="acc_content clearfix">Sotoor is able to recognize scanned text with very poor quality and low resolutions, but 300 dpi will guarantee higher recognition rates.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Can I convert multiple pages at once?</div>
                        <div class="acc_content clearfix">Yes, this what the batch recognition strategy do.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Will Sotoor handle rotated or skewed input images before the recognition?</div>
                        <div class="acc_content clearfix">Yes, Sotoor has a preprocessing engine that fixes rotated and skewed images before the recognition phase starts.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>How much time does Sotoor take to recognize one page?</div>
                        <div class="acc_content clearfix">It depends on the number of words per page and available Hardware. On a (Linux, 2.50GHz × 4 and 8 GB RAM) machine, Sotoor can apply the OCR process on a 250-word computer printed document in less than 2 minutes.</div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What are the optimal settings for the recognition purposes?</div>
                        <div class="acc_content clearfix">
                            The following settings are optimal for the recognition process:
                            <ul style="list-style-type:circle ; margin-left: 20px">
                                <li>Resolution of 300 dpi (font size 12 up to 24).</li>
                                <li>Monochrome clean computer printed documents (white background).</li>
                            </ul>
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Can I recognize a specific paragraph/section of the input image?</div>
                        <div class="acc_content clearfix">Yes, Sotoor provides a customized OCR procedure that enables users to select specific lines of the input images to be recognized.</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection