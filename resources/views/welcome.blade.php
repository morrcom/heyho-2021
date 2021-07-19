<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<title>HEYHO</title>

@include('layouts.head')

<!-- ***** Pop Up Start ***** -->

<!-- ***** Pop Up End***** -->

@include('layouts.header')

<!-- carousel -->

<!-- ***** Welcome Area Start ***** -->
<div class="welcome-area" id="welcome">

    <!-- ***** Header Text Start ***** -->
    
    <div class="header-text">
        <div class="container">
            <div class="row">
                <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <h1>Welcome to <em>HEYHO! </em></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Text End ***** -->
</div>
<!-- ***** Welcome Area End ***** -->
<div class="right-image-decor"></div>

<!-- ***** ABOUT US ***** -->
<section class="section" id="aboutus">
<div class="container">
<div class="row">

    <div class="col-sm-12 col-md-6">
        <h2>WHAT IS  <EM> HEYHO?</EM></h2>
        <div
        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
        <div class="left-card card-body">
            <p class="card-text" style="color: white;">
            HEYHO is a platform for Home-based Chefs to manage your business better where you could gain extra income at the 
            comfort of your own home without having to face any trouble of managing the ordering process.</p>
          </div>   
    </div>
    <h3>DOWNLOAD NOW!</h3>
    <a href="https://apps.apple.com/bz/app/heyho/id1560946632" target="_blank" ><img src="{{asset('images/app-store.png')}}" style="width: 200px;"> </a>
 <a href="https://play.google.com/store/apps/details?id=my.heyho.customer.android&hl=en&gl=US" target="_blank" ><img src="{{asset('images/play-store.png')}}" style="width: 200px;"> </a>
    </div>
    <div class="col-sm-12 col-md-6">
        <img src="{{asset('images/phone.png')}}" class="rounded img-fluid d-block mx-auto" alt="App">
    </div>
    </div>
</div>
</section>


<!-- ***** CARDS Start ***** -->

<div class="container">
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
        <div class="card">
            <div class="card-header pb-0 bg-white">
                <h5 class="font-weight-bold mt-2">ORDER ONLINE</h5>
            </div>
            <img src="{{asset('images/card1.png')}}" class="img-fluid">
            <div class="card-body">
                <p class="text-muted "> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
        data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
        <div class="card">
            <div class="card-header pb-0 bg-white">
                <h5 class="font-weight-bold mt-2">FAST DELIVERY</h5>
            </div>
            <img src="{{asset('images/card2.png')}}" class="img-fluid">
            <div class="card-body">
                <p class="text-muted "> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
        data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
        <div class="card">
            <div class="card-header pb-0 bg-white">
                <h5 class="font-weight-bold mt-2">YOUR CHOICE</h5>
            </div>
            <img src="{{asset('images/card3.png')}}" class="img-fluid">
            <div class="card-body">
                <p class="text-muted "> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ***** CARDS End ***** -->

<div class="left-image-decor"></div>


<!-- ***** Features Big Item End ***** -->
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="center-heading">
                            <h3><em> Discover HEYHO Kitchens</em></h3>
                            <h2>NEAR, FAR, WHEREVER YOU ARE</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="slider-hero">
                            <div class="featured-carousel owl-carousel">
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/slider-1.jpeg);">
                                            <div class="text text-center">
                                                <h2>Kuala Lumpur</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/slider-2.jpeg);">
                                            <div class="text text-center">
                                                <h2>SHAH ALAM</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/slider-3.jpeg);">
                                            <div class="text text-center">
                                                <h2>PUTRAJAYA</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- ***** Kitchen Categories Start ***** 
        <div class="col-md-12 text-center">
            <div class="center-heading">
                <h3><em> SKILLFULL KITCHEN, WONDERFUL FOOD</em></h3>
                <h3>MAY I TAKE YOUR ORDER?</h3>
            </div>
        </div>
        <div style=" height: 600px;
        margin: 0;
        display: grid;
        grid-template-rows: 500px 100px;
        grid-template-columns: 1fr 30px 30px 30px 30px 30px 1fr;
        align-items: center;
        justify-items: center;">
            <input type="radio" name="position"/>
            <input type="radio" name="position"  checked />
            <input type="radio" name="position" />
            <input type="radio" name="position" />
            <main id="carousell">
              <div class="food"><img src="assets/images/food 1.png" class="img-fluid"></div>
              <div class="food"><img src="assets/images/food 2.png" class="img-fluid"></div>
              <div class="food"><img src="assets/images/food 3.png" class="img-fluid"></div>
              <div class="food"><img src="assets/images/food 4.png" class="img-fluid"></div>
              <main>
              </div> -->
<!-- ***** Chefs Start ***** 

<section class="section" id="chefs">
    <div class="container">
        <div class="center-heading">
            <div  style="text-align:center"
            data-scroll-reveal="enter center move 30px over 0.6s after 0.4s">
            <h2>Become a <em>HeyHo Chef</em> Now!</h2> 
            <img src="assets/images/left-pic.png" class="rounded img-fluid d-block mx-auto" width="300" alt="chef"> <br>

            <p>Grow big, get more & earn more with HeyHo! </p> <br>
            <a href="chefs.html" class="main-button"> FIND OUT MORE</a>
        </div>
    </div>
</div>
</section> -->


<!-- ***** Features Big Item End ***** -->



<!-- ***** CHEFS Start ***** -->
<div class="recruitment">
<div class="container">
    <div class="recruit-content">
        <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12"> </div>
            <div class="right-content col-lg-6 col-md-12 col-sm-12" style="text-align: center;">
                <h2><em>JOIN US NOW!</em></h2>
                <h3> WE TAKE YOUR KITCHEN TO THE NEXT LEVEL</h3>
                <p>Grow big, get more & earn more with HEYHO! </p>
                <a href="chefs.html" class="chef-button"> FIND OUT MORE</a>
            </div>
        </div>
    </div>
</div>



@include('layouts.footer')

</body>
</html>
