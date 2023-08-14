@yield('container')

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

  {{-- css --}}
<link rel="stylesheet" href="./assets/css/style1.css">

{{-- Bootsrap --}}
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

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
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <button class="nav-toggle-btn" aria-label="toggle manu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" aria-label="true" class="close-icon"></ion-icon>
      </button>

      <a href="/" class="logo">Makan</a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="/" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="/shop" class="navbar-link" data-nav-link>Shop</a>
          </li>

          <li class="navbar-item">
            <a href="/contact" class="navbar-link" data-nav-link>Contact</a>
          </li>
        </ul>
      </nav>

      <div class="header-actions">

        <button class="action-btn" aria-label="Search">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="/login" class="navbar-link" data-nav-link>
        <button class="action-btn user" aria-label="User">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        </button>
        </a>

        <button class="action-btn" aria-label="cart">
          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button>

      </div>

    </div>
  </header>


  <!--
        - #BRAND
      -->

 <section class="section brand" aria-label="brand">
    <div class="container">

        <h2 class="h2 section-title">
            <span class="span">Popular</span> Brands
        </h2>

        <ul class="has-scrollbar">

            <li class="scrollbar-item">
                <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                    <img src="./assets/images/brand-1.jpg" width="150" height="150" loading="lazy" alt="brand logo" class="img-cover">
                </div>
            </li>

            <li class="scrollbar-item">
                <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                    <img src="./assets/images/brand-2.jpg" width="150" height="150" loading="lazy" alt="brand logo" class="img-cover">
                </div>
            </li>

            <li class="scrollbar-item">
                <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                    <img src="./assets/images/brand-3.jpg" width="150" height="150" loading="lazy" alt="brand logo" class="img-cover">
                </div>
            </li>

            <li class="scrollbar-item">
                <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                    <img src="./assets/images/brand-4.jpg" width="150" height="150" loading="lazy" alt="brand logo" class="img-cover">
                </div>
            </li>

            <li class="scrollbar-item">
                <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                    <img src="./assets/images/brand-5.jpg" width="150" height="150" loading="lazy" alt="brand logo" class="img-cover">
                </div>
            </li>

        </ul>

    </div>
</section>

</article>
</main>





<!--
   - #FOOTER
 -->

<footer class="footer" style="background-image: url('./assets/images/footer-bg.jpg')">

    <div class="footer-top section">
        <div class="container">

            <div class="footer-brand">

                <a href="#" class="logo">Makan</a>

                <p class="footer-text">
                    If you have any question, please contact us at <a href="#" class="link">support@gmail.com</a>
                </p>

                <ul class="contact-list">

                    <li class="contact-item">
                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                        <address class="address">
                            Jl. Rajawali Raya No.6, RT.3/RW.11, Halim Perdana Kusumah, Kec. Makasar, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13610
                        </address>
                    </li>

                    <li class="contact-item">
                        <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

                        <a href="#" class="contact-link">(+62) 817-7239-3473</a>
                    </li>

                </ul>

                <ul class="social-list">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-pinterest"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>

            <ul class="footer-list">

                <li>
                    <p class="footer-list-title">Corporate</p>
                </li>

                <li>
                    <a href="#" class="footer-link">Careers</a>
                </li>

                <li>
                    <a href="#" class="footer-link">About Us</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Contact Us</a>
                </li>

                <li>
                    <a href="#" class="footer-link">FAQs</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Vendors</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Affiliate Program</a>
                </li>

            </ul>

            <ul class="footer-list">

                <li>
                    <p class="footer-list-title">Information</p>
                </li>

                <li>
                    <a href="#" class="footer-link">Online Store</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Privacy Policy</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Refund Policy</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Shipping Policy</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Terms of Service</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Track Order</a>
                </li>

            </ul>

            <ul class="footer-list">

                <li>
                    <p class="footer-list-title">Services</p>
                </li>

                <li>
                    <a href="#" class="footer-link">Grooming</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Positive Dog Training</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Veterinary Services</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Petco Insurance</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Pet Adoption</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Resource Center</a>
                </li>

            </ul>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">

            <p class="copyright">
                &copy; 2006 Made with ♥ by <a href="#" class="copyright-link">GENDHUT</a>
            </p>

            <img src="./assets/images/payment.png" width="397" height="32" loading="lazy" alt="payment method" class="img">

        </div>
    </div>


    <!--
   - custom js link
 -->
    <script src="./assets/js/script.js" defer></script>

    <!--
- ionicon link
-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</footer>


</body>
</html>

