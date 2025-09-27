@extends('layout')

@section('body-class', 'contact-bg')

@section('content')
<section id="contact" class="contact-section">
    <div class="container text-center">

        <!-- Title and Subtitle -->
        <h2 class="contact-title">Contact Us</h2>
        <p class="contact-subtitle">Get in touch with us!</p>

        <!-- Contact Icons Row -->
        <div class="contact-items-container">

            <div class="col-md-3 mb-4 contact-item">
                <img src="{{ asset('images/phone-call.png') }}" alt="Phone Icon" class="contact-icon">
                <p>(054) 288-4421 to 23 local 144</p>
            </div>

            <div class="col-md-3 mb-4 contact-item">
                <img src="{{ asset('images/email.png') }}" alt="Email Icon" class="contact-icon">
                <p>ccs@cspc.edu.ph</p>
            </div>
            
            <div class="col-md-3 mb-4 contact-item">
                <img src="{{ asset('images/telegram.png') }}" alt="Telegram Icon" class="contact-icon">
                <p>Camarines Sur Polytechnic Colleges<br>College of Computer Studies</p>
            </div>

        </div>
    </div>
</section>
@endsection
