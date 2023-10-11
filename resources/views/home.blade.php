@extends('layouts.master')

@section('content')
  @include('partials.front.home.banner')
  @include('partials.front.home.about')
  @include('partials.front.home.businessbenefits')
  @include('partials.front.home.requestpromoter')
  @include('partials.front.home.salessuccess')
  @include('partials.front.home.portfolio')
  @include('partials.front.home.testimonials')
  @include('partials.front.home.contactus')
  @include('partials.front.home.quickcontact')
  <div class="blog__onvee dark__image section-padding"></div>
@endsection
