<div class="header_section">
    <div class="container-fluid header_main">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="logo" href="{{route('home')}}"><img src="{{asset('storage/images/logo.png')}}"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                   <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{route('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{route('features')}}">Features</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#"><img src="{{asset('storage/images/serach-icon.png')}}"></a>
                </li>
             </ul>
          </div>
       </nav>
    </div>

    @if (Route::current()->getName() == 'home')

        <!-- banner section start -->
        <div class="container-fluid">
            <div class="banner_section layout_padding">
            <h1 class="banner_taital">welcome <br>our blog</h1>
            <div id="my_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="image_main">
                        <div class="container">
                            <img src="{{asset('storage/images/img-1.png')}}" class="image_1">
                            <div class="contact_bt"><a href="{{route('contact')}}">Contact Us</a></div>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="image_main">
                        <div class="container">
                            <img src="{{asset('storage/images/img-1.png')}}" class="image_1">
                            <div class="contact_bt"><a href="{{route('contact')}}">Contact Us</a></div>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="image_main">
                        <div class="container">
                            <img src="{{asset('storage/images/img-1.png')}}" class="image_1">
                            <div class="contact_bt"><a href="{{route('contact')}}">Contact Us</a></div>
                        </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
                </a>
            </div>
            </div>
        </div>
        <!-- banner section end -->

    @endif

 </div>
