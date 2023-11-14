@extends('layouts.app')

@section('content')


<div id="page-content" class="page-content" style="margin-top: -25px">
    <div class="banner">
        <div class="text-center position-relative">
            {{-- <video width="100%" preload="auto" loop autoplay muted>
                <source src='assets/media/explore.mp4' type='video/mp4' />
                <source src='assets/media/explore.webm' type='video/webm' />
            </video> --}}

            <img src="{{asset('assets/img/logo/back.jpg') }}" alt="Background Image" style="width:100%;">
            <div class="container position-absolute text-white home-app" >
                
                <h1 class="pt-5">
                    Simplify Your Life <br>    
                     Let Us Handle Your Groceries
                </h1>
                <p class="lead">
                    Providing Freshness Every Day
                </p>

                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fa fa-shopping-cart" style="color: #f8f8be;"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Shop with Ease
                                </h4>
                                <p class="card-text">
                                    Browse our selection, click-to-buy the products you desire, and effortlessly submit your order when you've completed your shopping. It's that simple!
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fas fa-leaf" style="color: #f8f8be;"></i>                               
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Fresh Harvest
                                </h4>
                                <p class="card-text">
                                    We guarantee the freshness of our produce, harvested and delivered within 24 hours of the harvest day. Our team ensures that each item meets our high-quality standards.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                     <i class="fas fa-truck " style="color: #f8f8be;"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Swift Delivery
                                </h4>
                                <p class="card-text">
                                    Our dedicated team ensures your orders are swiftly delivered two days in advance. This allows farmers to prepare for harvest precisely according to your specifications – no wasted produce.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="services">
    <h2 class="title"> Our Services </h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 text-center gray-bg">
                    <div class="card-icon">
                        <div class="card-icon-i text-success">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            Shop with Ease
                        </h4>
                        <p class="card-text">
                            Browse our selection, click-to-buy the products you desire, and effortlessly submit your order when you've completed your shopping. It's that simple!
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 text-center gray-bg">
                    <div class="card-icon">
                        <div class="card-icon-i text-success">
                            <i class="fas fa-leaf"></i>                               
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            Fresh Harvest
                        </h4>
                        <p class="card-text">
                            We guarantee the freshness of our produce, harvested and delivered within 24 hours of the harvest day. Our team ensures that each item meets our high-quality standards.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 text-center gray-bg">
                    <div class="card-icon">
                        <div class="card-icon-i text-success">
                             <i class="fas fa-truck "></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            Swift Delivery
                        </h4>
                        <p class="card-text">
                            Our dedicated team ensures your orders are swiftly delivered two days in advance. This allows farmers to prepare for harvest precisely according to your specifications – no wasted produce.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="why">
    <h2 class="title">Why OrganicLife</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 text-center gray-bg">
                    <div class="card-icon">
                        <div class="card-icon-i text-success">
                            <i class="fas fa-leaf"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            Straight from the Farm
                        </h4>
                        <p class="card-text">
                            Our farm-to-table concept emphasizes on getting the fresh produce directly from local farms to your tables within one day, hence you know you get the freshest produce straight from harvest.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 text-center gray-bg">
                    <div class="card-icon">
                        <div class="card-icon-i text-success">
                            <i class="fa fa-question"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            Know Your Farmers
                        </h4>
                        <p class="card-text">
                            We want you to know exactly who is growing your food by having the farmers profile on each item and farmers page. You’re welcome to visit the farms and see the love they put into growing your food.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 text-center gray-bg">
                    <div class="card-icon">
                        <div class="card-icon-i text-success">
                            <i class="fas fa-smile"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            Improving Farmers’ Livelihood
                        </h4>
                        <p class="card-text">
                            Slowly but sure, by cutting the complex supply chain and food system, we hope to improve the welfare of farmers by giving them the returns they deserve for their hard work.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-5 text-center">
                <a href="{{ route('products.shop') }}" class="btn btn-primary btn-lg">SHOP NOW</a>
            </div>
        </div>
    </div>
</section>

<section id="categories" class="pb-0">
    <h2 class="title">Categories</h2>
    <div class="landing-categories owl-carousel">
        @foreach ($categories as $category)
            <div class="item">
                <div class="card rounded-0 border-0 text-center">
                    <img src="{{ asset('assets/img/'.$category->image.'')}}">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">
                        <!-- <h4 class="card-title">Vegetables</h4> -->
                        <a href="{{ route('single.category', $category->id)}}" class="btn btn-primary btn-lg">{{ $category->name}}</a>
                    </div>
                </div>
            </div>
        @endforeach
        

    </div>
</section>
@endsection
