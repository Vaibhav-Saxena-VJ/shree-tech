@extends('frontend.layouts.header')
@section('title', "Product Details")
@section('keywords', "Product details, Shop, Furniture, Nordic Chair, Home decor")

@section('content')

<!-- Start Hero Section -->
<div class="hero2">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Flame Monitoring</h1>
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
                <h3 class="product-title">Kromschroeder</h3>
                <strong class="product-price">Kromschroeder Burner controller Distributors, Suppliers, Dealers, Traders in India</strong>
            </div>
            <strong class="product-price">KROMSCHRODER BURNER CONTROLLER FAMILIY BCU 370 / 460, IFD 258 / 111, FLAME SWITCH IFW 50 / 15, TIGHTNESS CONTROLS, UV FLAME SENSOR UVS AND UVD, IGNITION TZI / TIG AND PRESSURE SWITCH DG / DL</strong>
            <!-- End Product Info Section (Title) -->

            <!-- Start Product Images Section -->
            <div class="col-md-12 mb-4 mt-3">
            <div class="product-images d-flex justify-content-start flex-wrap">
        
                <!-- Image 1 with Description -->
                <div class="image-description-wrapper text-center me-3 mb-3">
                    <img src="{{ asset('theme/images/burner-control/kburner1.jpg') }}" class="img-fluid product-thumbnail" alt="Product Image">
                </div>

                <!-- Image 2 with Description -->
                <div class="image-description-wrapper text-center me-3 mb-3">
                    <img src="{{ asset('theme/images/burner-control/kburner2.webp') }}" class="img-fluid product-thumbnail" alt="Product Image">
                </div>

                <!-- Image 3 with Description -->
                <div class="image-description-wrapper text-center me-3 mb-3">
                    <img src="{{ asset('theme/images/burner-control/kburner3.webp') }}" class="img-fluid product-thumbnail" alt="Product Image">
                </div>

                <!-- Image 4 with Description -->
                <div class="image-description-wrapper text-center me-3 mb-3">
                    <img src="{{ asset('theme/images/burner-control/kburner4.avif') }}" class="img-fluid product-thumbnail" alt="Product Image">
                </div>

                <!-- Image 5 with Description -->
                <div class="image-description-wrapper text-center me-3 mb-3">
                    <img src="{{ asset('theme/images/burner-control/kburner5.jpg') }}" class="img-fluid product-thumbnail" alt="Product Image">
                </div>

                <!-- Image 6 with Description -->
                <div class="image-description-wrapper text-center me-3 mb-3">
                    <img src="{{ asset('theme/images/burner-control/kburner6.webp') }}" class="img-fluid product-thumbnail" alt="Product Image">
                </div>

                <!-- Image 7 with Description -->
                <div class="image-description-wrapper text-center me-3 mb-3">
                    <img src="{{ asset('theme/images/burner-control/kburner7.jpg') }}" class="img-fluid product-thumbnail" alt="Product Image">
                </div>

                <!-- Image 8 with Description -->
                <div class="image-description-wrapper text-center me-3 mb-3">
                    <img src="{{ asset('theme/images/burner-control/kburner8.webp') }}" class="img-fluid product-thumbnail" alt="Product Image">
                </div>
        </div>
    </div>
            <!-- End Product Images Section -->

            <!-- Start Product Description Section -->
            <div class="col-md-12">
                <p class="product-description">
                We are leading Kromschroeder Flame Monitoring System Distributors, Suppliers, Dealers, Traders in India from Pune that has been in business for over many years. The Kromschroeder Flame Monitoring System distributors in India offer high-quality products with competitive prices. Our team consists of experts who are always willing to go above and beyond to make sure our customers are satisfied.
                </p>

                <p class="product-description">
                We specialise in providing quality products, designs, and experts to the market. We have been in the industry for a long time and have created a strong reputation for our expert team and low prices.We have been in operation and pride ourselves on being one of the most trusted distributor in India.Kromschroeder Flame Monitoring distributor, supplier, dealer, trader in India are committed to provide the best standard quality products with creative designs and expert team for our clients. We have the best quality products and offer an expert team to help you with any of your needs.
                </p>
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
