@extends('front-end.layouts.main-layout')

@section('styles')
    <style>
        .img-responsive{
            margin: 0 auto;
        }
    </style>
@endsection


@section('title','Structure')


@section('content')
    <div class="page-block" style="display: none;">
    </div>

   <div class="col-md-12">
       <img src="{{asset('images/siteImages/structure.jpeg')}}" class="img-responsive" alt="">
   </div>

@endsection


@section('scripts')
    {{-- Add Scripts Here --}}



@endsection