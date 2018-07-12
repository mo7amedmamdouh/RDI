@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">

@endsection


@section('title','Contact Us')


@section('content')
    <div class="page-block" style="display: none;">
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <h2 class="page-block-header">CONTACT</h2>
                        <h4>Headquarters</h4>
                        <p> 12 A Haroun St., Al-Mesaha Square
                            Dokki, 12613 Giza, Egypt

                        </p>
                        <p>&nbsp;<strong>Tel: </strong>+20 2 37 49 94 63<br>
                            &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; +20 2 37 49 55 66<br>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  +20 2 37 49 95 61</p>

                        <p><strong>Fax:&nbsp;</strong>+20 2 33 38 21 66</p>
                        <p><br>
                            <strong>Prof. Mohsen A. A. Rashwan</strong>&nbsp;"Chairman&nbsp;&amp; Managing Director"&nbsp;<br>
                            Mohsen_Rashwan@rdi-eg.com<br>
                            <br>
                            <strong>Eman Mahmoud</strong>&nbsp;"Regional Marketing Manager"<br>
                            eman.mahmoud@rdi-eg.com</p>
                    </div>

                    <div class="col-md-5 text-right">
                        <div class="col-md-6 wow bounceInUp animated animated map-con"> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27631.460086748055!2d31.209024999999997!3d30.038794!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7031251ac4927452!2sRDI+-+The+Engineering+Co.+For+Digital+Systems+Development!5e0!3m2!1sen!2seg!4v1523913898514" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">Send Us</h2>
            <hr class="line"/>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="#">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text"  class="form-control" placeholder="Message">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="" class="form-control" rows="10" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary pull-right" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    {{-- Add Scripts Here --}}


@endsection