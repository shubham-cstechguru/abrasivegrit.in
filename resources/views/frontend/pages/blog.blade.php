@extends('frontend.layouts.default')
@section('title','Blogs | Sand Blasting Grit for Sale in India')
@section('keyword','Abrasive grit, abrasive grit for blasting, steel shots, supplier, steel grit exporter, aluminium oxide supplier, garnet sand manufacturer, garnet sand supplier, garnet sand 80 mesh, glass beads supplier, plastic beads supplier')
@section('description','Abrasive Grit Manufacturer - Abrasive Grit Manufacturer provides good range of steel shot grit, steel shot, aluminum oxide, glass beads and garnet sand in India.  We are the leading supplier &amp; exporter of garnet sand 80 mesh, chilled iron grit and steel cut wire shot in India.')

@section('canonical',URL::current())
@section('contant')

<div class="page-top-info row">
<div class="container">
<h4>Blog</h4>
<div class="site-pagination">
<a href="{{ url('/') }}">Home</a> / Blog
</div>
</div>
</div>

        <!--</section>-->
<section class="row product-filter-section py-5">
    <div class="container">
        <div class="section-title">
            <h2 class="text-center">BLOGS</h2>
            <p class="pt-2 text-center my-5">See our latest blogs on minerals export,metallic shot, metal grits,industrial steel abrasives media,and steel shots in India.</p>
        </div>
        @if( !$blog->isEmpty() )
        <div class="row">
            
            @foreach($blog as $list)
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="product-item">
                        <div class="pi-pic">
                            <div class="card">
                                <a href="{{ url('blog/'. $list->slug)}}">
                                    @if($list->image!='')
    								<img src="{{url('imgs/blogs/'.$list->image)}}" alt="{{ $list->title }}" width="251">
    								@else
    								<img class="" src="{{url('imgs/unavailable-image-300x225.jpg')}}" alt="{{ $list->title }}" >
    								@endif
                                </a>
                                <div class="pi-text my-3" style="min-height:50px;">
                                    <a href="{{ url('blog/'. $list->slug)}}" style="padding:0;">
                                        <p class="text-center font-weight-bold">{{$list->title}}</p>
                                    </a>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $blog->links() }}
        @endif
    </div>
</section>

@stop
