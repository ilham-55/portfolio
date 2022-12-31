@extends('frontend.layouts.master')
@section('panel')

@include('frontend.partials.header')

    <main>
     @include('frontend.partials.about')
      @include('frontend.partials.portfolio')
      @include('frontend.partials.blog')
      @include('frontend.partials.contact')
    </main>
@include('frontend.partials.rightbar')

@endsection
