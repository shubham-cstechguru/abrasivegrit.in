@extends('frontend.layouts.default')
@section('title','Abrasive Grit for blasting exporter | Steel shot manufacturer,  Aluminum oxide, Garnet Sand Supplier in India')
@section('keyword','Abrasive grit, abrasive grit for blasting, steel shots, supplier, steel grit exporter, aluminium oxide supplier, garnet sand manufacturer, garnet sand supplier, garnet sand 80 mesh, glass beads supplier, plastic beads supplier')
@section('description','Abrasive Grit Manufacturer - Abrasive Grit Manufacturer provides  high quality steel shot grit, steel shots, aluminum oxide, glass beads and garnet sand in India.  We are the leading supplier &amp; exporter of garnet sand 80 mesh, aluminum oxide and steel shots in India.')

@section('canonical',URL::current())
@section('contant')

	<div class="row">
		<div class="col-lg-3 px-0 mt-1" id="sidebar_data">
			<p class="product-range my-0">All Categories & Products</p>
			<!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  @php 
    $id = 1;
  @endphp
  @foreach( $category1 as $list )

  <div class="card">

    <!-- Card header -->
    
            <div class="card-header" role="tab" id="headingOne1">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{ $list->id }}" aria-expanded="true"aria-controls="collapseOne1">
                <p class="mb-0 product-left-list">
                  {{ $list->category }}
         		<i class="rotate-icon">»</i>
                </p>
              </a>
            </div>
            @if($id)
            <!-- Card body -->
            <div id="collapseOne{{ $list->id }}" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
              data-parent="#accordionEx">
              <div class="card-body card-in-list">
                <ul>@foreach($list->product as $list1)
                	<li>
                	    <a href="{{url('product/'. $list1->slug) }}"><i class="rotate-icon">»</i>  &nbsp;{{ $list1->title }}</a>
                	</li>
                	@endforeach
                </ul>
              </div>
            </div>
            @else
             <!-- Card body -->
            <div id="collapseOne{{ $list->id }}" class="collapse" role="tabpanel" aria-labelledby="headingOne1"
              data-parent="#accordionEx">
              <div class="card-body card-in-list">
                <ul>@foreach($list->product as $list1)
                	<li>
                	    <a href="{{url('product/'. $list1->slug) }}"><i class="rotate-icon">»</i>  &nbsp;{{ $list1->title }}</a>
                	</li>
                	@endforeach
                </ul>
              </div>
            </div>
            
            @endif

  </div>
  @php
  $id = 0;
  @endphp
  @endforeach
  

  

  </div>
  <!-- Accordion card -->
  <div class="mt-5"style="position: -webkit-sticky; /* Safari */  position: sticky;  top: 0;" id="sidebar_data">
  	<div class="sticky1" >
	<p class="inquiry-heading">Inquiry Now</p>
	<div class="p-4">
		{{ Form::open(['method'=>'POST', 'files' => 'true', 'class' => 'user']) }}
			
			{{ Form::text('mobile_no', '', ['class' => 'form-control', 'id'=>'name', 'placeholder'=>'Mobile No.','required'=>'required'])}}<br>
			
			{{ Form::textarea('mobile_no', '', ['class' => 'form-control', 'id'=>'name','rows'=>5, 'placeholder'=>'Message...','required'=>'required'])}}
			{{ Form::submit('Send', ['class' => 'btn btn-danger mt-3 form-control inquiry-send']) }}

		{{ Form::close() }}
	</div>
</div>
  </div>
  

</div>

		<div class="col-lg-9">
			<div class="py-1" id="sidebar_data">
				<img data-src="{{ url('imgs/sand_blasting_dustless_bannner.jpg')}}" src="{{url('imgs/loader-2.gif')}}" class="lazy-load">
			</div>
			<div class="col-md-12 mt-1" style="background: #f1f1f1">
				<div class="frnt-url">
					<span class="c17">
						<a href="/"><b>Home</b></a>
					</span>
					
					<span class="c17"> » {{ $cat_name }}</span>
				</div>
			</div>
			<div class="my-4">
				<h1>{{ $cat_name }}</h1>
				<p>{{ $cat_des }}</p>
			</div>
			@foreach($data as $list)
			<div class="mt-4">
				<div class="row main-product-head">
					<div class="col-lg-9 col-7">
						<h2 class=""><b>{{ $list->title }}</b></h2>
					</div>
					<div class="col-lg-3 col-5 pl-5" >
						<span class="" onclick="open_pop()">REQUEST CALLBACK</span>
					</div> 
				</div>
				<div class="row">
					<div class="col-lg-4 col-12 mt-3">
						<div class="sticky">
							<div class="img-border">
							    @if($list->image!='')
								<img class="lazy-load" src="{{url('imgs/loader-2.gif')}}" data-src="{{url('imgs/product/'.$list->image)}}" alt="{{ $list->title }}">
								@else
								<img class="lazy-load" src="{{url('imgs/loader-2.gif')}}" data-src="{{url('imgs/unavailable-image-300x225.jpg')}}" width="251" height="251">
								@endif
							</div>
							
						</div>
					</div>
					<div class="col-lg-8 col-12 mt-3">
						<p class="product-detial">Product Details:</p>
						<div class="table-responsive">
						    <p>{!! $list->table !!}</p>
					    </div>
						<p class="my-4">
							{{ $list->excerpt }}
						</p>
					  <div class="row">
					      <div class="col-6">
								<button class="btn search-btn" onclick="open_pop()">Get Best Quote</button>							
							</div>
						 <div class="col-6">	
						    <a class="btn search-btn ml-4" href="{{url('product/'. $list->slug) }}">Quick View</a>
						 </div>   
					  </div>
					</div>
				</div>
			</div>
			@endforeach
			
			
		</div>
	</div>

@stop
