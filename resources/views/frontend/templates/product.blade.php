<div class="container">
    <div class="section-title">
        @if(isset($name))
        <h2 class="text-center" style="text-transform: uppercase;">{{ $name->name  }}</h2>
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
</div>