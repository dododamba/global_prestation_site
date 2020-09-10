@extends('layout')
@section('title','Service détail')
@section('content')

<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Détail Produit</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('services') }}">Services & Produits </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Détail</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>


<section id="store-detail" class="store-detail">
    <div class="container">
        <div class="single-product-content">


            <div class="row">

                <div class="col-sm-6">
                    <div class="thumbnail-images">
                        <div class="slider slider-store">
                            <div>
                               <img src="/storage/services/{{ $item->image }}" alt="1">
                            </div>
                            <div>
                                <img src="/storage/services/{{ $item->image }}" alt="1">
                            </div>
                            <div>
                                <img src="/storage/services/{{ $item->image }}" alt="1">
                            </div>
                            <div>
                                <img src="/storage/services/{{ $item->image }}" alt="1">
                            </div>
                            <div>
                                <img src="/storage/services/{{ $item->image }}" alt="1">
                            </div>
                        </div>

                    </div>
                </div>



                <div class="col-sm-6">
                    <div class="single-product-summary">
                        <div class="entry-summary">
                            <h2 class="single-product-title">{{ $item->nom }}</h2>
                            <div class="rt-product-meta-wrapper">
                                <span class="price">

                                    <ins>
                                        <span class="rt-price-amount">
                                            <span>A Partir de 5000</span> Francs
                                        </span>
                                    </ins>
                                </span>
                            </div>




                            <div class="product_meta mar-top-30">

                                <span class="sku_wrapper">Quantité: <span class="sku">100</span></span>



                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--/End store detail -->

<!-- store tab -->
<div id="store-tabs" class="store-tabs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 ">
                <div id="store-tab-main" class="">
                    <ul class="nav nav-tabs">
                        <li class="active"><a  href="#1" data-toggle="tab">Description</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="1">
                            <p>{{ $item->texte }}</p>
                        </div>


                    </div>
              </div>

            </div>
        </div>
    </div>
</div>
<!-- End store tab -->

