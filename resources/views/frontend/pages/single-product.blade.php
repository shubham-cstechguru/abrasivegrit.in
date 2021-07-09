@extends('frontend.layouts.default')
@php
$title = $slug->seo_title!='' ? $slug->seo_title : $slug->title;
@endphp
@section('title',$title)
@section('description',$slug->seo_description)
@section('keyword',$slug->keywords)
@section('canonical',URL::current())
@section('contant')

<div class="row mb-4">
	<div class="col-lg-3 px-0 mt-1" id="sidebar_data">
		<div class="sticky">
			<p class="product-range my-0">All Products</p>
			<!--Accordion wrapper-->
			<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

				<!-- Accordion card -->
				@php
				$id = 1;
				@endphp
				@foreach( $category1 as $list )

				<div class="custom-card">

					<!-- Card header -->

					<div class="card-header custom-card-header" role="tab" id="headingOne1">
						<a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{ $list->id }}" aria-expanded="false" aria-controls="collapseOne1" style="padding-right:65px;">
							<div class="row">
								<div class="col-10">
									<span class="mb-0 product-left-list">
										<p style="overflow: hidden; min-width: 5ch;  max-width: 25ch; text-overflow: ellipsis; white-space: nowrap;">{{ $list->category }}</p>&nbsp;&nbsp;
									</span>
								</div>
								<div class="col-2">
									<i class="expand_caret caret fa fa-angle-down" style="font-size:14px"></i>
								</div>
							</div>
						</a>
					</div>
					@if($id)
					<!-- Card body -->
					<div id="collapseOne{{ $list->id }}" class="collapse @if($slug->parent == $list->id) show @endif" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
						<div class="card-body card-in-list">
							<ul>@foreach($list->product as $list1)
								<li style="@if($list1->title == $slug->title) background: #aaa; @endif">
									<a href="{{ $list1->slug }}"><i class="rotate-icon">»</i> &nbsp;<p style="overflow: hidden; min-width: 5ch;  max-width: 25ch; text-overflow: ellipsis; white-space: nowrap;">{{ $list1->title }} </p></a>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
					@else
					<!-- Card body -->
					<div id="collapseOne{{ $list->id }}" class="collapse @if($slug->parent == $list->id) show @endif" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
						<div class="card-body card-in-list">
							<ul>@foreach($list->product as $list1)
								<li style="@if($list1->title == $slug->title) background: #aaa; @endif">
									<a href="{{ $list1->slug }}"><i class="rotate-icon">»</i> &nbsp;<p style="overflow: hidden; min-width: 5ch;  max-width: 25ch; text-overflow: ellipsis; white-space: nowrap;">{{ $list1->title }} </p></a>
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
			<!--  <div class="mt-5"style="position: -webkit-sticky; /* Safari */-->
			<!--  position: sticky;-->
			<!--  top: 0;" id="sidebar_data">-->
			<!--  	<div class="sticky1" >-->
			<!--	<p class="inquiry-heading">Inquiry Now</p>-->
			<!--	<div class="p-4">-->
			<!--		{{ Form::open(['method'=>'POST', 'files' => 'true', 'class' => 'user']) }}-->

			<!--			{{ Form::text('mobile_no', '', ['class' => 'form-control', 'id'=>'name', 'placeholder'=>'Mobile No.','required'=>'required'])}}<br>-->

			<!--			{{ Form::textarea('mobile_no', '', ['class' => 'form-control', 'id'=>'name','rows'=>5, 'placeholder'=>'Message...','required'=>'required'])}}-->
			<!--			{{ Form::submit('Send', ['class' => 'btn btn-danger mt-3 form-control inquiry-send']) }}-->

			<!--		{{ Form::close() }}-->
			<!--	</div>-->
			<!--</div>-->
			<!--  </div>-->
		</div>

	</div>

	<div class="col-lg-9 mt-1">
		<div class="col-md-12" style="padding:0px;" id="sidebar_data">
			<img data-src="{{ url('imgs/abrasives-banner.jpg')}}" src="{{url('imgs/loader-2.gif')}}" class="lazy-load" alt="{{ $slug->title }}">
		</div>
		<div class="col-md-12 mt-1" style="background: #f1f1f1">
			<div class="frnt-url">
				<span class="c17">
					<a href="/"><b>Home</b></a>
				</span>

				<span class="c17"> » {{ $slug->title }}</span>
			</div>
		</div>
		<div class="my-4">
			<h1>{{ $slug->title }}</h1>
			<p class="mt-3" style="text-align: justify;">{!! $slug->excerpt !!}</p>
		</div>

		<div class="mt-4">
			<div class="row main-product-head">
				<div class="col-lg-9 col-7">
					<h2 class=""><b>{{ $slug->title }}</b></h2>
				</div>
				<div class="col-lg-3 col-5 pl-5">
					<span class="" onclick="open_pop()" style="cursor:pointer;">REQUEST CALLBACK</span>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-12 mt-3">
					<div class="sticky">
						<div>
							@if($slug->image!='')
							<img class="lazy-load" src="{{url('imgs/loader-2.gif')}}" data-src="{{url('imgs/product/'.$slug->image)}}" alt="{{ $slug->title }}">
							@else
							<img class="lazy-load" src="{{url('imgs/loader-2.gif')}}" data-src="{{url('imgs/unavailable-image-300x225.jpg')}}" alt="{{ $list->title }}">
							@endif
						</div>
						<div class="col-12 mt-2">
							<button class="btn search-btn div_width" onclick="open_pop()">Get Best Quote</button>
						</div>
					</div>
				</div>
				<div class="col-lg-8 mt-3">
					<p class="product-detial">Product Details:</p>
					<div class="table-responsive">
						<p>{!! $slug->table !!}
					</div>
				</div>
			</div>
			<p class="my-4">
				{!! $slug->description !!}
			</p>
			<div class="col-12 mt-2">
				<button class="btn search-btn div_width" onclick="open_pop()">Get Best Quote</button>
			</div>
		</div>

		@if(!empty($faq))
		<h4 class="slug-title-heading faq-contant pt-3">FAQ</h4>
		<div class="mt-4 " style="background: #fff;">
			<div id="accordion">
				@foreach( $faq as $f)
				<div class="custom-card" style="margin-bottom: 5px;">
					<div class="collapsed custom-card-header" style="background: #565454;" id="main{{$f['id']}}" data-toggle="collapse" data-target="#data{{$f['id']}}" aria-expanded="false" aria-controls="collapseThree" style="cursor: pointer;">

						<p style="color: #fff; margin-left:10px">
							{{ $f['question'] }}
							<span class="float-right pr-3"><i class="expand_caret caret fa fa-angle-down" style="font-size:14px"></i></span>
						</p>


					</div>
					<div id="data{{$f['id']}}" class="collapse" aria-labelledby="main{{$f['id']}}" data-parent="#accordion">
						<div class="custom-body pl-3">
							<p class="faq-quetion ">
								<span style="font-weight: bold;">Ans.</span>{!! $f['answer'] !!}
							</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		@endif

	</div>
</div>


@stop