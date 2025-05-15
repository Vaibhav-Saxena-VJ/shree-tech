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
                    <h1>Industrial Burners</h1>
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
                <strong class="product-price">Kromschroeder Industrial Burner Distributor, Supplier, Dealer, Trader in India.</strong>
            </div>
            <!-- End Product Info Section (Title) -->

            <!-- Start Product Images Section -->
            <div class="col-md-12 mb-4">
    <div class="product-images d-flex justify-content-start flex-wrap">
        
        <!-- Image 1 with Description -->
        <div class="image-description-wrapper text-center me-3 mb-3">
            <img src="{{ asset('theme/images/industrial-burner/industrial-burner1.webp') }}" class="img-fluid product-thumbnail" alt="Product Image">               
        </div>       
    </div>
</div>
            <!-- End Product Images Section -->
                <ul class="product-additional-info">
                    <li><strong>BIO / BIC</strong></li>    
                    <li><strong>ZMI (PILOT)</strong></li>   
                    <li><strong>ZIO / ZIC</strong></li>
                    <li><strong>ECO - MAX</strong></li>        
                </ul>

            <!-- Start Product Description Section -->
            <div class="col-md-12">
                <p class="product-description">
                Shritech solutions is a leading Kromschroeder Industrial burners distributor, supplier, dealer and trader in India from Pune. We offer standard quality products to their clients as well as creative designs. The team at Patson Electrical and Controls are experts in the field of developing certified ranges of Industrial burners.
                </p>

                <p class="product-description">
                The Kromschroeder Industrial Burners distributor, supplier, dealer and trader in India have standard quality products and creative designs. We also have an experienced team to answer all your queries related to their products and services. If you are looking for superior quality products at the most competitive prices then Patson is the one stop solution for you!The Kromschroeder Industrial Burners distributor, supplier, dealer and trader in India have been a market leader for many years and are very important in the world of electrical and mechanical engineering. We offer a wide variety of products that are made of excellent quality material and innovative designs.
                </p>
                <p class="product-description">
                <strong>Tags : </strong>Industrial Burners,Industrial Burner distributor in India,Industrial Burner supplier in India,Industrial Burner dealer in India,Industrial Burner trader in India.
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
