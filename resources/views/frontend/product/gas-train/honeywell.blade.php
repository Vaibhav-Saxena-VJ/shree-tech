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
                <h3 class="product-title">Honeywell</h3>
                <strong class="product-price">Honeywell Gas Train Components Distributor, Supplier, Dealer, Trader in India.</strong>
            </div>
            <!-- End Product Info Section (Title) -->

            <!-- Start Product Images Section -->
            <div class="col-md-12 mb-4">
    <div class="product-images d-flex justify-content-start flex-wrap">
        
        <!-- Image 1 with Description -->
        <div class="image-description-wrapper text-center me-3 mb-3">
            <img src="{{ asset('theme/images/gas-train/gastrain1.jpg') }}" class="img-fluid product-thumbnail" alt="Product Image">
            <p class="image-description">Honeywell Industrial Gas Safety Shutoff Valve with V4055 fluid power actuators to control natural or LP gas flow to commercial and industrial burners.</p>
        </div>

        <!-- Image 2 with Description -->
        <div class="image-description-wrapper text-center me-3 mb-3">
            <img src="{{ asset('theme/images/gas-train/gastrain2.jpg') }}" class="img-fluid product-thumbnail" alt="Product Image">
            <p class="image-description">Honeywell Butterfly Firing Rate Gas Valve Provides modulating control of natural, manufactured, LP gases or air.</p>
        </div>

        <!-- Image 3 with Description -->
        <div class="image-description-wrapper text-center me-3 mb-3">
            <img src="{{ asset('theme/images/gas-train/gastrain3.webp') }}" class="img-fluid product-thumbnail" alt="Product Image">
            <p class="image-description">Honeywell Solenoid Gas Valves for Control & Regulation of Gases.</p>
        </div>

        <!-- Image 4 with Description -->
        <div class="image-description-wrapper text-center me-3 mb-3">
            <img src="{{ asset('theme/images/gas-train/gastrain4.webp') }}" class="img-fluid product-thumbnail" alt="Product Image">
            <p class="image-description">Honeywell Manual Reset Gas Valves for Gas Leak Detection.</p>
        </div>
        <div class="image-description-wrapper text-center me-3 mb-3">
            <img src="{{ asset('theme/images/gas-train/gastrain5.webp') }}" class="img-fluid product-thumbnail" alt="Product Image">
            <p class="image-description">Combination Gas Valves, with or without integral pressure regulators.</p>
        </div>
    </div>
</div>
            <!-- End Product Images Section -->

            <!-- Start Product Description Section -->
            <div class="col-md-12">
                <p class="product-description">
                Shreetech solutions is a Honeywell Gas Train components distributors, suppliers, dealers, traders in India from Pune offer standard quality products with creative designs and expert team to help you get the best of your money. We have an expert team that provides standard quality Gas Train components. Honeywell Gas Train components distributors, suppliers, dealers, traders in India have been around for over decades now and have a reputation for providing standard quality products with creative designs and expert team. Honeywell Gas Train components in India from Pune offer standard quality products with creative designs to their customers and have an expert team to help you with any queries you may have.
                </p>

                <p class="product-description">
                Honeywell Gas Train Components Offering you a complete range of Gas Train Components which includes Gas Pressure Regulator, Slam Shut Off Valve, Relief Valve, Air Gas Ratio Regulator.
                </p>

                <!-- Product Additional Info -->
                <h3>Honeywell Gas Train Components are used in a wide range of industrial and commercial applications, including:</h3>
                <ul class="product-additional-info">
                    <li><strong>Boilers</strong></li>
                    <li><strong>Furnaces</strong></li>
                    <li><strong>Heaters</strong></li>
                    <li><strong>Air conditioners</strong></li>
                    <li><strong>Refrigeration systems</strong></li>
                    <li><strong>Power Generation</strong></li>
                    <li><strong>Process Indurstries</strong></li>
                </ul>
                <p>
                If you are looking for a safe, reliable, and efficient way to deliver fuel gas to your industrial or commercial application, then Honeywell Gas Train Components are the perfect solution for you.
                </p>
                <h3>Here are some of the benefits of using Honeywell Gas Train Components :</h3>
                <ul class="product-additional-info">
                    <li><strong>Safe : </strong>Honeywell Gas Train Components are designed to meet the highest standards of safety, with features such as flame detectors and ignition systems that help to prevent accidents.</li>
                    <li><strong>Relibale : </strong>Honeywell Gas Train Components are built to last, with components that are made from high-quality materials and are designed to withstand harsh environments.</li>
                    <li><strong>Efficient : </strong>Honeywell Gas Train Components help to improve the efficiency of your combustion equipment, which can save you money on energy costs.</li>
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
