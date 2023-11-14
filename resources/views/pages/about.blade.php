@extends('layouts.app')

@section('content')

<div id="page-content" class="page-content" style="margin-top: -25px">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{ asset('assets/img/bg-header.jpg') }}');">
            <div class="container">
                <h1 class="pt-5">
                    About Us
                </h1>
                <p class="lead">
                    We simplify your life by handling your groceries
                </p>
            </div>
        </div>
    </div>

    <section class="bg-leaf">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center mb-3">
                    <h1 class="title text-uppercase mb-2">OrganicLife Store</h1>
                   
                </div>
                <div class="col-md-10">
                    <p class="text-justify">
                        Welcome to <b>OrganicLife</b>, where health meets convenience! We're delighted to have you here on our platform, dedicated to revolutionizing the way you experience organic food. Our mission is simple yet profound: to provide a seamless and enjoyable way for you to access organic, wholesome products that contribute to a healthier lifestyle. At <b>OrganicLife</b>, we believe that the choices we make about the food we consume play a pivotal role in our well-being, and we're committed to making those choices easier and more accessible for you.                    </p>
                </div>
            </div>

            <div class="row justify-content-center align-items-center mt-3">
                <div class="col-md-4">
                    <img src="{{ asset('assets/img/about1.jpg')}}" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h5>
                        Commitment to Quality
                    </h5>
                    <p>
                        Quality is at the heart of everything we do at <b>OrganicLife</b>. We take pride in our unwavering commitment to providing you with the highest quality organic products. Through meticulous sourcing practices, partnerships with local farmers who share our values, and stringent quality control measures, we ensure that every item you order meets the standards of excellence we stand for. Your well-being is our priority, and we are dedicated to delivering products that reflect our commitment to quality.                    
                    </p>
                   
                </div>
                
            </div>

            <div class="row justify-content-center align-items-center  mt-3">
                <div class="col-md-6">
                    <h5>
                        Community Involvement
                    </h5>
                    <p>
                        <b>OrganicLife</b> is more than just a platform; it's a community. We actively engage with local farmers and support organic farming practices through community programs and partnerships. The impact of your orders extends beyond your doorstep, reaching local communities and positively influencing the lives of those who cultivate the organic goodness you enjoy. Discover the stories of how your choices make a real difference in the communities we serve.                    </p>
                    
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/img/about3.jpg')}}"class="img-fluid">
                </div>
            </div>

            <div class="row justify-content-center align-items-center mt-3">
                <div class="col-md-4">
                    <img src="{{ asset('assets/img/about2.jpg')}}" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h5>
                        Sustainability Initiatives
                    </h5>
                    <p>
                        At <b>OrganicLife</b>, we recognize the importance of sustainability in preserving our planet for future generations. Our commitment goes beyond providing organic products; we actively support sustainability initiatives that reduce environmental impact and promote eco-friendly practices. From packaging choices to supporting environmentally conscious farming practices, we strive to make a positive impact on the planet with every order you place.                    
                    </p>
                </div>
            </div>

            <div class="row justify-content-center align-items-center  mt-5">
                
                    <h5>
                        Future Vision
                    </h5>
                    <p>
                        The future of <b>OrganicLife</b> is bright and full of exciting possibilities. We envision a world where accessing organic, wholesome products is not just easy but enjoyable. In the coming months and years, we have plans for exciting features, expansions into new markets, and ambitious goals to further our mission. Join us on this journey, and together, let's shape the future of organic living.
                    </p>                    
              

            </div>
        </div>
    </section>
</div>
@endsection