@extends('Layouts.main')

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

<body>
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

    <section class="section product" id="shop" aria-label="product">
        <div class="container">

            <h2 class="h2 section-title">
                <span class="span">Best</span> Seller
            </h2>

            <ul class="grid-list">

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/product-1.jpg" width="360" height="360" loading="lazy" alt="Commodo leo sed porta" class="img-cover default">
                            <img src="./assets/images/product-1_0.jpg" width="360" height="360" loading="lazy" alt="Commodo leo sed porta" class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                                <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>

                        <div class="card-content">

                            <div class="wrapper">
                                <div class="rating-wrapper">
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                </div>

                                <span class="span">(1)</span>
                            </div>

                            <h3 class="h3">
                                <a href="#" class="card-title">Commodo leo sed porta</a>
                            </h3>

                            <data class="card-price" value="15">$15.00</data>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/product-2.jpg" width="360" height="360" loading="lazy" alt="Purus consequat congue sit" class="img-cover default">
                            <img src="./assets/images/product-2_0.jpg" width="360" height="360" loading="lazy" alt="Purus consequat congue sit" class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                                <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>

                        <div class="card-content">

                            <div class="wrapper">
                                <div class="rating-wrapper gray">
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                </div>

                                <span class="span">(0)</span>
                            </div>

                            <h3 class="h3">
                                <a href="#" class="card-title">Purus consequat congue sit</a>
                            </h3>

                            <data class="card-price" value="45">$45.00</data>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/product-3.jpg" width="360" height="360" loading="lazy" alt="Morbi vel arcu scelerisque" class="img-cover default">
                            <img src="./assets/images/product-3_0.jpg" width="360" height="360" loading="lazy" alt="Morbi vel arcu scelerisque" class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                                <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>

                        <div class="card-content">

                            <div class="wrapper">
                                <div class="rating-wrapper gray">
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                </div>

                                <span class="span">(0)</span>
                            </div>

                            <h3 class="h3">
                                <a href="#" class="card-title">Morbi vel arcu scelerisque</a>
                            </h3>

                            <data class="card-price" value="45">$45.00</data>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/product-4.jpg" width="360" height="360" loading="lazy" alt="Morbi vel arcu scelerisque" class="img-cover default">
                            <img src="./assets/images/product-4_0.jpg" width="360" height="360" loading="lazy" alt="Morbi vel arcu scelerisque" class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                                <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>

                        <div class="card-content">

                            <div class="wrapper">
                                <div class="rating-wrapper gray">
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                </div>

                                <span class="span">(0)</span>
                            </div>

                            <h3 class="h3">
                                <a href="#" class="card-title">Morbi vel arcu scelerisque</a>
                            </h3>

                            <data class="card-price" value="49">$49.00</data>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/product-5.jpg" width="360" height="360" loading="lazy" alt="Morbi vel arcu scelerisque" class="img-cover default">
                            <img src="./assets/images/product-5_0.jpg" width="360" height="360" loading="lazy" alt="Morbi vel arcu scelerisque" class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                                <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>

                        <div class="card-content">

                            <div class="wrapper">
                                <div class="rating-wrapper gray">
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                </div>

                                <span class="span">(0)</span>
                            </div>

                            <h3 class="h3">
                                <a href="#" class="card-title">Morbi vel arcu scelerisque</a>
                            </h3>

                            <data class="card-price" value="85">$85.00</data>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/product-6.jpg" width="360" height="360" loading="lazy" alt="Nam justo libero porta ege" class="img-cover default">
                            <img src="./assets/images/product-6_0.jpg" width="360" height="360" loading="lazy" alt="Nam justo libero porta ege" class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                                <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>

                        <div class="card-content">

                            <div class="wrapper">
                                <div class="rating-wrapper gray">
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                </div>

                                <span class="span">(0)</span>
                            </div>

                            <h3 class="h3">
                                <a href="#" class="card-title">Nam justo libero porta ege</a>
                            </h3>

                            <data class="card-price" value="85">$85.00</data>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/product-7.jpg" width="360" height="360" loading="lazy" alt="Nam justo libero porta ege" class="img-cover default">
                            <img src="./assets/images/product-7_0.jpg" width="360" height="360" loading="lazy" alt="Nam justo libero porta ege" class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                                <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>

                        <div class="card-content">

                            <div class="wrapper">
                                <div class="rating-wrapper gray">
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                </div>

                                <span class="span">(0)</span>
                            </div>

                            <h3 class="h3">
                                <a href="#" class="card-title">Nam justo libero porta ege</a>
                            </h3>

                            <data class="card-price" value="85">$85.00</data>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/product-8.jpg" width="360" height="360" loading="lazy" alt="Etiam commodo leo sed" class="img-cover default">
                            <img src="./assets/images/product-8_0.jpg" width="360" height="360" loading="lazy" alt="Etiam commodo leo sed" class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                                <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>

                        <div class="card-content">

                            <div class="wrapper">
                                <div class="rating-wrapper gray">
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                </div>

                                <span class="span">(0)</span>
                            </div>

                            <h3 class="h3">
                                <a href="#" class="card-title">Etiam commodo leo sed</a>
                            </h3>

                            <data class="card-price" value="55">$55.00</data>

                        </div>

                    </div>
                </li>

            </ul>

        </div>
    </section>

</body>

</html>
@endsection
