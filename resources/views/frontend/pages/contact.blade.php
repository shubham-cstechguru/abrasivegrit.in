@extends('frontend.layouts.default')
@section('title','Contact Us | Industrial Abrasive Grit Supplier in India')
@section('keyword','Abrasive grit, abrasive grit for blasting, steel shot, supplier, steel grit exporter, aluminium oxide supplier, garnet sand manufacturer, garnet sand supplier, garnet sand 80 mesh, glass beads supplier, plastic beads supplier')
@section('description','Abrasive Grit Manufacturer - Abrasive Grit Manufacturer provides high quality steel shot grit, steel shot, aluminum oxide, glass beads and garnet sand in India. We are the leading supplier &amp; exporter of garnet sand 80 mesh, cut wire shot and steel grit in India.')

@section('canonical',URL::current())
@section('contant')
<div class="page-top-info row">
    <div class="container">
        <h4>Contact</h4>
        <div class="site-pagination">
            <a href="#">Home</a> / Contact
        </div>
    </div>
</div>


<section class="contact-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 col-12 contact-info">

                <form class="contact-form" method="POST" action="{{ route('ajax-route') }}" id="inquiry_form">
                    <div class="form-group">
                        <input required type="text" placeholder="Your name" class="name">
                    </div>
                    <div class="form-group">
                        <input required type="email" placeholder="Your e-mail" class="email">
                    </div>
                    <div class="form-group">
                        <input required type="tel" placeholder="Your mobile" class="mobile">
                    </div>
                    <div class="form-group">
                        <textarea required placeholder="Message" class="message"></textarea>
                    </div>
                    <p id="ajax_message" class="text-success"></p>
                    <button class="site-btn">SEND NOW</button>
                </form>


            </div>
            <div class="col-lg-6 col-12">
                <h3>Get in touch</h3>
                <p><span><i class="icon-location"></i></span>&nbsp;{{ $setting->address }}</p>
                </p>
                @php
                $whatsapp = preg_replace('/[+\(\)\-\" "]+/', '', $setting->whatsapp);
                @endphp
                <a href="https://wa.me/{{ $whatsapp }}">
                    <p><span><i class="icon-whatsapp"></i></span>&nbsp;{{ $setting->whatsapp }}</p>
                </a>
                <a href="" class="__cf_email__" data-cfemail="422a2d31362b2c2502212d2c362321366c212d2f">
                    <p><span><i class="icon-envelop"></i></span>&nbsp;{{ $setting->email }}</p>
                </a>
                <div class="contact-social">
                    <a href="{{ $setting->instagram }}"><i class="icon-instagram"></i></a>
                    <a href="{{ $setting->facebook }}"><i class="icon-facebook"></i></a>
                    <a href="{{ $setting->youtube }}"><i class="icon-youtube"></i></a>
                    <!-- <a href="#"><i class="icon-dribbble"></i></a>
                    <a href="#"><i class="icon-behance"></i></a> -->
                </div>
                <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div>
            </div>
        </div>
    </div>
</section>




@stop