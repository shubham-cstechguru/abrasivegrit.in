@extends('frontend.layouts.default')
@section('title','Products | Abrasive Grit Manufacturer in India')
@section('keyword','Abrasive grit, abrasive grit for blasting, steel shot, supplier, steel grit exporter, aluminium oxide supplier, garnet sand manufacturer, garnet sand supplier, garnet sand 80 mesh, glass beads supplier, plastic beads supplier')
@section('description','Abrasive Grit Manufacturer - Abrasive Grit Manufacturer provides best range of steel shot grit, steel shot, aluminum oxide, glass beads and garnet sand in India. We are the leading supplier &amp; exporter of garnet sand 80 mesh, copper slag and steel shot in India.')

@section('canonical',URL::current())
@section('contant')

<div class="page-top-info row">
    <div class="container">
        @if(isset($name))
        <h4>{{ $name }}</h4>
        @else
        <h4>Products</h4>
        @endif
        <div class="site-pagination">
            <a href="{{ url('/') }}">Home</a> /
            @if(isset($name)) {{ $name }} @else Product @endif
        </div>
    </div>
</div>

<!--</section>-->
@if(!$product->isEmpty())
<section class="row product-filter-section py-5">
    <div class="container">
        <div class="section-title">
            @if(isset($name))
            <h2 class="text-center" style="text-transform: uppercase;">{{ $name }}</h2>
            @else
            <h2 class="text-center" style="text-transform: uppercase;">PRODUCTS</h2>
            @endif
            <p class="pt-2 text-center my-5">Abrasive Grit offer Blast abrasives, Steel Shots, SS Shots, Grit, Garnet, Aluminum oxide Abrasives, glass bead blasting for stainless steel etc and qualitative range of industrial steel abrasive products.</p>
        </div>
        <div class="row">
            @foreach($product as $list)
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="card">
                            <a href="{{url('product/'.$list->slug) }}">
                                @if($list->image!='')
                                <img class="lazy-load" data-src="{{url('imgs/product/'.$list->image)}}" src="{{url('imgs/loader-2.gif')}}" alt="{{ $list->title }}" width="251">
                                @else
                                <img class="lazy-load" data-src="{{url('imgs/unavailable-image-300x225.jpg')}}" src="{{url('imgs/loader-2.gif')}}" alt="{{ $list->title }}">
                                @endif
                            </a>
                            <div class="pi-text my-3" style="min-height:50px;">
                                <a href="{{ route('productindex', $list->slug) }}" style="padding:0;">
                                    <p class="text-center font-weight-bold" style="overflow: hidden; min-width: 5ch;  max-width: 25ch; text-overflow: ellipsis; white-space: nowrap;">{{$list->title}}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $product->links() }}
    </div>
</section>
@else
<section class="row product-filter-section py-5">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">No Products Found</div>
        </div>
    </div>
</section>
@endif

@stop