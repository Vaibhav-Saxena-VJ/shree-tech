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
                    <h1>Gas Train Components</h1>
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
                <h3 class="product-title text-warning">Kromschroeder</h3>
            </div>
            <strong class="product-price">KROMSCHRODER VAS GAS VALAVES AND FULL RANGE OF BUTTERFLY VALAVE AND CONTROL MOTORS FOR GAS REGULATION. PRV/VAS/GIK/VK KROMSCHRODER</strong>
            <!-- End Product Info Section (Title) -->

            <!-- Start Product Images Section -->
            <div class="col-md-12 mb-4 mt-3">
            <div class="product-images d-flex justify-content-start flex-wrap">
        
                <!-- Image 1 with Description -->
                <div class="image-description-wrapper text-center me-3 mb-3">
                    <img src="{{ asset('theme/images/gas-train/kgastrain1.avif') }}" class="img-fluid product-thumbnail" alt="Product Image">
                </div>

                <!-- Image 2 with Description -->
                <div class="image-description-wrapper text-center me-3 mb-3">
                    <img src="{{ asset('theme/images/gas-train/kgastrain2.jpg') }}" class="img-fluid product-thumbnail" alt="Product Image">
                </div>

                <!-- Image 3 with Description -->
                <div class="image-description-wrapper text-center me-3 mb-3">
                    <img src="{{ asset('theme/images/gas-train/kgastrain3.jpg') }}" class="img-fluid product-thumbnail" alt="Product Image">
                </div>

                <!-- Image 4 with Description -->
                <div class="image-description-wrapper text-center me-3 mb-3">
                    <img src="{{ asset('theme/images/gas-train/kgastrain4.jpg') }}" class="img-fluid product-thumbnail" alt="Product Image">
                </div>

                <!-- Image 5 with Description -->
                <div class="image-description-wrapper text-center me-3 mb-3">
                    <img src="{{ asset('theme/images/gas-train/kgastrain5.jpg') }}" class="img-fluid product-thumbnail" alt="Product Image">
                </div>               
        </div>
    </div>
            <!-- End Product Images Section -->

            <!-- Start Product Description Section -->
            <div class="col-md-12">
                <p class="product-description">
                Shreetech Solutions are Kromschroeder Gas Train Components Distributors, Suppliers, Dealers, Traders India from Pune offer high-quality Kromschroeder Gas Train Components at best Price. The PRV/VAS/GIK/VK Kromschroeder Gas Train components distributors, suppliers, dealers, traders in Pune, India offer standard quality products with creative designs and expert team to help you get the best of your money.Kromschroeder Gas Train components distributor, supplier, dealer, trader in India have been around for over decades now and have a reputation for providing standard quality products with creative designs and expert team. Kromschroeder Gas Train components in India offer standard quality products with creative designs to their customers and have an expert team to help you with any queries you may have.
                </p>
                <h3>Why choose us ?: </h3>
                <!-- Product Additional Info -->
                <ul class="product-additional-info">
                    <li>We are trustworthy PRV/VAS/GIK/VK Kromschroder Gas Train Components suppliers with years of experience in this domain and provide customer satisfaction to our clients.</li>
                    <li>In order to meet the demands of our clients, we offer an extensive range of products at competitive prices.</li>
                    <li>We also offer customized solutions for all your requirements so that you can get your project done without any hassle or delay.</li>
                    <li>Our PRV/VAS/GIK/VK Kromschroder Gas Train Component dealer offer the best value for money among other competitors in this industry.</li>
                </ul>             

               
                <h3>Latest Features:</h3>
                <ul class="product-additional-info">
                    <li>High efficiency: Kromschroder gas train components have an efficiency rate of between 55% and 65%.</li>
                    <li>Low noise levels: These components have noise levels that are less than 50 DB. This makes them ideal for industrial use.</li>
                    <li>High reliability: It has an annual failure rate that is less than 3%. This makes them suitable for industrial use as well.</li>
                    <li>Low maintenance costs: These components require low maintenance costs because they do not require frequent inspections or repairing.</li>
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
