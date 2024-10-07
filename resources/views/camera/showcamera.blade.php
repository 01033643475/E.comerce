<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $items->name }} - Product Details</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .product-details {
            margin-top: 20px;
        }

        .product-price {
            font-size: 24px;
            color: #e67e22;
        }

        .add-to-cart-btn {
            background-color: #e67e22;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            font-size: 16px;
            width: 100%;
            text-align: center;
        }

        .add-to-cart-btn:hover {
            background-color: #d35400;
            transform: translateY(-2px);
        }

        .product {
            border: 1px solid #eaeaea;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            margin-bottom: 30px;
            text-align: center;
        }

        .product:hover {
            transform: translateY(-5px);
        }

        .product-img img {
            max-width: 100%;
            border-radius: 10px 10px 0 0;
        }

        .product-body {
            padding: 20px;
        }

        .qty-label {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .qty-label .input-number {
            display: flex;
            align-items: center;
            margin-left: 10px;
        }

        .input-number input {
            width: 60px;
            text-align: center;
            border: 1px solid #eaeaea;
            border-radius: 5px;
            padding: 5px;
        }

        @media (max-width: 768px) {
            .product-details {
                text-align: center;
            }

            .product-img img {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>

    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="https://wa.me/qr/2A2FCLDODTFHH1"><i class="fa fa-phone"></i> +01033643475</a></li>
                    <li><a href=""><i class="fa fa-envelope-o"></i> am7834213@gmil.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> EL-Simbillwawein.Ad Daqahlivah</a></li>
                </ul>
                <ul class="header-links pull-right">
                    <li><a href="#"><i class="fa fa-dollar"></i> EGYPT</a></li>
                    <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="{{ url('/') }}" class="logo">
                                <img src="./img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form>
                                <select class="input-select">
                                    <option value="0">All Categories</option>
                                    <option value="1">Category 01</option>
                                    <option value="1">Category 02</option>
                                </select>
                                <input class="input" placeholder="Search here">
                                <button class="search-btn">Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="clearfix col-md-3">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            <div>
                                <a href="#">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Your Wishlist</span>
                                    <div class="qty">2</div>
                                </a>
                            </div>
                            <!-- /Wishlist -->

                            <!-- Cart -->
                            <div class="dropdown">
                                <a style="cursor: pointer;" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>
                                    <div class="qty">3</div>
                                </a>
                                <div class="cart-dropdown">
                                    @foreach ($items as $user)
                                        <div class="cart-list">
                                            <div class="product-widget">
                                                <div class="product-img">
                                                    <img src="{{ $items->img }}" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a href="#">{{ $items->name }}</a>
                                                    </h3>
                                                    <h4 class="product-price"><span
                                                            class="qty">1x</span>${{ $items->price }}</h4>
                                                </div>
                                                <button class="delete"><i class="fa fa-close"></i></button>
                                    @endforeach
                                </div>

                                <div class="product-widget">
                                    @foreach ($items as $item)
                                        <div class="product-img">
                                            <img src="{{ $items->img }}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">{{ $items->name }}</a>
                                            </h3>
                                            <h4 class="product-price"><span
                                                    class="qty">3x</span>${{ $items->price }}
                                            </h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    @endforeach
                                </div>
                            </div>
                            <div class="cart-summary">
                                <small>3 Item(s) selected</small>
                                <h5>SUBTOTAL: $2940.00</h5>
                            </div>
                            <div class="cart-btns">
                                <a href="#">View Cart</a>
                                <a href="{{ url('checkout') }}">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /Cart -->

                    <!-- Menu Toogle -->
                    <div class="menu-toggle">
                        <a href="#">
                            <i class="fa fa-bars"></i>
                            <span>Menu</span>
                        </a>
                    </div>
                    <!-- /Menu Toogle -->
                </div>
            </div>
            <!-- /ACCOUNT -->
        </div>
        <!-- row -->
        </div>
        <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Hot Deals</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="{{ url('laptop') }}">Laptops</a></li>
                    <li><a href="{{ url('itemsphone') }}">itemsphones</a></li>
                    <li><a href="{{ url('camera') }}">Cameras</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="{{ url('/') }}">ELectro</a></li>
                        <li><a href="{{ url('checkout') }}">checkout</a></li>
                        <li><a href="{{ url('product') }}">product</a></li>
                        <li><a href="{{ url('store') }}">store</a></li>
                        <li><a href="{{ url('edit') }}">edit</a></li>

                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

    {{-- @include('navbar') --}}






    <!-- SECTION -->
    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-6">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="{{ $items->img }}" alt="{{ $items->name }}" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product details -->
                <div class="col-md-6 product-details">
                    <h2 class="product-name">{{ $items->name }}</h2>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <span class="review-link">10 Reviews | Add your review</span>
                    </div>
                    <h3 class="product-price">${{ $items->price }} <del
                            class="product-old-price">${{ $items->discount }}</del></h3>
                    <span class="product-available">In Stock</span>
                    <p>{{ $items->discount }}</p>

                    <div class="product-options">
                        <label>Size
                            <select class="input-select">
                                <option value="0">Select Size</option>
                                <option value="0">Z BOOK</option>
                                <option value="0">BOOK Size</option>
                            </select>
                        </label>
                        <label>Color
                            <select class="input-select">
                                <option value="0">Select Color</option>
                            </select>
                        </label>
                    </div>

                    <div class="add-to-cart">
                        <div class="qty-label">
                            Qty
                            <div class="input-number">
                                <input type="number" id="quantity" value="1" min="1">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>

                        <h3 class="product-price">
                            Total Price: $<span id="total-price">{{ $items->price }}</span>
                        </h3>
                        <br>
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                    </div>

                    <ul class="product-btns">
                        <li><a href="#"><i class="fa fa-heart-o"></i> Add to Wishlist</a></li>
                        <li><a href="#"><i class="fa fa-exchange"></i> Add to Compare</a></li>
                    </ul>

                    <ul class="product-links">
                        <li>Category:</li>
                    </ul>

                    <ul class="product-links">
                        <li>Share:</li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <!-- /Product details -->
            </div>
        </div>
    </div>
    <!-- /SECTION -->

    <!-- Section for Related Products -->
    {{-- <div class="section">
        <div class="container">
            <div class="text-center section-title">
                <h3 class="title">Related Products</h3>
            </div>
            <div class="row">
                @foreach ($items as $item)
                    <div class="col-md-3 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <img src="{{ $items->img }}" alt="{{ $items->name }}" class="img-fluid">
                            </div>
                            <div class="product-body">
                                <h3 class="product-name"><a href="#">{{ $items->name }}</a></h3>
                                <h4 class="product-price">${{ $items->price }} <del
                                        class="product-old-price">${{ $items->discount }}</del></h4>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Add to
                                        Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}

    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                        <form>
                            <input class="input" type="email" placeholder="Enter Your Email">
                            <button class="newsletter-btn"><i class="fa fa-envelope"></i>
                                Subscribe</button>
                        </form>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->

    <!-- FOOTER -->
    <footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">About Us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut.</p>
                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal
                                        Road</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Categories</h3>
                            <ul class="footer-links">
                                <li><a href="#">Hot deals</a></li>
                                <li><a href="#">Laptops</a></li>
                                <li><a href="#">itemsphones</a></li>
                                <li><a href="#">Cameras</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Information</h3>
                            <ul class="footer-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Service</h3>
                            <ul class="footer-links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">View Cart</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->

        <!-- bottom footer -->
        <div id="bottom-footer" class="section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="text-center col-md-12">
                        <ul class="footer-payments">
                            <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                            <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                        </ul>
                        <span class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This
                            template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </span>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const basePrice = {{ $items->price }};
            const quantityInput = document.getElementById("quantity");
            const totalPriceElement = document.getElementById("total-price");

            // Update total price function
            const updateTotalPrice = () => {
                const quantity = parseInt(quantityInput.value);
                const totalPrice = basePrice * quantity;
                totalPriceElement.textContent = totalPrice.toFixed(2);
            };

            // Increase quantity
            document.querySelector('.qty-up').addEventListener('click', function() {
                quantityInput.value = parseInt(quantityInput.value) + 1;
                updateTotalPrice();
            });

            // Decrease quantity
            document.querySelector('.qty-down').addEventListener('click', function() {
                if (quantityInput.value > 1) {
                    quantityInput.value = parseInt(quantityInput.value) - 1;
                    updateTotalPrice();
                }
            });

            // When manually changing the input value
            quantityInput.addEventListener('input', function() {
                if (quantityInput.value < 1) {
                    quantityInput.value = 1;
                }
                updateTotalPrice();
            });
        });
    </script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
