@extends('layouts.app') <!-- Extend the master layout -->

@section('title', 'Magazijnuitleenapplicatie') <!-- Set page title -->

@section('content')
    <div class="content" id="section1">
        <!-- Banner y -->
        <section class="banner">
            <h1>Magazijnuitleenapplicatie</h1>
            <div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div>
<div class="btn-group-red" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Left</button>
  <button type="button" class="btn btn-primaryVista">Middle</button>
  <button type="button" class="btn btn-primary">Right</button>
</div>
        </section>
        <img class="achtergrond" src="{{ asset('images/banner.avif') }}" alt="Banner Image">
    </div>

    <div class="content" id="section2">
        <!-- Content for section 2 goes here -->
    </div>
    
    <div class="content" id="section3">
        <!-- Content for section 3 goes here -->
    </div>
@endsection
