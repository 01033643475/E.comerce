<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $product->name }} - Product Details</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    {{-- @include('navbar') --}}

    <!-- SECTION -->
    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-6">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="{{ $product->img }}" alt="{{ $product->name }}" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product details -->
                <div class="col-md-6">
                    <div class="product-details">
                        <h2 class="product-name">{{ $product->name }}</h2>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <span class="review-link">10 Reviews | Add your review</span>
                        </div>
                        <h3 class="product-price">${{ $product->price }} <del
                                class="product-old-price">${{ $product->discount }}</del></h3>
                        <span class="product-available">In Stock</span>
                        <p>{{ $product->discount }}</p>

                        <div class="product-options">
                            <label>Size
                                <select class="input-select">
                                    <option value="0">Select Size</option>
                                    <option value="0"> Z BOOK</option>
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
                                Total Price: $<span id="total-price">{{ $product->price }}</span>
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
                            {{-- <li><a href="#">{{ $product->category }}</a></li> --}}
                        </ul>

                        <ul class="product-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /Product details -->
            </div>
        </div>
    </div>
    <!-- /SECTION -->

    <!-- Section for Related Products -->
    <div class="section">
        <div class="container">
            <div class="text-center section-title">
                <h3 class="title">Related Products</h3>
            </div>
            <div class="row">
                @foreach ($product as $related)
                    <div class="col-md-3 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <img src="{{ $product->img }}" alt="" class="img-fluid">
                            </div>
                            <div class="product-body">
                                {{-- <p class="product-category">{{ $related->category }}</p> --}}
                                <h3 class="product-name"><a href="#">{{ $product->name }}</a></h3>
                                <h4 class="product-price">${{ $product->price }} <del
                                        class="product-old-price">${{ $product->discount }}</del></h4>
                            </div>
                            <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const basePrice = {{ $product->price }};
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
