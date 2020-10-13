<?php include_once('../includes/header.php'); ?>

<div id="site-wrapper">
    <div id="site-canvas" class="snappy">
        <?php include_once('../includes/nav.php'); ?>

        <?php require_once('../products/db/products.php'); ?>

        <?php if ( isset($_GET['product'])) : ?>
        <?php
            $id = (int) $_GET['product'];
            $single = json_decode(find($id), true);
            // echo $_GET['product'];
        ?>

        <div id="main" role="main" class="col-sm-12">
            <div class="row">
                <div id="product-page" class="product" itemscope="" itemtype="http://schema.org/Product">
                    <meta itemprop="url"
                        content="https://hiphop-1304.myshopify.com/products/beanie-knitted-cotton-caps">
                    <meta itemprop="image" content="<?php echo $single['featured_image']; ?>">

                    <form id="AddToCartForm" action="/cart/add" method="post" enctype="multipart/form-data">
                        <div class="product-photos col-sm-8 col-md-9 hidden-xs">
                            <div class="row">
                                <div class="product-photo-thumbs-wrap col-sm-2">
                                    <div class="sqrlcarouselwrap"
                                        style="position: relative; overflow: hidden; width: 100%;">
                                        <div class="product-thumbs-carousel"
                                            style="height: 580px; width: auto; overflow: hidden;">
                                            <?php if ( count($single['images']) > 0) : ?>
                                            <ul class="product-photo-thumbs">
                                                <?php foreach ($single['images'] as $image) : ?>
                                                <li class="product-photo-thumb">
                                                    <img src="<?php echo $image ?>" alt="<?php echo $single['title'] ?>"
                                                        class="img-responsive" data-image="<?php echo $image ?>"
                                                        data-image-large="<?php echo $image ?>">
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <a class="sqrlcarousel-next sqrlcarousel-control" href="#" style="display: block;">
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <a class="sqrlcarousel-prev sqrlcarousel-control" href="#" style="display: none;">
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                </div>


                                <div class="product-photo-container col-sm-10 ">
                                    <img class="ProductPhotoImg" src="<?php echo $single['featured_image']; ?>"
                                        alt="<?php echo $single['title']; ?>">
                                </div>
                            </div>
                        </div>

                        <div id="mobile-product-photos" class="col-xs-12">
                        <?php if ( count($single['images']) > 0) : ?>
                            <div class="mobile-product-photo-container">
                                <?php foreach ($single['images'] as $image) : ?>
                                <div>
                                    <img class="ProductPhotoImg img-responsive owl-lazy"
                                        data-src="<?php echo $image ?>"
                                        alt="<?php echo $single['title']; ?>"
                                        src="<?php echo $image ?>"
                                        data-image-large="<?php echo $image ?>">
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                        </div>

                        <!-- .product-photos -->
                        <div class="col-sm-4 col-md-3">
                            <div class="product-details">
                                <h1 itemprop="name" class="product-name"><?php echo $single['title']; ?></h1>
                                <h2 itemprop="brand" class="brand"><a href="/collections/vendors?q=hiphop-1304"
                                        title="">hiphop-1304</a></h2>

                                <div id="product-price-wrap" itemprop="offers" itemscope=""
                                    itemtype="http://schema.org/Offer" class="delta">
                                    <meta itemprop="priceCurrency" content="USD">
                                    <link itemprop="availability" href="http://schema.org/InStock">

                                    <span id="ProductPrice" class="product-price on-sale  money" itemprop="price"
                                        data-currency=""><?php echo $single['sale_price'] ?></span>
                                    <span id="ComparePrice" class="compare-at-price  money">$<?php echo $single['price'] ?></span>
                                </div>


                                <div id="product-variants" style="display:none" class="">
                                    <div class="selector-wrapper" style="display: none;"><label>Color</label><select
                                            class="single-option-selector" data-option="option1"
                                            id="product-select-option-0">
                                            <option value="Black">Black</option>
                                            <option value="Blue">Blue</option>
                                            <option value="Gray">Gray</option>
                                            <option value="Red">Red</option>
                                            <option value="Burgundy">Burgundy</option>
                                        </select></div><select id="product-select" name="id"
                                        class="form-control single-option-selector" style="display: none;">

                                        <option selected="" value="13923310141501">
                                            Black - $20.31
                                        </option>

                                        <option value="13923310239805">
                                            Blue - $20.31
                                        </option>

                                        <option value="13923310305341">
                                            Gray - $20.31
                                        </option>

                                        <option value="13923310338109">
                                            Red - $20.31
                                        </option>

                                        <option value="13923310370877">
                                            Burgundy - $20.31
                                        </option>

                                    </select>
                                </div>

                                <style>
                                    label[for="product-select-option-0"] {
                                        display: none;
                                    }

                                    #product-select-option-0 {
                                        display: none;
                                    }

                                    #product-select-option-0+.custom-style-select-box {
                                        display: none !important;
                                    }
                                </style>
                                <script>
                                    $(window).load(function () {
                                        $('.selector-wrapper:eq(0)').hide();
                                    });
                                </script>


                                <div class="swatch clearfix" data-option-index="0">
                                    <label class="swatch-title">Color</label>
                                    <div class="btn-group" data-toggle="buttons">
                                        <label data-toggle="tooltip" data-placement="top" title="" data-value="Black"
                                            class="btn btn-primary  swatch-element color black available active"
                                            data-original-title="Black">
                                            <input autocomplete="off" id="swatch-0-black" type="radio" name="option-0"
                                                value="Black">

                                            <span
                                                style="background-color: black; background-image: url(//cdn.shopify.com/s/files/1/0021/6933/9965/t/2/assets/black.png?0)"></span>
                                        </label>


                                        <script>
                                            jQuery('.swatch[data-option-index="0"] .black').removeClass('soldout')
                                                .addClass('available').find(':radio').removeAttr('disabled');
                                        </script>
                                        
                                        <label data-toggle="tooltip" data-placement="top" title="" data-value="Blue"
                                            class="btn btn-primary  swatch-element color blue available"
                                            data-original-title="Blue">
                                            <input autocomplete="off" id="swatch-0-blue" type="radio" name="option-0"
                                                value="Blue">

                                            <span
                                                style="background-color: blue; background-image: url(//cdn.shopify.com/s/files/1/0021/6933/9965/t/2/assets/blue.png?0)"></span>
                                        </label>


                                        <script>
                                            jQuery('.swatch[data-option-index="0"] .blue').removeClass('soldout')
                                                .addClass('available').find(':radio').removeAttr('disabled');
                                        </script>
                                        
                                        <label data-toggle="tooltip" data-placement="top" title="" data-value="Gray"
                                            class="btn btn-primary  swatch-element color gray available"
                                            data-original-title="Gray">
                                            <input autocomplete="off" id="swatch-0-gray" type="radio" name="option-0"
                                                value="Gray">

                                            <span
                                                style="background-color: gray; background-image: url(//cdn.shopify.com/s/files/1/0021/6933/9965/t/2/assets/gray.png?0)"></span>
                                        </label>


                                        <script>
                                            jQuery('.swatch[data-option-index="0"] .gray').removeClass('soldout')
                                                .addClass('available').find(':radio').removeAttr('disabled');
                                        </script>
                                        
                                        <label data-toggle="tooltip" data-placement="top" title="" data-value="Red"
                                            class="btn btn-primary  swatch-element color red available"
                                            data-original-title="Red">
                                            <input autocomplete="off" id="swatch-0-red" type="radio" name="option-0"
                                                value="Red">

                                            <span
                                                style="background-color: red; background-image: url(//cdn.shopify.com/s/files/1/0021/6933/9965/t/2/assets/red.png?0)"></span>

                                        </label>


                                        <script>
                                            jQuery('.swatch[data-option-index="0"] .red').removeClass('soldout')
                                                .addClass('available').find(':radio').removeAttr('disabled');
                                        </script>
                                        
                                        <label data-toggle="tooltip" data-placement="top" title="" data-value="Burgundy"
                                            class="btn btn-primary  swatch-element color burgundy available"
                                            data-original-title="Burgundy">
                                            <input autocomplete="off" id="swatch-0-burgundy" type="radio"
                                                name="option-0" value="Burgundy">

                                            <span
                                                style="background-color: burgundy; background-image: url(//cdn.shopify.com/s/files/1/0021/6933/9965/t/2/assets/burgundy.png?0)"></span>
                                        </label>


                                        <script>
                                            jQuery('.swatch[data-option-index="0"] .burgundy').removeClass('soldout')
                                                .addClass('available').find(':radio').removeAttr('disabled');
                                        </script>
                                    </div>
                                </div>



                                <div id="backorder" class="hidden">
                                    <p><span id="selected-variant"></span> is back-ordered. We will ship it separately
                                        in 10 to 15 days.</p>
                                </div>

                                <div id="quantity-section">
                                    <label for="Quantity" class="quantity-selector swatch-title">Quantity:</label>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-group quantity-group">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-minus" type="button">-</button>
                                                </span>

                                                <input type="text" id="Quantity" name="quantity" value="1" min="1"
                                                    class="form-control quantity-selector quantity-box"
                                                    placeholder="Qty.">

                                                <span class="input-group-btn">
                                                    <button class="btn  btn-plus" type="button">+</button>
                                                </span>
                                            </div><!-- /input-group -->
                                        </div><!-- /.col-lg-6 -->
                                    </div><!-- /.row -->
                                </div>

                                <div id="product-add">
                                    <button name="add" id="AddToCart" class="btn btn-default btn-large"> <span
                                            id="AddToCartText">Add to Cart</span></button>
                                </div>

                                <ul class="guarantee">
                                    <li><i class="fa fa-truck"></i> Free Shipping</li>
                                    <li><i class="fa fa-check"></i> Easy Returns</li>
                                    <li><i class="fa fa-credit-card"></i> Secure Payment</li>
                                </ul>

                            </div><!-- .product-details -->
                        </div>
                    </form>

                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="row">
                <ul class="product-social-icons col-sm-12">
                    <li><a target="_blank"
                            href="mailto:?to=&amp;body=https://hiphop-1304.myshopify.com/products/beanie-knitted-cotton-caps&amp;subject=Chekout this page"
                            class="mailtofriend"><i class="fa fa-envelope-o "></i> MAIL TO A FRIEND</a></li>
                    <li><a target="_blank"
                            href="https://twitter.com/intent/tweet?source=https://hiphop-1304.myshopify.com/products/beanie-knitted-cotton-caps"><i
                                class="fa fa-twitter-square"></i> TWITTER</a></li>
                    <li><a target="_blank"
                            href="https://www.facebook.com/sharer/sharer.php?u=https://hiphop-1304.myshopify.com/products/beanie-knitted-cotton-caps"><i
                                class="fa fa-facebook-square"></i> FACEBOOK</a></li>
                    <li><a target="_blank"
                            href="http://pinterest.com/pin/create/button/?url=https://hiphop-1304.myshopify.com/products/beanie-knitted-cotton-caps"><i
                                class="fa fa-pinterest-square"></i> PINTEREST</a></li>
                    <li><a target="_blank"
                            href="https://plus.google.com/share?url=https://hiphop-1304.myshopify.com/products/beanie-knitted-cotton-caps"><i
                                class="fa fa-google-plus-square"></i> GOOGLE PLUS</a></li>
                </ul>
            </div>


            <div class="row product-info">
                <div id="product-description" class="rte col-sm-12">
                    <h2>Description</h2>
                    <div itemprop="description">
                        <div>
                            <p>
                                <?php foreach ($single['meta'] as $key => $value) : ?>
                                <span>
                                    <strong><?php echo $key; ?>:</strong> <?php echo $value; ?>
                                </span>
                                <br>
                                <?php endforeach; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php endif; ?>
        

        <?php include_once('../includes/footer.php'); ?>
    </div>
</div>

<?php //include_once('includes/modals.php'); 
?>