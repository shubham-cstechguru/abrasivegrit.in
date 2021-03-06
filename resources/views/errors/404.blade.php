@php
  $setting =  App\Model\Setting::findOrFail(1);
  $blog    =  App\model\Blog::latest()->paginate(2);
 
@endphp
<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/png" sizes="20x20" href="{{url('imgs/'.$setting->fav_icon)}}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keyword')">
    <meta name="description" content="@yield('description')">
    <link rel="canonical" href="@yield('canonical')"/>
    <meta name="author" content="Shrawan Choudhary">
       <!-- opengraph tag -->
	<meta property="og:site_name" content="Abrasive grit">
    <meta property="og:url" content="@yield('canonical')">
	<meta property="og:type" content="website">
	<meta property="og:title" content="@yield('title')" />
	<meta property="og:description" content="@yield('description')" />
	<meta property="og:image" content="" />
	<!-- Schema.org for Google -->
	<meta itemprop="name" content="Abrasive grit">
	<meta itemprop="description" content="@yield('description')">
	<meta itemprop="image" content="">
	<!-- Twitter -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="@yield('title')">
	<meta name="twitter:description" content="@yield('description')">
	<meta name="twitter:site" content="@Abrasive grit">
	<meta name="twitter:creator" content="@Suncity Group">
	<meta name="twitter:image:src" content="">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	{{Html::style('css/bootstrap.min.css')}}
	{{Html::style('css/style.css')}}
    {{Html::style('css/responsive.css')}}
    {{Html::style('icomoon/style.css')}}
    {{Html::style('css/fontawesome.css')}}
    
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="shortcut icon" href="#" type="image/x-icon" />
      <link rel="apple-touch-icon" href="#" />
      
</head>

<body class="">
   <div class="container show_body">
    	@section('header')
    	<div class="row py-1" style="background:#50adb1;">
              <div class="col-lg-6 col-6 text-left">
                <span class="header-mobile"><a href="tel:{{ $setting->mobile_no }}" style="position:relative;" class="f-13"><i class="icon-phone insta-bg" style="color:#fff;margin-left: 12px;"></i><span style="color:#fff;">{{ $setting->mobile_no }}</span></a></span>
              </div>
              <div class="col-lg-6 col-6 pull-right text-right" style="position:relative;">
                <span class="header-mobile f-13" onclick="open_pop()" style="color:#fff;margin-right:12px;">Send Email <i class="icon-envelop insta-bg" style="color:#fff;"></i></span>
              </div>
        </div>
        <div class="row py-3" style="background-color: #fff;-webkit-box-shadow: 0px 6px 10px -5px rgba(0,0,0,0.75);position: sticky;top: 0;z-index: 2;">
            <div class="col-lg-4 col-3">
                <a href="{{url('/')}}" class="navbar-brand" style="padding:0px;margin-left:15px;">
                    <img src="{{ url('imgs/'.$setting->logo) }}" alt="$setting->sitename" >
                </a>
            </div>
          <div class="col-lg-8 col-9">
           <nav class="navbar navbar-expand-lg navbar-light float-right">
                 
              <button class="navbar-toggler" style="margin-left:auto;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse ml-5 mt-3"  id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" >
                  <li class="nav-item" style="text-align:right;">
                    <a class="nav-link" href="{{ url('/') }}">Home </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/product') }}">Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/blog') }} ">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                  </li>
                </ul>
               
              </div>
            </nav>
          </div>
        </div>
    @show

