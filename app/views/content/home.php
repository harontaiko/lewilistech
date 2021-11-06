<!--====== App Content ======-->
<div class="app-content">

    <!--====== Primary Slider ======-->
    <?php if($data['sliderow']->num_rows > 0): ?>
    <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey">
        <div class="owl-carousel primary-style-1" id="hero-slider">
            <?php while($slide = $data['sliderow']->fetch_assoc()): ?>
            <div class="hero-slide hero-slide--1">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-content slider-content--animation">

                                <span
                                    class="content-span-1 u-c-secondary"><?php echo isset($slide['title'])? $slide['title'] : ''; ?></span>

                                <span class="content-span-2 u-c-secondary"></span>

                                <span
                                    class="content-span-3 u-c-secondary"><?php echo isset($slide['caption'])? $slide['caption'] : ''; ?></span>

                                <a class="shop-now-link btn--e-brand" href="<?php echo URLROOT ?>/pages/inquiry">send
                                    inquiry</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile ?>
        </div>
    </div>
    <style>
    .hero-slide--1 {
        background-image: url(<?php echo URLROOT ?>/public/images/images/slider/<?php echo getSlider('1', $data['db']);
        ?>);

    }

    .hero-slide--2 {
        background-image: url(<?php echo URLROOT ?>/images/images/slider/<?php echo getSlider('2', $data['db']);
        ?>);
    }

    .hero-slide--3 {
        background-image: url(<?php echo URLROOT ?>/images/images/slider/<?php echo getSlider('3', $data['db']);
        ?>);
    }

    .hero-slide--4 {
        background-image: url(<?php echo URLROOT ?>/images/images/slider/<?php echo getSlider('4', $data['db']);
        ?>);
    }

    .hero-slide--5 {
        background-image: url(<?php echo URLROOT ?>/images/images/slider/<?php echo getSlider('5', $data['db']);
        ?>);
    }

    .hero-slide--6 {
        background-image: url(<?php echo URLROOT ?>/images/images/slider/<?php echo getSlider('6', $data['db']);
        ?>);
    }

    .hero-slide--7 {
        background-image: url(<?php echo URLROOT ?>/images/images/slider/<?php echo getSlider('7', $data['db']);
        ?>);
    }

    .hero-slide--8 {
        background-image: url(<?php echo URLROOT ?>/images/images/slider/<?php echo getSlider('8', $data['db']);
        ?>);
    }

    .hero-slide--9 {
        background-image: url(<?php echo URLROOT ?>/images/images/slider/<?php echo getSlider('9', $data['db']);
        ?>);
    }
    </style>
    <?php else: ?>
    <?php require(APPROOT . '/views/inner-home/default_slider.php'); ?>
    <?php endif ?>

    <!--====== Section 2 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-16">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">SHOP BY DEALS</h1>

                            <span class="section__span u-c-silver"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->


        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <?php if($data['dealsrow']->num_rows > 0): ?>
                    <div class="col-lg-5 col-md-5 u-s-m-b-30">

                        <a class="collection" href="<?php echo URLROOT ?>/pages/shop">
                            <div class="aspect aspect--bg-grey aspect--square">

                                <img class="aspect__img collection__img"
                                    src="<?php echo URLROOT; ?>/images/images/deals/<?php echo getDeal(1, $data['db']); ?>"
                                    alt="deals">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-5 col-md-5 u-s-m-b-30">

                        <a class="collection" href="<?php echo URLROOT ?>/pages/shop">
                            <div class="aspect aspect--bg-grey aspect--square">

                                <img class="aspect__img collection__img"
                                    src="<?php echo URLROOT; ?>/images/images/deals/<?php echo getDeal(2, $data['db']); ?>"
                                    alt="deals">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-5 col-md-5 u-s-m-b-30">

                        <a class="collection" href="<?php echo URLROOT ?>/pages/shop">
                            <div class="aspect aspect--bg-grey aspect--square">

                                <img class="aspect__img collection__img"
                                    src="<?php echo URLROOT; ?>/images/images/deals/<?php echo getDeal(3, $data['db']); ?>"
                                    alt="deals">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-5 col-md-5 u-s-m-b-30">

                        <a class="collection" href="<?php echo URLROOT ?>/pages/shop">
                            <div class="aspect aspect--bg-grey aspect--square">

                                <img class="aspect__img collection__img"
                                    src="<?php echo URLROOT; ?>/images/images/deals/<?php echo getDeal(4, $data['db']); ?>"
                                    alt="deals">
                            </div>
                        </a>
                    </div>
                    <?php else: ?>
                    <?php require(APPROOT . '/views/inner-home/default_deals.php'); ?>
                    <?php endif ?>
                </div>
                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">DEAL OF THE DAY</h1>

                                    <span class="section__span u-c-silver">BUY DEAL OF THE DAY, HURRY UP! THESE NEW
                                        PRODUCTS WILL EXPIRE SOON.</span>

                                    <span class="section__span u-c-silver">ADD THESE ON YOUR CART.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <?php if($data['daydeals']->num_rows > 0): ?>
                            <?php while($deals = $data['daydeals']->fetch_assoc()): ?>
                            <div class="col-lg-6 col-md-6 u-s-m-b-30">
                                <div class="product-o product-o--radius product-o--hover-off u-h-100">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="<?php echo URLROOT; ?>/pages/detail/">

                                            <img class="aspect__img"
                                                src="<?php echo URLROOT; ?>/public/images/images/deals_of_the_day/<?php echo $deals['image']; ?>"
                                                alt="deal-of-the-day"></a>
                                        <div class="product-o__special-count-wrap">
                                            <div class="countdown countdown--style-special"
                                                data-countdown="<?php echo date('Y/m/d', strtotime($deals['timetoexpire'])); ?>">
                                            </div>
                                        </div>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#" data-tooltip="tooltip"
                                                        data-placement="top" title="Quick View"><i
                                                            class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#" data-tooltip="tooltip"
                                                        data-placement="top" title="Add to Cart"><i
                                                            class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="#!" data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="#!" data-tooltip="tooltip" data-placement="top"
                                                        title="Email me When the price drops"><i
                                                            class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html"><?php echo $deals['category'] ?></a></span>

                                    <span class="product-o__name">

                                        <a
                                            href="<?php echo URLROOT; ?>/pages/detail/"><?php echo $deals['name'] ?></a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i>

                                        <span class="product-o__review">(0)</span>
                                    </div>

                                    <span class="product-o__price">ksh <?php echo number_format($deals['discount']); ?>

                                        <span class="product-o__discount">ksh
                                            <?php echo number_format($deals['price']); ?></span></span>
                                </div>
                            </div>
                            <?php endwhile ?>
                            <?php else: ?>
                            <?php require(APPROOT . '/views/inner-home/default_deal_of_the_day.php'); ?>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__intro u-s-m-b-16">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section__text-wrap">
                                            <h1 class="section__heading u-c-secondary u-s-m-b-12">TOP TRENDING</h1>

                                            <span class="section__span u-c-silver">CHOOSE CATEGORY</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Section Intro ======-->
                        <div class="filter-category-container">
                            <div class="filter__category-wrapper">

                                <button class="btn filter__btn filter__btn--style-1 js-checked" type="button"
                                    data-filter="*">ALL</button>
                            </div>
                            <div class="filter__category-wrapper">

                                <button class="btn filter__btn filter__btn--style-1" type="button"
                                    data-filter=".hardware">HARDWARE</button>
                            </div>
                            <div class="filter__category-wrapper">

                                <button class="btn filter__btn filter__btn--style-1" type="button"
                                    data-filter=".laptops">LAPTOPS</button>
                            </div>
                            <div class="filter__category-wrapper">

                                <button class="btn filter__btn filter__btn--style-1" type="button"
                                    data-filter=".desktops">DESKTOPS</button>
                            </div>
                            <div class="filter__category-wrapper">

                                <button class="btn filter__btn filter__btn--style-1" type="button"
                                    data-filter=".software">SOFTWARE</button>
                            </div>
                            <div class="filter__category-wrapper">

                                <button class="btn filter__btn filter__btn--style-1" type="button"
                                    data-filter=".bags">LAPTOP BAGS</button>
                            </div>
                        </div>
                        <div class="filter__grid-wrapper u-s-m-t-30">
                            <div class="row">
                                <?php if($data['products']->num_rows > 0): ?>
                                <?php while($products = $data['products']->fetch_assoc()): ?>
                                <div
                                    class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item <?php echo strtolower($products['sub_category']) ?>">

                                    <div class="product-o product-o--hover-on product-o--radius">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                href="<?php echo URLROOT ?>/pages/detail/<?php echo ($products['id']) ?>">

                                                <img class="aspect__img"
                                                    src="<?php echo URLROOT; ?>/public/images/images/products/<?php echo ($products['image']) ?>"
                                                    alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#" data-tooltip="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                                class="fas fa-search-plus"></i></a>
                                                    </li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#" data-tooltip="tooltip"
                                                            data-placement="top" title="Add to Cart"><i
                                                                class="fas fa-plus-circle"></i></a>
                                                    </li>
                                                    <li>

                                                        <a href="<?php echo URLROOT; ?>/pages/wishlist"
                                                            data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                                    </li>
                                                    <li>

                                                        <a href="<?php echo URLROOT; ?>/pages/account"
                                                            data-tooltip="tooltip" data-placement="top"
                                                            title="Email me When the price drops"><i
                                                                class="fas fa-envelope"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a
                                                href="shop-side-version-2.html"><?php echo strtolower($products['sub_category']) ?></a></span>

                                        <span class="product-o__name">

                                            <a
                                                href="<?php echo URLROOT ?>/pages/detail/<?php echo ($products['id']) ?>"><?php echo ($products['name']) ?>
                                            </a></span>
                                        <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                            <span class="product-o__review">(0)</span>
                                        </div>

                                        <span class="product-o__price">ksh
                                            <?php echo number_format($products['price']) ?>

                                            <span
                                                class="product-o__discount"><?php echo isset($products['discount']) ? number_format( floatval($products['discount'])) : '0' ?></span></span>
                                    </div>
                                </div>
                                <?php endwhile ?>
                                <?php else: ?>
                                <?php require(APPROOT . '/views/inner-home/default_products.php'); ?>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                    <!--  <div class="col-lg-12">
                    <div class="load-more">

                        <button class="btn btn--e-brand" type="button">Load More</button>
                    </div>
                </div> -->
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 2 ======-->





    <!--====== Section 4 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-46">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">NEW ARRIVALS</h1>

                            <span class="section__span u-c-silver">GET UP FOR NEW ARRIVALS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->


        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="slider-fouc">
                    <div class="owl-carousel product-slider" data-item="4">
                        <?php if($data['arrivals']->num_rows > 0): ?>
                        <?php while($arrivals = $data['arrivals']->fetch_assoc()): ?>
                        <div class="u-s-m-b-30">
                            <div class="product-o product-o--hover-on">
                                <div class="product-o__wrap">

                                    <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                        href="<?php echo URLROOT; ?>/pages/detail/">

                                        <img class="aspect__img"
                                            src="<?php echo URLROOT; ?>/public/images/images/arrivals/<?php echo $arrivals['image']; ?>"
                                            alt=""></a>
                                    <div class="product-o__action-wrap">
                                        <ul class="product-o__action-list">
                                            <li>

                                                <a data-modal="modal" data-modal-id="#" data-tooltip="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fas fa-search-plus"></i></a>
                                            </li>
                                            <li>

                                                <a data-modal="modal" data-modal-id="#" data-tooltip="tooltip"
                                                    data-placement="top" title="Add to Cart"><i
                                                        class="fas fa-plus-circle"></i></a>
                                            </li>
                                            <li>

                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                            </li>
                                            <li>

                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                    title="Email me When the price drops"><i
                                                        class="fas fa-envelope"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <span class="product-o__category">

                                    <a href="shop-side-version-2.html"><?php echo $arrivals['category']; ?></a></span>

                                <span class="product-o__name">

                                    <a
                                        href="<?php echo URLROOT; ?>/pages/detail/"><?php echo $arrivals['name']; ?></a></span>
                                <div class="product-o__rating gl-rating-style"><i class="far fa-star"></i><i
                                        class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i
                                        class="far fa-star"></i>

                                    <span class="product-o__review">(0)</span>
                                </div>

                                <span class="product-o__price">Ksh <?php echo number_format($arrivals['price']); ?>

                                    <span class="product-o__discount"></span></span>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php else: ?>
                        <?php require(APPROOT . '/views/inner-home/default_arrivals.php'); ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 4 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="service u-h-100">
                            <div class="service__icon"><i class="fas fa-truck"></i></div>
                            <div class="service__info-wrap">

                                <span class="service__info-text-1">Free Shipping</span>

                                <span class="service__info-text-2">Free shipping within Nairobi Area</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="service u-h-100">
                            <div class="service__icon"><i class="fas fa-redo"></i></div>
                            <div class="service__info-wrap">

                                <span class="service__info-text-1">Shop with Confidence</span>

                                <span class="service__info-text-2">Our Protection covers your purchase from click to
                                    delivery</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="service u-h-100">
                            <div class="service__icon"><i class="fas fa-headphones-alt"></i></div>
                            <div class="service__info-wrap">

                                <span class="service__info-text-1">24/7 Help Center</span>

                                <span class="service__info-text-2">Round-the-clock assistance for a smooth shopping
                                    experience</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 9 ======-->

    <!--====== Section 6 ======-->
    <div class="u-s-p-y-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-46">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">FEATURED PRODUCTS</h1>

                            <span class="section__span u-c-silver">FIND NEW FEATURED PRODUCTS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->


        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <?php if($data['featured']->num_rows > 0): ?>
                    <?php while($featured = $data['featured']->fetch_assoc()): ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                        <div class="product-o product-o--hover-on u-h-100">
                            <div class="product-o__wrap">

                                <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                    href="<?php echo URLROOT; ?>/pages/detail/">

                                    <img class="aspect__img"
                                        src="<?php echo URLROOT; ?>/public/images/images/featured/<?php echo $featured['image']; ?>"
                                        alt=""></a>
                                <div class="product-o__action-wrap">
                                    <ul class="product-o__action-list">
                                        <li>

                                            <a data-modal="modal" data-modal-id="#" data-tooltip="tooltip"
                                                data-placement="top" title="Quick View"><i
                                                    class="fas fa-search-plus"></i></a>
                                        </li>
                                        <li>

                                            <a data-modal="modal" data-modal-id="#" data-tooltip="tooltip"
                                                data-placement="top" title="Add to Cart"><i
                                                    class="fas fa-plus-circle"></i></a>
                                        </li>
                                        <li>

                                            <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                        </li>
                                        <li>

                                            <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                title="Email me When the price drops"><i
                                                    class="fas fa-envelope"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <span class="product-o__category">

                                <a href="shop-side-version-2.html">Electronics</a></span>

                            <span class="product-o__name">

                                <a
                                    href="<?php echo URLROOT; ?>/pages/detail/"><?php echo $featured['name']; ?></a></span>
                            <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star-half-alt"></i>

                                <span class="product-o__review">(0)</span>
                            </div>

                            <span class="product-o__price">ksh <?php echo number_format($featured['price']); ?>

                                <span class="product-o__discount"></span></span>
                        </div>
                    </div>
                    <?php endwhile ?>
                    <?php else: ?>
                    <?php require(APPROOT . '/views/inner-home/default_featured.php'); ?>

                    <?php endif ?>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 6 ======-->


    <!--====== Section 8 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                        <div class="column-product">

                            <span class="column-product__title u-c-secondary u-s-m-b-25">SPECIAL PRODUCTS</span>
                            <ul class="column-product__list">
                                <?php if($data['special']->num_rows > 0): ?>
                                <?php while($special = $data['special']->fetch_assoc()): ?>
                                <li class="column-product__item">
                                    <div class="product-l">
                                        <div class="product-l__img-wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                href="<?php echo URLROOT; ?>/pages/detail/">

                                                <img class="aspect__img"
                                                    src="<?php echo URLROOT; ?>/public/images/images/special/<?php echo $special['image'] ?>"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-l__info-wrap">

                                            <span class="product-l__category">

                                                <a
                                                    href="shop-side-version-2.html"><?php echo $special['category'] ?></a></span>

                                            <span class="product-l__name">

                                                <a
                                                    href="<?php echo URLROOT; ?>/pages/detail/"><?php echo $special['name'] ?></a></span>

                                            <span class="product-l__price">ksh
                                                <?php echo number_format($special['price']); ?></span>
                                        </div>
                                    </div>
                                </li>
                                <?php endwhile ?>
                                <?php else: ?>
                                <?php require(APPROOT . '/views/inner-home/default_special.php'); ?>
                                <?php endif ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                        <div class="column-product">

                            <span class="column-product__title u-c-secondary u-s-m-b-25">WEEKLY PRODUCTS</span>
                            <ul class="column-product__list">
                                <?php if($data['weekly']->num_rows > 0): ?>
                                <?php while($weekly = $data['weekly']->fetch_assoc()): ?>
                                <li class="column-product__item">
                                    <div class="product-l">
                                        <div class="product-l__img-wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                href="<?php echo URLROOT; ?>/pages/detail/">

                                                <img class="aspect__img"
                                                    src="<?php echo URLROOT; ?>/public/images/images/weekly/<?php echo $weekly['image'] ?>"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-l__info-wrap">

                                            <span class="product-l__category">

                                                <a
                                                    href="shop-side-version-2.html"><?php echo $weekly['category'] ?></a></span>

                                            <span class="product-l__name">

                                                <a
                                                    href="<?php echo URLROOT; ?>/pages/detail/"><?php echo $weekly['name'] ?></a></span>

                                            <span class="product-l__price">ksh
                                                <?php echo number_format($weekly['price']); ?>

                                                <span class="product-l__discount"></span></span>
                                        </div>
                                    </div>
                                </li>
                                <?php endwhile ?>
                                <?php else: ?>
                                <?php require(APPROOT . '/views/inner-home/default_weekly.php'); ?>
                                <?php endif ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                        <div class="column-product">

                            <span class="column-product__title u-c-secondary u-s-m-b-25">FLASH PRODUCTS</span>
                            <ul class="column-product__list">
                                <?php if($data['flash']->num_rows > 0): ?>
                                <?php while($flash = $data['flash']->fetch_assoc()): ?>
                                <li class="column-product__item">
                                    <div class="product-l">
                                        <div class="product-l__img-wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                href="<?php echo URLROOT; ?>/pages/detail/">

                                                <img class="aspect__img"
                                                    src="<?php echo URLROOT; ?>/public/images/images/flash/<?php echo $flash['image']; ?>"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-l__info-wrap">
                                            <div class="product-l__rating gl-rating-style"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="far fa-star"></i><i class="far fa-star"></i></div>

                                            <span class="product-l__category">

                                                <a
                                                    href="shop-side-version-2.html"><?php echo $flash['category']; ?></a></span>

                                            <span class="product-l__name">

                                                <a
                                                    href="<?php echo URLROOT; ?>/pages/detail/"><?php echo $flash['name']; ?></a></span>

                                            <span class="product-l__price">ksh
                                                <?php echo number_format($flash['price']); ?></span>
                                        </div>
                                    </div>
                                </li>
                                <?php endwhile ?>
                                <?php else: ?>
                                <?php require(APPROOT . '/views/inner-home/default_flash.php'); ?>
                                <?php endif ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 8 ======-->

    <!--====== Section 10 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-46">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">LATEST ARTICLES</h1>

                            <span class="section__span u-c-silver">START YOU DAY WITH FRESH AND LATEST NEWS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->


        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 10 ======-->

    <!--====== clients ======-->
    <div class="u-s-p-b-90 u-s-m-b-30">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-46">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">CLIENTS FEEDBACK</h1>

                            <span class="section__span u-c-silver">WHAT OUR CLIENTS SAY</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->


        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">

                <!--====== Testimonial Slider ======-->
                <div class="slider-fouc">
                    <div class="owl-carousel" id="testimonial-slider">
                        <div class="testimonial">
                            <div class="testimonial__img-wrap">

                                <img class="testimonial__img"
                                    src="<?php echo URLROOT; ?>/public/images/images/avataaars.png" alt="client">
                            </div>
                            <div class="testimonial__content-wrap">

                                <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                <blockquote class="testimonial__block-quote">
                                    <p>"best IT guys i have ever come around, they fixed my hp laptop well."</p>
                                </blockquote>

                                <span class="testimonial__author">Peter Kuria.</span>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial__img-wrap">

                                <img class="testimonial__img"
                                    src="<?php echo URLROOT; ?>/public/images/images/avataaars.png" alt="client">
                            </div>
                            <div class="testimonial__content-wrap">

                                <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                <blockquote class="testimonial__block-quote">
                                    <p>"Their work is excellent, i like the way my laptop was fixed.
                                        i can refer customers in your company, thumbs up.."</p>
                                </blockquote>

                                <span class="testimonial__author">Joel Kanyi.</span>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial__img-wrap">

                                <img class="testimonial__img"
                                    src="<?php echo URLROOT; ?>/public/images/images/avataaars.png" alt="client">
                            </div>
                            <div class="testimonial__content-wrap">

                                <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                <blockquote class="testimonial__block-quote">
                                    <p>"my laptop HP 15 is working perfectly after visiting Lewilis Technogy services,
                                        thanks for good work.."</p>
                                </blockquote>

                                <span class="testimonial__author">What Really Matters.</span>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial__img-wrap">


                                <img class="testimonial__img"
                                    src="<?php echo URLROOT; ?>/public/images/images/avataaars.png" alt="client">
                            </div>
                            <div class="testimonial__content-wrap">

                                <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                <blockquote class="testimonial__block-quote">
                                    <p>"i bought hp intel core i3 from here, and am glad my laptop is still working very
                                        well kudus guys, i can refer somebody here.."</p>
                                </blockquote>

                                <span class="testimonial__author">Samuel Nganga.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Testimonial Slider ======-->
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - clients ======-->

</div>
<!--====== End - App Content ======-->