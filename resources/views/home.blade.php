@extends('layouts.master')

@section('content')
  @include('partials.home.banner')
  @include('partials.home.about')
  @include('partials.home.businessbenefits')
  @include('partials.home.requestpromoter')
  @include('partials.home.salessuccess')
  @include('partials.home.portfolio')
  @include('partials.home.testimonials')
  @include('partials.home.contactus')
  @include('partials.home.quickcontact')
  <div class="blog__one dark__image section-padding"></div>
@endsection