<div class="container">
      <div class="row text-center my-5">
        <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main">
          <div class="row">
            <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
              <h1 class="m-0">404 - Page not found</h1>
              <!--<h6>Page not found - abrasivegrit.in</h6>-->
              <!--<p>Lorem ipsum dolor sit <span class="text-info">amet</span>, consectetur <span class="text-info">adipisicing</span> elit, sed do eiusmod.</p>-->
            </div>
          </div>
        </div>
      </div>
    </div>

  	@section('footer')
        <section class="row footer-section mt-0">
        <div class="container">
        <!--<div class="footer-logo text-center">-->
        <!--    <a href="https://www.cbgindustries.in"><img src="https://www.cbgindustries.in/imgs/icon 1.png" alt="" width="70"></a>-->
        <!--</div>-->
        <div class="row">
        <div class="col-lg-3 col-sm-6">
        <div class="footer-widget about-widget">
            
        <p class="footer-heading">About</p>
        <p>Abrasive blasting, more commonly known as sandblasting, is the operation of forcibly propelling a stream of abrasive material against a surface under high pressure to smooth a rough surface, roughen a smooth surface, shape a surface or remove surface contaminants.</p>
        
        </div>
        </div>
        
        <div class="col-lg-3 col-sm-6">
        <div class="footer-widget about-widget">
        <p class="footer-heading">Quick Link</p>
        <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About Us</a></li>
        <li><a href="{{ url('/blog') }}">Blog</a></li>
        <li><a href="{{ url('/product') }}">Product</a></li>
        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
        
        <li><a href="#">Support</a></li>
        <li><a href="#">Terms of Use</a></li>
        </ul>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6">
        <div class="footer-widget about-widget">
        <p class="footer-heading">Top Blog</p>
        <div class="fw-latest-post-widget">
            @foreach( $blog as $list )
            <div class="lp-item">
            <div class="lp-thumb set-bg">
                <a href="{{ url('blog/'. $list->slug)}}">
                    @if($list->image!='')
					<img src="{{url('imgs/blogs/'.$list->image)}}" alt="{{ $list->title }}">
					@else
					<img class="" src="{{url('imgs/unavailable-image-300x225.jpg')}}" alt="{{ $list->title }}">
					@endif
                </a>
            </div>
            <div class="lp-content">
            <p class="footer-blog mb-0">{{ $list->title }}</p>
            <span>{{ $list->updated_at }}</span>
            <!--<a href="{{ url('blog/'. $list->slug)}}" class="readmore">Read More</a>-->
            </div>
            </div>
            @endforeach   
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6">
        <div class="footer-widget contact-widget">
        <p class="footer-heading">Get in Touch</p>
        <div class="con-info">
        <span><i class="icon-office"></i></span>
        <p> {{ $setting->sitename }} </p>
        </div>
        <div class="con-info">
        <span><i class="icon-location"></i></span>
        <p>{{ $setting->address }}</p>
        </div>
        <div class="con-info">
        <span><i class="icon-whatsapp"></i></span>
        <p>{{ $setting->mobile_no }}</p>
        </div>
        <div class="con-info">
        <span><i class="icon-envelop"></i></span>
         <p><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="adc2cbcbc4cec8edd4c2d8dfc8c0ccc4c183cec2c0">{{ $setting->email }}</a></p>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="social-links-warp text-center">
        <div class="container">
        <div class="social-links text-center">
        <a href="#" class="instagram"><i class="icon-instagram"></i><span>instagram</span></a>
        <a href="#" class="google-plus"><i class="icon-google-plus"></i><span>g+plus</span></a>
        <a href="#" class="pinterest"><i class="icon-pinterest"></i><span>pinterest</span></a>
        <a href="#" class="facebook"><i class="icon-facebook"></i><span>facebook</span></a>
        <a href="#" class="twitter"><i class="icon-twitter"></i><span>twitter</span></a>
        <a href="#" class="youtube"><i class="icon-youtube"></i><span>youtube</span></a>
        <!--<a href="#" class="tumblr"><i class="icon-tumblr-square"></i><span>tumblr</span></a>-->
        </div>
        
        <p class="text-white text-center mt-5">Copyright &copy; All rights reserved Abrasivegrit. Website Design and Developed by <a href="https://www.suncitygroup.org/" target="_blank">Suncity Group</a></p>
        
        </div>
        </div>
        </section>
  	@show
   </div> 
   </div>
   </div>
   </div>
	<!-- ALL JS FILES -->
	{{ Html::script('js/jquery.min.js') }}
    {{ Html::script('js/popper.min.js') }}
    {{ Html::script('js/bootstrap.min.js') }}
    {{ Html::script('js/ajax.js') }}
  
 <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <p class="modal-title other-heading">Send Enquiry</p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">
        {{ Form::open(['id'=>'inquiry_form', 'method'=>'post', 'data-url'=> route('ajax-route')]) }}
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="user_name">Name</label>
                    <input type="text" class="form-control" id="user_name" placeholder="Enter your name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="user_email">Email address</label>
                    <input type="email" class="form-control" id="user_email" placeholder="Enter email">
                  </div>
                </div>
             </div>
             <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="user_mobile">Mobile Number</label>
                    <input type="tel" class="form-control" id="user_mobile" placeholder="Enter mobile number">
                  </div>
                </div>
            <div class="col-md-6"> 
            <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country"  placeholder="Enter country">
                  </div>
                </div>
            </div>
         <div class="form-group">
            <label for="user_message">Enquiry text</label>
            <textarea class="form-control" id="user_message" rows="3"></textarea>
          </div>
          <p id="ajax_message" class="text-success"></p>
          <button type="submit" class="btn btn-primary popups-btn">Send</button>
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
{{ Html::script('//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js') }}
<script>
    
    function open_pop(){
        $('.modal').modal('show');
    }
     $('.responsive').slick({
         
          infinite:true,
          speed: 3000,
          slidesToShow: 4,
          slidesToScroll: 4,
          arrows:false,
          autoplay: true,
          autoplaySpeed: 5000,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        });
        
	
</script>
</body>
</html>