@extends('Layouts.Main')

@section('container')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--
    - primary meta tag
  -->
  <title>Makan - Hight Quality Pet Food</title>
  <meta name="title" content="Kitter - Hight Quality Pet Food">
  <meta name="description" content="This is an eCommerce html template made by codewithsadee">

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">

  <!--
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">

</head>

<body id="top">

   <!--
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home" style="background-image: url('./assets/images/hero-banner.jpg')">
        <div class="container">

            <h1 class="h1 hero-title">
                <span class="span">High Quality</span> Pet Food
            </h1>

            <p class="hero-text">Sale up to 40% off today</p>

            <a href="#" class="btn">Shop Now</a>

        </div>
    </section>





    <!--
         - #CATEGORY
       -->

    <section class="section category" aria-label="category">
        <div class="container">

            <h2 class="h2 section-title">
                <span class="span">Top</span> categories
            </h2>

            <ul class="has-scrollbar">

                <li class="scrollbar-item">
                    <div class="category-card">

                        <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                            <img src="./assets/images/category-1.jpg" width="330" height="300" loading="lazy" alt="Cat Food" class="img-cover">
                        </figure>

                        <h3 class="h3">
                            <a href="#" class="card-title">Cat Food</a>
                        </h3>

                    </div>
                </li>

                <li class="scrollbar-item">
                    <div class="category-card">

                        <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                            <img src="./assets/images/category-2.jpg" width="330" height="300" loading="lazy" alt="Cat Toys" class="img-cover">
                        </figure>

                        <h3 class="h3">
                            <a href="#" class="card-title">Cat Toys</a>
                        </h3>

                    </div>
                </li>

                <li class="scrollbar-item">
                    <div class="category-card">

                        <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                            <img src="./assets/images/category-3.jpg" width="330" height="300" loading="lazy" alt="Dog Food" class="img-cover">
                        </figure>

                        <h3 class="h3">
                            <a href="#" class="card-title">Dog Food</a>
                        </h3>

                    </div>
                </li>

                <li class="scrollbar-item">
                    <div class="category-card">

                        <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                            <img src="./assets/images/category-4.jpg" width="330" height="300" loading="lazy" alt="Dog Toys" class="img-cover">
                        </figure>

                        <h3 class="h3">
                            <a href="#" class="card-title">Dog Toys</a>
                        </h3>

                    </div>
                </li>

                <li class="scrollbar-item">
                    <div class="category-card">

                        <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                            <img src="./assets/images/category-5.jpg" width="330" height="300" loading="lazy" alt="Dog Sumpplements" class="img-cover">
                        </figure>

                        <h3 class="h3">
                            <a href="#" class="card-title">Dog Sumpplements</a>
                        </h3>

                    </div>
                </li>

            </ul>

        </div>
    </section>





    <!--
         - #OFFERS
       -->

    <section class="section offer" aria-label="offer">
        <div class="container">

            <ul class="grid-list">

                <li>
                    <div class="offer-card has-bg-image img-holder" style="background-image: url('./assets/images/offer-banner-1.jpg'); --width: 540; --height: 374;">

                        <p class="card-subtitle">Selected Items. Online Only.</p>

                        <h3 class="h3 card-title">
                            Hot Summer <span class="span">Deals</span>
                        </h3>

                        <a href="#" class="btn">Read More</a>

                    </div>
                </li>

                <li>
                    <div class="offer-card has-bg-image img-holder" style="background-image: url('./assets/images/offer-banner-2.jpg'); --width: 540; --height: 374;">

                        <p class="card-subtitle">Treats & Grooming</p>

                        <h3 class="h3 card-title">
                            Spoil your true <span class="span">love</span>
                        </h3>

                        <a href="#" class="btn">Read More</a>

                    </div>
                </li>

                <li>
                    <div class="offer-card has-bg-image img-holder" style="background-image: url('./assets/images/offer-banner-3.jpg'); --width: 540; --height: 374;">

                        <p class="card-subtitle">Our Brand You Will Love</p>

                        <h3 class="h3 card-title">
                            New in this <span class="span">year</span>
                        </h3>

                        <a href="#" class="btn">Read More</a>

                    </div>
                </li>

            </ul>

        </div>
    </section>

    <!--
         - #SERVICE
       -->

    <section class="section service" aria-label="service">
        <div class="container">

            <img src="./assets/images/service-image.png" width="122" height="136" loading="lazy" alt="" class="img">

            <h2 class="h2 section-title">
                <span class="span">What your pet needs,</span> when they need it.
            </h2>

            <ul class="grid-list">

                <li>
                    <div class="service-card">

                        <figure class="card-icon">
                            <img src="./assets/images/service-icon-1.png" width="70" height="70" loading="lazy" alt="service icon">
                        </figure>

                        <h3 class="h3 card-title">Free Same-Day Delivery</h3>

                        <p class="card-text">
                            Order by 2pm local time to get free delivery on orders $35+ today.
                        </p>

                    </div>
                </li>

                <li>
                    <div class="service-card">

                        <figure class="card-icon">
                            <img src="./assets/images/service-icon-2.png" width="70" height="70" loading="lazy" alt="service icon">
                        </figure>

                        <h3 class="h3 card-title">30 Day Return</h3>

                        <p class="card-text">
                            35% off your first order plus 5% off all future orders.
                        </p>

                    </div>
                </li>

                <li>
                    <div class="service-card">

                        <figure class="card-icon">
                            <img src="./assets/images/service-icon-3.png" width="70" height="70" loading="lazy" alt="service icon">
                        </figure>

                        <h3 class="h3 card-title">Security payment</h3>

                        <p class="card-text">
                            25% off your online order of $50+. Available at most locations.
                        </p>

                    </div>
                </li>

                <li>
                    <div class="service-card">

                        <figure class="card-icon">
                            <img src="./assets/images/service-icon-4.png" width="70" height="70" loading="lazy" alt="service icon">
                        </figure>

                        <h3 class="h3 card-title">24/7 Support</h3>

                        <p class="card-text">
                            Shop online to get orders over $35 shipped fast and free.
                        </p>

                    </div>
                </li>

            </ul>

        </div>
    </section>





    <!--
         - #CTA
       -->

    <section class="cta has-bg-image" aria-label="cta" style="background-image: url('./assets/images/cta-bg.jpg')">
        <div class="container">

            <figure class="cta-banner">
                <img src="./assets/images/cta-banner.png" width="900" height="660" loading="lazy" alt="cat" class="w-100">
            </figure>

            <div class="cta-content">

                <img src="./assets/images/cta-icon.png" width="120" height="35" loading="lazy" alt="taste guarantee" class="img">

                <h2 class="h2 section-title">Taste it, love it or we’ll replace it… Guaranteed!</h2>

                <p class="section-text">
                    At Petio, we believe your dog and cat will love their food so much that if they don’t … we’ll help you
                    find a
                    replacement. That’s our taste guarantee.
                </p>

                <a href="#" class="btn">Find out more</a>

            </div>

        </div>
    </section>

    <!--
     - #BACK TO TOP
   -->

    <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
    </a>





    <!--
     - custom js link
   -->
    <script src="./assets/js/script.js" defer></script>

    <!--
     - ionicon link
   -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
    @endsection
