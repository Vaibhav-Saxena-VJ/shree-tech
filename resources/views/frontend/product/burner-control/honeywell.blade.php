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
                    <h1>Burner Controllers</h1>
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
                <h3 class="product-title">Honeywell</h3>
                <strong class="product-price">Honeywell Burner controls Distributors, Suppliers, Dealers and Traders in India</strong>
            </div>
            <!-- End Product Info Section (Title) -->

            <!-- Start Product Images Section -->
            <div class="col-md-12 mb-4">
    <div class="product-images d-flex justify-content-start flex-wrap">
        
        <!-- Image 1 with Description -->
        <div class="image-description-wrapper text-center me-3 mb-3">
            <img src="{{ asset('theme/images/burner-control/hburner1.webp') }}" class="img-fluid product-thumbnail" alt="Product Image" >
            <p class="image-description">Honeywell 7800 Series Burner Sequence Controllers, complete with Accessories like Keyboard Display Module, Purge Timer Cards, Amplifiers etc.</p>
        </div>

        <!-- Image 2 with Description -->
        <div class="image-description-wrapper text-center me-3 mb-3">
            <img src="{{ asset('theme/images/burner-control/hburner2.webp') }}" class="img-fluid product-thumbnail" alt="Product Image">
            <p class="image-description">Honeywell DBC Series Burner Controller to Monitor & Control Gas & Oil Burners.</p>
        </div>

        <!-- Image 3 with Description -->
        <div class="image-description-wrapper text-center me-3 mb-3">
            <img src="{{ asset('theme/images/burner-control/hburner3.webp') }}" class="img-fluid product-thumbnail" alt="Product Image">
            <p class="image-description">Honeywell TBC Series Burner Controller Designed for Pulse firing and Modulating Applications.</p>
        </div>

        <!-- Image 4 with Description -->
        <div class="image-description-wrapper text-center me-3 mb-3">
            <img src="{{ asset('theme/images/burner-control/hburner4.webp') }}" class="img-fluid product-thumbnail" alt="Product Image">
            <p class="image-description">Honeywell Flame Switches for Flame Detection Function.</p>
        </div>
    </div>
</div>
            <!-- End Product Images Section -->

            <!-- Start Product Description Section -->
            <div class="col-md-12">
                <p class="product-description">
                We Shreetech solutions Electrical and Controls are Honeywell Burner Controls distributors, suppliers, dealers and traders in India from Pune. We offer standard quality Honeywell Burner Controls products at competitive prices.We Honeywell Burner Control distributors in India have been in this industry for more than a decade now and have established themselves as one of the best companies in this field with expert team.
                </p>

                <p class="product-description">
                The Honeywell Burner Controls distributors, suppliers and traders in India from Pune provide all the services you require from a trusted company and offer the burner controls installation and maintenance, repair and testing services. Our main focus is on providing quality products at affordable rates for our clients.
                </p>

                <p class="product-description">
                Honeywell offers a wide range of burner control solutions for a variety of applications. Their burner control products are designed to provide reliable, efficient, and safe operation for any type of burner.
                </p>
                <!-- Product Additional Info -->
                <h3>Honeywell's burner control products are used in a wide range of industries, including:</h3>
                <ul class="product-additional-info">
                    <li><strong>Oil and gas</strong></li>
                    <li><strong>Chemical</strong></li>
                    <li><strong>Food and beverage</strong></li>
                    <li><strong>Power generation</strong></li>
                    <li><strong>HVAC</strong></li>
                </ul>
                <p>
                Honeywell is a leading provider of burner control solutions and their products are known for their reliability, efficiency, and safety. If you are looking for a burner control solution for your application, Honeywell is a great option to consider.
                </p>
                <h3>Here are some of the benefits of using Honeywell burner control products:</h3>
                <ul class="product-additional-info">
                    <li>Reliable operation: Honeywell burner control products are designed to provide reliable operation in a variety of harsh environments.</li>
                    <li>Efficient operation: Honeywell burner control products can help you save energy and reduce operating costs.</li>
                    <li>Safe operation: Honeywell burner control products are designed to meet all safety standards and help prevent accidents.</li>
                    <li>Ease of use: Honeywell burner control products are easy to use and maintain.</li>
                    <li>Wide range of features: Honeywell burner control products offer a wide range of features to meet your specific needs.</li>
                </ul>
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
