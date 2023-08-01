@extends('layouts.master')

@section('title', 'About')

@section('content')

    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-lg-8 col-sm-12">
                 <div class="about_img"><img src="{{asset('storage/images/about-img.png')}}"></div>
                 <div class="like_icon"><img src="{{asset('storage/images/like-icon.png')}}"></div>
                 <p class="post_text">Post By : 09/06/2019</p>
                 <h2 class="most_text">Most Awesome Blue Lake With Snow <br>Mountain</h2>
                 <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                 <div class="social_icon_main">
                    <div class="social_icon">
                       <ul>
                          <li><a href="#"><img src="{{asset('storage/images/fb-icon.png')}}"></a></li>
                          <li><a href="#"><img src="{{asset('storage/images/twitter-icon.png')}}"></a></li>
                          <li><a href="#"><img src="{{asset('storage/images/instagram-icon.png')}}"></a></li>
                       </ul>
                    </div>
                    <div class="read_bt"><a href="#">Read More</a></div>
                 </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                 <div class="image_5"><img src="{{asset('storage/images/img-5.png')}}"></div>
                 <h1 class="about_taital">About Us</h1>
                 <p class="about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                 <div class="read_bt_1"><a href="#">Read More</a></div>
              </div>
           </div>
        </div>
     </div>
     <!-- about section end -->

@endsection

