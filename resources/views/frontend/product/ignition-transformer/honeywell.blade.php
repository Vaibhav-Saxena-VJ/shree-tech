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
                    <h1>Ignition Transformer</h1>
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
                <strong class="product-price">Honeywell Ignition Transformer Distributors, Suppliers, Dealers, Traders in India from Pune</strong>
            </div>
            <!-- End Product Info Section (Title) -->

            <!-- Start Product Images Section -->
            <div class="col-md-12 mb-4">
    <div class="product-images d-flex justify-content-start flex-wrap">
        
        <!-- Image 1 with Description -->
        <div class="image-description-wrapper text-center me-3 mb-3">
            <img src="{{ asset('theme/images/gas-train/gastrain1.jpg') }}" class="img-fluid product-thumbnail" alt="Product Image">               
        </div>       
    </div>
</div>
            <!-- End Product Images Section -->
                <ul class="product-additional-info">
                    <li><strong>ET 401</strong></li>    
                    <li><strong>2T 931 & 932</strong></li>   
                    <li><strong>Q624</strong></li>        
                </ul>

            <!-- Start Product Description Section -->
            <div class="col-md-12">
                <p class="product-description">
                Shreetech solutions is a Honeywell ignition transformer distributors, suppliers, dealers, traders in India have been in business since a long time and are one of the leading distributors of these products in India. We are experts at what we do and can offer you creative designs for your heating needs, as well as expert customer service if you need it.
                </p>

                <p class="product-description">
                The Honeywell Ignition Transformer distributors, suppliers, dealers, traders in India have been providing standard quality products for over decades and an expert team that is always ready to help.Honeywell Ignition Transformer distributors in India have a wide variety of products, which include transformers for different purposes, and they are always available to help you find the perfect product for your needs. Our professional team is here to ensure that all of its customers are satisfied with the products.
                </p>
                <p class="product-description">
                <strong>Tags : </strong>Honeywell Ignition Transformer Distributors in India, Honeywell Ignition Transformer Suppliers in India, Honeywell Ignition Transformer Dealers in India, Honeywell Ignition Transformer Traders in India
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
