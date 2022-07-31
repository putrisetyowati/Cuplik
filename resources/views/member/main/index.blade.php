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
                            <a href="index.html">
                                <img src="member/img/putih_cuplik_2011_fix.jpg" alt="Logo">
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
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            
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

<!-- Top News Start-->
<div class="top-news">
            <div class="container">
           
                    
     
                <div class="row">
                    
                    <div class="col-md-6 tn-left">
                        <div class="row tn-slider">
                            @foreach ($news as $data)
                            <div class="col-md-6">
                                <div class="tn-img">

                                    <img src="{{asset('storage/img/news/'. $data->image)}}" width="450" height="350" />
                                    <div class="tn-title">
                                        <a href="">{{$data->title}}</a>
                                    </div>
                                </div>
                            </div>            
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6 tn-right">


                    <div class="row">
                        <div class="embed-responsive embed-responsive-16by9">
                             <iframe class="embed-responsive-item" src="https://cdn.siar.us/player/?autoplay=1&loop=1&autopause=0&link=ayutv.siar.us/ayutv/live" allow="autoplay; encrypted-media"></iframe>
                        </div>
                            <h3 style="margin:0;padding:0 margin-top:5px"> AYU TVCC <blink><span class="label label-danger">LIVE</span></blink></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <h2>Sosial</h2>
                        <div class="row cn-slider">
                            @foreach ( $news as $data)
                            @if ($data->id_menu=='1')
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <img src="{{asset('storage/img/news/'. $data->image)}}" width="260" height="160"/>
                                        <div class="cn-title">
                                            <a href="">{{$data->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @endforeach
                        </div>
                    </div>


                    <div class="col-md-6">
                        <h2>Politik</h2>
                        <div class="row cn-slider">
                        @foreach ( $news as $data)
                            @if ($data->id_menu=='2')
                    
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <img src="{{asset('storage/img/news/'. $data->image)}}" width="260" height="160"/>
                                        <div class="cn-title">
                                            <a href="">{{$data->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->


<!-- image advertisement start -->
<div class="tab-news">
            <div class="container">
                <div class="row">

                    @foreach ($iklan_gambar as $data)
                    <div class="col-md-6">
                        
                        <div class="tab-content">
                            <div id="featured" class="container tab-pane active">
                               
                               <div class="img">
                                   <img src="{{asset('storage/img/iklan-gambar/'. $data->image)}}" width="500" height="450" />
                               </div>
                                   
                               
                            </div>                           
                        </div>
                    </div>
                    @endforeach
                    
                   
                </div>
            </div>
        </div>

<!-- image advertisement end -->



       
        
        <!-- Tab News Start-->
        <div class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills nav-justified">                           
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#popular">Popular News</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="featured" class="container tab-pane active">
                                @foreach ($popular as $data )
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{asset('storage/img/news/'. $data->image)}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">{{$data->title}}</a>
                                    </div>
                                </div> 
                                @endforeach
                            </div>                           
                        </div>
                    </div>
                    
                   
                </div>
            </div>
        </div>
        <!-- Tab News Start-->

        <!-- Main News Start-->
        <!-- <div class="main-news">
            <div class="container">
                <div class="row">
                   

                    <div class="col-lg-3">
                        <div class="mn-list">
                            <h2>Read More</h2>
                            <ul>
                                <li><a href="">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="">Pellentesque tincidunt enim libero</a></li>
                                <li><a href="">Morbi id finibus diam vel pretium enim</a></li>
                                <li><a href="">Duis semper sapien in eros euismod sodales</a></li>
                                <li><a href="">Vestibulum cursus lorem nibh</a></li>
                                <li><a href="">Morbi ullamcorper vulputate metus non eleifend</a></li>
                                <li><a href="">Etiam vitae elit felis sit amet</a></li>
                                <li><a href="">Nullam congue massa vitae quam</a></li>
                                <li><a href="">Proin sed ante rutrum</a></li>
                                <li><a href="">Curabitur vel lectus</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Main News End-->
        @endsection