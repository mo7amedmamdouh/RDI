@extends('front-end.layouts.main-layout')

@section('styles')
    <style>
        .img-responsive{
            margin: 0 auto;
        }
    </style>
@endsection


@section('title','Industries')


@section('content')
    <div class="page-block" style="display: none;">
    </div>

    <div class="page-block" style="    margin-top: 70px;
">
        <div class="col-md-12 text-center" >

        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h2 class="page-block-header">INDUSTRIES</h2>
                        <p class="lead justfy-content">
                            Since RDI or ‘The Engineering Company for the Development of Digital Systems’ began its journey on 1993 to develop technologies that serve the Arabic language, it was convinced that it is important to adapt its outputs to serve different domains and not to be limited to a specific domain. So we dealt with things in a more general and comprehensive view that would guide our technologies to serve society at all levels and areas. The company also had a vision to create a better future by developing products that combine the authenticity of the past with the requirements of the present without losing sight of its future viability.

                        </p>
                    </div>
                    <div class="col-md-6 ">
                        <img src="{{asset('images/siteImages/industries.jpeg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

   <div class="container">
       <hr>
       <div class="row">
           <div class="col-md-4">
               <h3 class="text-center">Healthy</h3>
               <img src="{{asset('images/siteImages/health.png')}}" class="img-responsive align-items-center" alt="">
               <p class="text-center">
                   Our technologies can be adapted to be a smart assistant for hospitals and clinics staff that can help with such things as disease diagnosis.

               </p>
           </div>
           <div class="col-md-4">
               <h3 class="text-center"> Telecom </h3>
               <img src="{{asset('images/siteImages/telecom.png')}}" class="img-responsive align-items-center" alt="">

               <p class="text-center">
                   Our products are capable of serving a wide range of communications fields as well as keeping abreast of the remarkable rapid development in this field.               </p>
           </div>
           <div class="col-md-4">
               <h3 class="text-center"> Education </h3>
               <img src="{{asset('images/siteImages/education.png')}}" class="img-responsive align-items-center" alt="">

               <p class="text-center">
                   Education is one of the basic goals that we aim to contribute to its development through our products and services.
               </p>
           </div>
           <div class="col-md-4">
               <h3 class="text-center">Media</h3>
               <img src="{{asset('images/siteImages/media.png')}}" class="img-responsive align-items-center" alt="">

               <p class="text-center">
                   We always strive to develop techniques that can contribute to the service of different media fields such as analysis of social networking sites (Social Media) and others.

               </p>
           </div>
           <div class="col-md-4">
               <h3 class="text-center">Content</h3>
               <img src="{{asset('images/siteImages/content.png')}}" class="img-responsive align-items-center" alt="">

               <p class="text-center">
                   We always strive to develop techniques that can contribute to the service of different media fields such as analysis of social networking sites (Social Media) and others.               </p>
           </div>
       </div>
   </div>


@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection
