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
                    <img src="{{ asset('theme/images/ignition-transformer/kignition1.jpg') }}" class="img-fluid product-thumbnail" alt="Product Image">
                </div>

                            
        </div>
    </div>
            <!-- End Product Images Section -->

            <!-- Start Product Description Section -->
            <div class="col-md-12">
                <p class="product-description">
                Shreetech Solutions is a company that specialises in Kromschroeder Ignition Transformer. We are Kromschroeder ignition transformer distributors, suppliers, dealers, traders in India from Pune have been in business since a long time and are one of the leading distributor of these ignition transformer products in the area. We are experts at what we do and can offer you creative designs for your heating needs, as well as expert customer service if you need it.TZI/ET401 ignition transformer distributors, suppliers, dealers, traders in India.
                </p>
                <p class="product-description">
                Kromschroeder Ignition Transformer distributor, supplier, dealer, trader in India have a wide variety of products, which include transformers for different purposes, and they are always available to help you find the perfect product for your needs. Our professional team is here to ensure that all of its customers are satisfied with the products.
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
