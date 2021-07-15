<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<title>HEYHO | PROMOTIONS </title>

@include('layouts.head')
@include('layouts.navbar')


<style>
/* card */

.promo {
  min-height: 100%;
  background: white;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  display: flex;
  flex-direction: column;
  text-decoration: none;
  color: #444;
  position: relative;
  top: 0;
  transition: all .1s ease-in;
}

.promo:hover {
  top: -2px;
  box-shadow: 0 4px 5px rgba(0,0,0,0.2);
}

.promo article {
  padding: 20px;
  display: flex;
  
  flex: 1;
  justify-content: space-between;
  flex-direction: column;
  
}
.promo .thumb {
  padding-bottom: 60%;
  background-size: cover;
  background-position: center center;
}

.promo p { 
  flex: 1; /* make p grow to fill available space*/
  line-height: 1.4;
}

/* typography */
h1 {
  font-size: 20px;
  margin: 0;
  color: #333;
  padding-bottom: 10px;
}

.promo span {
  font-size: 12px;
  font-weight: bold;
  color: #999;
  text-transform: uppercase;
  letter-spacing: .05em;
  margin: 2em 0 0 0;
}
    </style>

</head>

<body>
    <!-- ***** Header Area End ***** -->
     <!-- ***** Features Big Item Start ***** -->
     <section class="section" id="about">
        <div class="center-heading" style="padding-top: 50px;">
            <h2><em>HEYHO </em>Promotions</h2>
            <p>Enjoy additional discounts off your HEYHO food with our available promo codes!</p>
        </div>
        <div class="support-grid"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="item-2">
                        <div class="promo">
                          <div class="thumb" style="background-image: url(images/popup.png);"></div>
                          <article>
                            <h1>HEYHOFREEDEL</h1>
                            <p>
                                Have your favourite meals on HEYHO delivered to your doorstep with no delivery fees. 
                                Use promo code "HEYHOFREEDEL" to enjoy this promotion!</p>
                            <span>T&C Apply</span>
                          </article>
                        </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                <div class="item-2">
                    <div class="promo">
                      <div class="thumb" style="background-image: url(images/promo2.png);"></div>
                      <article>
                        <h1>HEYHOJOM</h1>
                        <p>Save more on your food. Grasp the chance to get RM10 off with promo code “HEYHOJOM” today. Hurry, the promotion ends today!</p>
                        <span>T&C Apply</span>
                      </article>
                    </div>
              </div>
            </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="item-3">
                        <div class="promo">
                          <div class="thumb" style="background-image: url(images/promo3.png);"></div>
                          <article>
                            <h1>HEYHOWEEKEND</h1>
                            <p>Weekends have never been so sweet. Enjoy an additional RM5 off your HEYHO food today. Just use the code "HEYHOWEEKEND". </p>
                            <span>T&C Apply</span>
                          </article>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
  <!--   ***** Features Big Item End ***** -->


  @include('layouts.footer')

</body>
</html>