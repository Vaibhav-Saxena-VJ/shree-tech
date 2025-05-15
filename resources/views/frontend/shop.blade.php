@extends('frontend.layouts.header')
@section('title', "Product Details")
@section('keywords', "Product details, Shop, Furniture, Nordic Chair, Home decor")

@section('content')

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Product Details</h1>
                </div>
            </div>
            <div class="col-lg-7">
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<!-- Start Product Details Section -->
<div class="product-details-section">
    <div class="container">
        <div class="row">

            <!-- Start Product Info Section (Title) -->
            <div class="col-md-12 mb-4">
                <h3 class="product-title">Burner Controllers</h3>
                <strong class="product-price">Honeywell</strong>
            </div>
            <!-- End Product Info Section (Title) -->

            <!-- Start Product Images Section -->
            <div class="col-md-12 mb-4">
                <div class="product-images d-flex justify-content-start">
                    <!-- 3 to 4 Smaller Images in One Line -->
                    <img src="{{ asset('theme/images/gas2.png') }}" class="img-fluid product-thumbnail" alt="Product Image">
                    <img src="{{ asset('theme/images/gas3.png') }}" class="img-fluid product-thumbnail" alt="Product Image">
                    <img src="{{ asset('theme/images/gas2.png') }}" class="img-fluid product-thumbnail" alt="Product Image">
                    <img src="{{ asset('theme/images/gas3.png') }}" class="img-fluid product-thumbnail" alt="Product Image">
                </div>
            </div>
            <!-- End Product Images Section -->

            <!-- Start Product Description Section -->
            <div class="col-md-12">
                <p class="product-description">
                    A comfortable and stylish Nordic Chair perfect for your home or office. Made with high-quality materials, this chair offers great comfort and modern aesthetics. It’s designed to fit in with any contemporary or minimalist home decor, and its ergonomic design ensures you can sit comfortably for long periods. Whether you're working, reading, or relaxing, this chair is the ideal choice for anyone looking to enhance their space.
                </p>

                <!-- Product Additional Info -->
                <ul class="product-additional-info">
                    <li><strong>Material:</strong> Wood and Fabric</li>
                    <li><strong>Dimensions:</strong> 50x60x80 cm</li>
                    <li><strong>Available Stock:</strong> 20 units</li>
                    <li><strong>Color Options:</strong> Black, White, Brown</li>
                </ul>

                <!-- Add to Cart Button -->
                <button class="btn btn-primary mt-3">Add to Cart</button>
            </div>
            <!-- End Product Description Section -->

        </div>
    </div>
</div>
<!-- End Product Details Section -->

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/tiny-slider.js"></script>
<script src="js/custom.js"></script>

@endsection
