@extends('layout.main')
@section('content')
 <main id="main">
  @include('partials.about')
  @include('partials.service')
@include('partials.counter')
@include('partials.portfolio')
@include('partials.testimonial')
@include('partials.blog')
@include('partials.contact')
  </main>
@endsection