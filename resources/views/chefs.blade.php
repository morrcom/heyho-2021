<!DOCTYPE html>
<html lang="en">

<head>

    <title>HEYHO | CHEFS </title>


    @include('layouts.head')
    @include('layouts.navbar')


</head>

<body>
    <!-- ***** Header Area End ***** -->
<!-- ***** Features Big Item Start *****  -->
<div class="left-image-decor"></div>

    <section class="section" id="aboutus">
        <div class="container">
            <div class="center-heading">
                <h2><em>HEYHO</em> Chefs</h2>
            </div>
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{asset('images/right-pic.png')}}" class="rounded img-fluid d-block mx-auto">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">

                            <div class="text">
                                <h4>All-in-one platform</h4>
                                <p>All in one app to manage your home-based business, from managing orders, marketing, delivery and payments.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <div class="text">
                                <h4>Marketing & Promotion</h4>
                                <p>HeyHo will market and promote your products & brand to drive more customers to you.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <div class="text">
                                <h4>Dispute management</h4>
                                <p>HeyHo professional customer support & vendor engagement teams will manage any disputes or complaints from the customers.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <div class="text">
                                <h4>Secure Payments</h4>
                                <p>Secure and hassle-free online payments to minimize cash, protecting both you and customers. Accounting and invoice support provided.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>  

    <!-- ***** Features Big Item Start *****  -->
        <div class="container">
            <div class="center-heading">
                <div  style="text-align:center;">
                <h2><em>GET STARTED</em></h2>
                <p>Just follow these simple steps, and let us guide you until you become a HEYHO Chef!</p> <br> <BR>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                       <div>
                          <h3>1. Register With HEYHO</h3>
                          <p>Contact us now and complete your free registration now, or simply contact our customer agents via social media.</p>
                       </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div>
                           <h3>2. Submit Your Menu</h3> 
                           <p>We'll help you furnish your digital storefront.</p>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div>
                           <h3>3. Start Earning</h3> 
                           <p>We’ll help you to offer your delicious homemade food to more customers.</p>
                        </div>
                     </div>
                  </div>
                  <br> <br>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScJZ5qyS0aRZOXUswCThgrmw6B4LXUOd09G6-lCNBN9BZ04Iw/viewform" class="main-button">REGISTRATION</a>
            </div>
        </div>
   </div>



   @include('layouts.footer')
</body>
</html>