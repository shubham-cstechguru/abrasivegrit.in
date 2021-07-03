@extends('frontend.layouts.default')
@section('title','About Us | Steel shot exporter,  Aluminum oxide manufacturer, Garnet Sand Supplier in India')
@section('keyword','Abrasive grit, abrasive grit for blasting, steel shots, supplier, steel grit exporter, aluminium oxide supplier, garnet sand manufacturer, garnet sand supplier, garnet sand 80 mesh, glass beads supplier, plastic beads supplier')
@section('description','Abrasive Grit Manufacturer - Abrasive Grit Manufacturer provides  high quality steel shot grit, steel shots, aluminum oxide, glass beads and garnet sand in India.  We are the leading supplier &amp; exporter of garnet sand 80 mesh, aluminum oxide and steel shots in India.')

@section('canonical',URL::current())
@section('contant')

    <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 pb-5">
                     <div class="full">
                        <div class="heading_main text_align_center pt-5">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="full text_align_center">
                        <img class="img-responsive" src="{{url('imgs/abouts/'.$about->image)}}" alt="Adhesive Tape Manufacturer in India" " />   
                      </div>
                  </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pt-5">
                     <div class="full">
                        <div class="heading_small pb-4">
                          <p class="other-heading">{{ $about->title }}</p>
                        </div>
                    </div>
                    <div>{!! $about->description !!}</div>
                  </div>
                 
               </div>
            </div>
         </div>
         <!-- end section -->

@stop