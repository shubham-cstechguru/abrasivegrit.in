@extends('backend.layout.master')

@section('title','category')

@section('contant')


		<div class="page-wrapper p-5">

			@if( $errors->any() )
	            <div class="alert alert-danger" style="color: red;">
	                @foreach($errors->all() as $error)
	                    <li>{!! $error !!}</li>
	                @endforeach
	            </div>
	        @endif

	        @if (\Session::has('success'))
	            <div class="alert alert-success" style="color: green">
	                {!! \Session::get('success') !!}</li>
	            </div>
	        @endif

	        @if (\Session::has('danger'))
	            <div class="alert alert-danger" style="color: red;">
	                {!! \Session::get('danger') !!}</li>
	            </div>
	        @endif
	        <h2 style="text-align: center;">Edit Category</h2>
	        {{ Form::open(['method'=>'POST', 'files' => 'true', 'class' => 'user'])  }}
        <div class="row">        
	        <div class="col-md-6">
		        <div class="form-group">
		        	{{ Form::label('category', 'Category Name') }}
		            {{ Form::text('category', '', ['class' => 'form-control','placeholder' => 'enter category name']) }}      
		        </div>
		         <div class="form-group">
		            {{ Form::label('slug_category', 'Slug') }}
		            {{ Form::text('slug_category', '', ['class' => 'form-control','placeholder' => 'slug']) }}
		        </div>
		        <div class="form-group">
		            {{ Form::label('parent') }}
        			{{ Form::select('parent', $parentArr, '', ['class' => 'form-control']) }}
        		</div>
		    </div>
		    <div class="col-md-6">  
		        <div class="form-group">
			        <img src="{{url('imgs/category/'.$edit->image)}}" width="153px"><br>
    			    {{Form::label('image', ' Choose image')}}
    				{{ Form::file('image', ['class' => 'form-control']) }}
    			</div> 
		    </div>
			<div class="col-md-12"> 
				<div class="form-group">
						{{Form::label('excerpt', 'Excerpt')}}
						{{Form::textarea('excerpt', '', ['class' => 'form-control', 'id' => 'excerpt', 'placeholder'=>'Enter Excerpt','rows'=>'8', 'col'=>'6'])}}
				</div>
			</div>
			<!--<div class="col-md-12">-->
			<!--	<div class="form-group">-->
			<!--		{{Form::label('service_description', 'Enter description')}}-->
			<!--		{{Form::textarea('service_description', '', ['class' => 'form-control editor','id'=>'description', 'placeholder'=>'Enter description'])}}-->
			<!--	</div>-->
			<!--</div>-->
			<h6 class="col-12"><p class="bg-primary text-white p-4 font-weight-bold">Meta Info</p></h6>
			<div class="col-lg-6">
				<div class="form-group">
					{{Form::label('seo_title', 'Seo Title')}}
					{{Form::text('seo_title', '', ['class' => 'form-control', 'id'=>'seo_title','placeholder'=>'Enter title'])}}
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					{{Form::label('keywords', 'Keywords')}}
					{{Form::text('keywords','', ['class'=>'form-control','id'=>'keywords', 'placeholder'=>'write...'])}}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					{{Form::label('seo_description', 'Seo Description')}}
					{{Form::textarea('seo_description', '', ['class' => 'form-control', 'id'=>'seo_description', 'placeholder'=>'write...','rows'=>'4', 'col'=>'3'])}}
				</div>
					<div class="text-right mt-4">
						{{ Form::submit('Save', ['class' => 'login-btn btn btn-orange']) }}
					</div>
			</div>
		    {{ Form::close() }}
        </div>
   
		   

		    </div>
@stop
		    	
				    

			
		
	