<!-- store -->
<section id="our_store" class="our_store related_store">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- section title -->
                <div class="form-title form-title-1">
                    <h3>Autres Produits</h3>
                </div>
            </div>
        </div>

        <div class="row slider-shop">
            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                            <div class="product-image">
                                <img src="images/shop1.png" class="" alt="product-list">
                            </div>
                        <div class="product-label"><span class="onsale">Sale</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">
                        <h3 class="product_title">
                            <a href="store-detail.html">Trekking Bags</a>
                        </h3>
                        <div class="rt-cartprice-wrapper">
                            <span class="price mar-bottom-20">
                                <del>
                                    <span class="rt-price-amount">
                                        <span >$</span>370.00
                                    </span>
                                </del>
                                <ins>
                                    <span class="rrt-price-amount">
                                        <span>$</span>320.00
                                    </span>
                                </ins>
                            </span>
                            <div class="button">
                                <a href="store-detail.html" class="btn-blue btn-red">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                            <div class="product-image">
                                <img src="images/shop3.png" class="" alt="product-list">
                            </div>
                        <div class="product-label"><span class="onsale pull-left">Sale</span></div>
                        <div class="product-label"><span class="hot pull-right">Hot</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">

                        <h3 class="product_title">
                            <a href="store-detail.html">Rope Cutter</a>
                        </h3>
                        <div class="rt-cartprice-wrapper">
                            <span class="price mar-bottom-20">
                                <del>
                                    <span class="rt-price-amount">
                                        <span >$</span>370.00
                                    </span>
                                </del>
                                <ins>
                                    <span class="rrt-price-amount">
                                        <span>$</span>320.00
                                    </span>
                                </ins>
                            </span>
                            <div class="button">
                                <a href="store-detail.html" class="btn-blue btn-red">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                            <div class="product-image">
                                <img src="images/shop5.png" class="" alt="product-list">
                            </div>
                        <div class="product-label"><span class="onsale">Sale</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">
                        <h3 class="product_title">
                            <a href="store-detail.html">Clip Hanger</a>
                        </h3>
                        <div class="rt-cartprice-wrapper">
                            <span class="price mar-bottom-20">
                                <del>
                                    <span class="rt-price-amount">
                                        <span >$</span>370.00
                                    </span>
                                </del>
                                <ins>
                                    <span class="rrt-price-amount">
                                        <span>$</span>320.00
                                    </span>
                                </ins>
                            </span>
                            <div class="button">
                                <a href="store-detail.html" class="btn-blue btn-red">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                            <div class="product-image">
                                <img src="images/shop4.png" class="" alt="product-list">
                            </div>
                        <div class="product-label"><span class="onsale">Sale</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">
                        <h3 class="product_title">
                            <a href="store-detail.html">Trekking Rods</a>
                        </h3>
                        <div class="rt-cartprice-wrapper">
                            <span class="price mar-bottom-20">
                                <del>
                                    <span class="rt-price-amount">
                                        <span >$</span>370.00
                                    </span>
                                </del>
                                <ins>
                                    <span class="rrt-price-amount">
                                        <span>$</span>320.00
                                    </span>
                                </ins>
                            </span>
                            <div class="button">
                                <a href="store-detail.html" class="btn-blue btn-red">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                            <div class="product-image">
                                <img src="images/shop1.png" class="" alt="product-list">
                            </div>
                        <div class="product-label"><span class="onsale">Sale</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">
                        <h3 class="product_title">
                            <a href="store-detail.html">Suitcase</a>
                        </h3>
                        <div class="rt-cartprice-wrapper">
                            <span class="price mar-bottom-20">
                                <del>
                                    <span class="rt-price-amount">
                                        <span >$</span>370.00
                                    </span>
                                </del>
                                <ins>
                                    <span class="rrt-price-amount">
                                        <span>$</span>320.00
                                    </span>
                                </ins>
                            </span>
                            <div class="button">
                                <a href="store-detail.html" class="btn-blue btn-red">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                            <div class="product-image">
                                <img src="images/shop3.png" class="" alt="product-list">
                            </div>
                        <div class="product-label"><span class="onsale">Sale</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">
                        <h3 class="product_title">
                            <a href="store-detail.html">Trekking Bags</a>
                        </h3>
                        <div class="rt-cartprice-wrapper">
                            <span class="price mar-bottom-20">
                                <del>
                                    <span class="rt-price-amount">
                                        <span >$</span>370.00
                                    </span>
                                </del>
                                <ins>
                                    <span class="rrt-price-amount">
                                        <span>$</span>320.00
                                    </span>
                                </ins>
                            </span>
                            <div class="button">
                                <a href="store-detail.html" class="btn-blue btn-red">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                            <div class="product-image">
                                <img src="images/shop5.png" class="" alt="product-list">
                            </div>
                        <div class="product-label"><span class="onsale pull-left">Sale</span></div>
                        <div class="product-label"><span class="hot pull-right">Hot</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">
                        <h3 class="product_title">
                            <a href="store-detail.html">Trekking Shoes</a>
                        </h3>
                        <div class="rt-cartprice-wrapper">
                            <span class="price mar-bottom-20">
                                <del>
                                    <span class="rt-price-amount">
                                        <span >$</span>370.00
                                    </span>
                                </del>
                                <ins>
                                    <span class="rrt-price-amount">
                                        <span>$</span>320.00
                                    </span>
                                </ins>
                            </span>
                            <div class="button">
                                <a href="store-detail.html" class="btn-blue btn-red">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                            <div class="product-image">
                                <img src="images/shop4.png" class="" alt="product-list">
                            </div>
                        <div class="product-label"><span class="onsale">Sale</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">
                        <h3 class="product_title">
                            <a href="store-detail.html">Trekking Ropes</a>
                        </h3>
                        <div class="rt-cartprice-wrapper">
                            <span class="price mar-bottom-20">
                                <del>
                                    <span class="rt-price-amount">
                                        <span >$</span>370.00
                                    </span>
                                </del>
                                <ins>
                                    <span class="rrt-price-amount">
                                        <span>$</span>320.00
                                    </span>
                                </ins>
                            </span>
                            <div class="button">
                                <a href="store-detail.html" class="btn-blue btn-red">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
