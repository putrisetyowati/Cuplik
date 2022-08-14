@extends('member.app')
@section('title', 'home')
@section('content')

        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tb-contact">
                            <p><i class="fas fa-envelope"></i>info@mail.com</p>
                            <p><i class="fas fa-phone-alt"></i>+012 345 6789</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tb-menu">
                            @foreach ($tagsub as $data)
                            <a href="{{ url('tagsub')}}/{{ $data->id }}">{{$data->tag->name}}</a>
                                
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar Start -->
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="b-logo">
                            <a href="">
                                <img src="{{ asset('member/img/putih_cuplik_2011_fix.jpg') }}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
            
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="b-search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="" class="nav-item nav-link active">Home</a>
                            
                            @foreach ($menu as $data)
                            <a href="{{ url('menu')}}/{{ $data->id }}" class="nav-item nav-link">{{$data->name}}</a>
                                
                            @endforeach
                        </div>


                        
                        <div class="social ml-auto">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
  
    
  
  
  <!-- Single News Start -->
  <div class="single-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
           
                        <div class="sn-container">
                            <div class="sn-img">
                                <img src="{{asset('storage/img/news/'. $news->image)}}" />
                            </div>
                            <div class="sn-content">
                                <h1 class="sn-title">{{$news->title}}</h1>
                                {!!$news->content!!}
   
                                
                            </div>
                        </div>
         

                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar">
                            
                            <div class="sidebar-widget">
                                <div class="tab-news">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill">IKLAN</a>
                                        </li> 
                                    </ul>

                                    <div class="tab-content">
                                        <div id="featured" class="container tab-pane active">
                                            @foreach ($iklan as $data)
                                            <div class="tn-news">
                                                <div class="img">
                                                    <img src="{{asset('storage/img/iklan-gambar/'. $data->image)}}" width="350" height="350"/>
                                                </div>
                                            </div>
                                                
                                            @endforeach

                                            
                                    </div>
                                </div>
                            </div>
        

                            <div class="sidebar-widget">
                                <h2 class="sw-title">News Category</h2>
                                <div class="category">
                                    <ul>
                                        <li><a href="">National</a><span>(98)</span></li>
                                        <li><a href="">International</a><span>(87)</span></li>
                                        <li><a href="">Economics</a><span>(76)</span></li>
                                        <li><a href="">Politics</a><span>(65)</span></li>
                                        <li><a href="">Lifestyle</a><span>(54)</span></li>
                                        <li><a href="">Technology</a><span>(43)</span></li>
                                        <li><a href="">Trades</a><span>(32)</span></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <h2 class="sw-title">Tags Cloud</h2>
                                <div class="tags">
                                    <a href="">National</a>
                                    <a href="">International</a>
                                    <a href="">Economics</a>
                                    <a href="">Politics</a>
                                    <a href="">Lifestyle</a>
                                    <a href="">Technology</a>
                                    <a href="">Trades</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single News End-->  

        @endsection