@extends('layouts.main')

@section('container')

<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/footerr.css'); }}">

<section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title" style="text-align: center">Contact Info</h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+62 896 560 871 97</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>wulasyantik28@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Bandung, Indonesia</h2>
            <h2>Jl. Sariwangi RT 01 RW 08 NO 76</h2>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection