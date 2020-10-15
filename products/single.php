<?php include_once('../includes/header.php'); ?>

<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <div class="gf-menu-device-wrapper">
        <div class="close-menu">x</div>
        <div class="gf-menu-device-container"></div>
    </div>
</nav>

<?php require_once('db/products.php'); ?>

<?php if ( isset($_GET['product'])) : ?>
<?php
    $id = (int) $_GET['product'];
    $single = json_decode(find($id), true);
    // echo $_GET['product'];
?>

<div class="wrapper-container">

    <?php include_once('../includes/nav.php'); ?>

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <h1><?php echo $single['title'] ?></h1>

        <a href="/" title="Back to the frontpage">Home</a>
        <span aria-hidden="true" class="breadcrumb__sep">/</span>

        <span aria-hidden="true" class="breadcrumb__sep">/</span>
        <span><?php echo $single['title'] ?></span>
    </nav>

    <div class="dt-sc-hr-invisible-large"></div>

    <main class="main-content ">
        <div class="wrapper">

            <div class="grid__item">



                <div class="grid__item">
                    <div itemscope="" itemtype="http://schema.org/Product" class="single-product-layout-type-1">
                        <meta itemprop="url"
                            content="https://pr-sportswearstore.myshopify.com/products/c122-1113577-aonijie-sports-waist-belt-bag-pack-4755-inch-touch-screen-phone-case-holder-marathon-running">
                        <meta itemprop="image"
                            content="<?php echo $single['featured_image'] ?>">
                        <div class="product-single">

                            <div class="grid__item wide--one-half post-large--one-half large--one-half product-img-box">

                                <div class="product-photo-container">

                                    <a
                                        href="<?php echo $single['featured_image'] ?>">
                                        <div style="height:500px;width:500px;" class="zoomWrappers"><img
                                                id="product-featured-image"
                                                src="<?php echo $single['featured_image'] ?>"
                                                alt="<?php echo $single['title'] ?>"
                                                data-zoom-image="<?php echo $single['featured_image'] ?>"
                                                style="position: absolute;"></div>
                                    </a>
                                </div>
                            </div>

                            <div
                                class="product_single_detail_section grid__item wide--one-half post-large--one-half large--one-half">
                                <h2 itemprop="name" class="product-single__title"><?php echo $single['title'] ?></h2>


                                <p class="product-arrows">


                                    <span class="left">
                                        <a
                                            href="/collections/sale/products/c122-1120379-sports-marathon-music-waist-bag-fanny-pack-iphone-7-plus-belt-pouch-with-audio-amplifier-speaker#content">
                                            <i class="zmdi zmdi-chevron-left"></i></a>
                                    </span>




                                    <span class="right">
                                        <a
                                            href="/collections/sale/products/c122-1107517-outdoor-sport-running-waist-bag-high-capacity-waterproof-climbing-cycling-bag#content">
                                            <i class="zmdi zmdi-chevron-right"></i></a>
                                    </span>

                                </p>


                                <div class="product_single_price">
                                    <div class="product_price">
                                        <div class="grid-link__org_price" id="ProductPrice">$12.38</div>
                                    </div>

                                </div>
                                <span class="shopify-product-reviews-badge" data-id="4420396220516"></span>

                                <div class="product-description rte" itemprop="description">
                                    Specification:Brand:&nbsp;AONIJIEMaterial: Lycra(DWR waterproof treatment)Webbing
                                    Material: PolyesterGender: UnisexSize: S(4.7 inch), M(5.5 inch)Waistline:
                                    65-150cm(S), 70-160cm(L)Color: Black, Rose, Green, BlueWeight: About 75g(S),
                                    85g(L)Use: Marathon, Running, Jogging, Walking, Racing etc.Features:4.7" is suit for
                                    cell phone screen under 4.7 inch;&nbsp;5.5" for cell phone screen under 6
                                    inch.Lightweight and practical, convenient to carry.Touch screen design, easy...
                                </div>

                                <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

                                    <meta itemprop="priceCurrency" content="USD">
                                    <link itemprop="availability" href="http://schema.org/InStock">











                                    <form method="post" action="/cart/add" id="AddToCartForm" accept-charset="UTF-8"
                                        class="product-form" enctype="multipart/form-data"><input type="hidden"
                                            name="form_type" value="product"><input type="hidden" name="utf8" value="✓">





                                        <div class="selector-wrapper-secton">
















                                            <style>
                                            label[for="productSelect-option-0-0"] {
                                                display: none;
                                            }

                                            #add-to-cart-form .selector-wrapper {
                                                display: none
                                            }

                                            #productSelect-option-0-0 {
                                                display: none;
                                            }

                                            #productSelect-option-0-0+.custom-style-select-box {
                                                display: none !important;
                                            }
                                            </style>
                                            <script>
                                            jQuery(window).load(function() {
                                                jQuery('.product_single_detail_section .selector-wrapper:eq(0)')
                                                    .hide();
                                            });
                                            </script>








                                            <div class="swatch clearfix" data-option-index="0">
                                                <div class="header">COLOR :</div>
                                                <div class="swatch-section">







                                                    <div data-value="BLACK"
                                                        class="swatch-element color black available">

                                                        <div class="tooltip">BLACK</div>

                                                        <input id="swatch-0-black" type="radio" name="option-0"
                                                            value="BLACK">

                                                        <label for="swatch-0-black"
                                                            style="background-color: black; background-image: url(//cdn.shopify.com/s/files/1/0145/2942/9604/files/black.png?12)">
                                                            <img class="crossed-out"
                                                                src="//cdn.shopify.com/s/files/1/0145/2942/9604/t/2/assets/soldout.png?v=6625312704354037208">
                                                        </label>

                                                    </div>


                                                    <script>
                                                    jQuery('.swatch[data-option-index="0"] .black').removeClass(
                                                        'soldout').addClass('available').find(':radio').removeAttr(
                                                        'disabled');
                                                    </script>







                                                    <div data-value="GREEN"
                                                        class="swatch-element color green available">

                                                        <div class="tooltip">GREEN</div>

                                                        <input id="swatch-0-green" type="radio" name="option-0"
                                                            value="GREEN">

                                                        <label for="swatch-0-green"
                                                            style="background-color: green; background-image: url(//cdn.shopify.com/s/files/1/0145/2942/9604/files/green.png?12)">
                                                            <img class="crossed-out"
                                                                src="//cdn.shopify.com/s/files/1/0145/2942/9604/t/2/assets/soldout.png?v=6625312704354037208">
                                                        </label>

                                                    </div>


                                                    <script>
                                                    jQuery('.swatch[data-option-index="0"] .green').removeClass(
                                                        'soldout').addClass('available').find(':radio').removeAttr(
                                                        'disabled');
                                                    </script>







                                                    <div data-value="ROSE" class="swatch-element color rose available">

                                                        <div class="tooltip">ROSE</div>

                                                        <input id="swatch-0-rose" type="radio" name="option-0"
                                                            value="ROSE">

                                                        <label for="swatch-0-rose"
                                                            style="background-color: rose; background-image: url(//cdn.shopify.com/s/files/1/0145/2942/9604/files/rose.png?12)">
                                                            <img class="crossed-out"
                                                                src="//cdn.shopify.com/s/files/1/0145/2942/9604/t/2/assets/soldout.png?v=6625312704354037208">
                                                        </label>

                                                    </div>


                                                    <script>
                                                    jQuery('.swatch[data-option-index="0"] .rose').removeClass(
                                                        'soldout').addClass('available').find(':radio').removeAttr(
                                                        'disabled');
                                                    </script>







                                                    <div data-value="BLUE" class="swatch-element color blue available">

                                                        <div class="tooltip">BLUE</div>

                                                        <input id="swatch-0-blue" type="radio" name="option-0"
                                                            value="BLUE">

                                                        <label for="swatch-0-blue"
                                                            style="background-color: blue; background-image: url(//cdn.shopify.com/s/files/1/0145/2942/9604/files/blue.png?12)">
                                                            <img class="crossed-out"
                                                                src="//cdn.shopify.com/s/files/1/0145/2942/9604/t/2/assets/soldout.png?v=6625312704354037208">
                                                        </label>

                                                    </div>


                                                    <script>
                                                    jQuery('.swatch[data-option-index="0"] .blue').removeClass(
                                                        'soldout').addClass('available').find(':radio').removeAttr(
                                                        'disabled');
                                                    </script>





                                                    <script>
                                                    jQuery('.swatch[data-option-index="0"] .black').removeClass(
                                                        'soldout').addClass('available').find(':radio').removeAttr(
                                                        'disabled');
                                                    </script>





                                                    <script>
                                                    jQuery('.swatch[data-option-index="0"] .green').removeClass(
                                                        'soldout').addClass('available').find(':radio').removeAttr(
                                                        'disabled');
                                                    </script>





                                                    <script>
                                                    jQuery('.swatch[data-option-index="0"] .rose').removeClass(
                                                        'soldout').addClass('available').find(':radio').removeAttr(
                                                        'disabled');
                                                    </script>





                                                    <script>
                                                    jQuery('.swatch[data-option-index="0"] .blue').removeClass(
                                                        'soldout').addClass('available').find(':radio').removeAttr(
                                                        'disabled');
                                                    </script>


                                                </div>
                                            </div>




















                                            <style>
                                            label[for="productSelect-option-0-1"] {
                                                display: none;
                                            }

                                            #add-to-cart-form .selector-wrapper {
                                                display: none
                                            }

                                            #productSelect-option-0-1 {
                                                display: none;
                                            }

                                            #productSelect-option-0-1+.custom-style-select-box {
                                                display: none !important;
                                            }
                                            </style>
                                            <script>
                                            jQuery(window).load(function() {
                                                jQuery('.product_single_detail_section .selector-wrapper:eq(1)')
                                                    .hide();
                                            });
                                            </script>






                                            <div class="swatch clearfix" data-option-index="1">
                                                <div class="header">SIZE :</div>
                                                <div class="swatch-section">







                                                    <div data-value="L" class="swatch-element l available">

                                                        <input id="swatch-1-l" type="radio" name="option-1" value="L">

                                                        <label for="swatch-1-l">
                                                            L
                                                            <img class="crossed-out"
                                                                src="//cdn.shopify.com/s/files/1/0145/2942/9604/t/2/assets/soldout.png?v=6625312704354037208">
                                                        </label>

                                                    </div>


                                                    <script>
                                                    jQuery('.swatch[data-option-index="1"] .l').removeClass('soldout')
                                                        .addClass('available').find(':radio').removeAttr('disabled');
                                                    </script>





                                                    <script>
                                                    jQuery('.swatch[data-option-index="1"] .l').removeClass('soldout')
                                                        .addClass('available').find(':radio').removeAttr('disabled');
                                                    </script>





                                                    <script>
                                                    jQuery('.swatch[data-option-index="1"] .l').removeClass('soldout')
                                                        .addClass('available').find(':radio').removeAttr('disabled');
                                                    </script>





                                                    <script>
                                                    jQuery('.swatch[data-option-index="1"] .l').removeClass('soldout')
                                                        .addClass('available').find(':radio').removeAttr('disabled');
                                                    </script>







                                                    <div data-value="S" class="swatch-element s available">

                                                        <input id="swatch-1-s" type="radio" name="option-1" value="S">

                                                        <label for="swatch-1-s">
                                                            S
                                                            <img class="crossed-out"
                                                                src="//cdn.shopify.com/s/files/1/0145/2942/9604/t/2/assets/soldout.png?v=6625312704354037208">
                                                        </label>

                                                    </div>


                                                    <script>
                                                    jQuery('.swatch[data-option-index="1"] .s').removeClass('soldout')
                                                        .addClass('available').find(':radio').removeAttr('disabled');
                                                    </script>





                                                    <script>
                                                    jQuery('.swatch[data-option-index="1"] .s').removeClass('soldout')
                                                        .addClass('available').find(':radio').removeAttr('disabled');
                                                    </script>





                                                    <script>
                                                    jQuery('.swatch[data-option-index="1"] .s').removeClass('soldout')
                                                        .addClass('available').find(':radio').removeAttr('disabled');
                                                    </script>





                                                    <script>
                                                    jQuery('.swatch[data-option-index="1"] .s').removeClass('soldout')
                                                        .addClass('available').find(':radio').removeAttr('disabled');
                                                    </script>


                                                </div>
                                            </div>





                                            <div class="selector-wrapper" style="display: none;"><label
                                                    for="productSelect-option-0">COLOR</label>
                                                <div class="selector-arrow"><select class="single-option-selector"
                                                        data-option="option1" id="productSelect-option-0">
                                                        <option value="BLACK">BLACK</option>
                                                        <option value="GREEN">GREEN</option>
                                                        <option value="ROSE">ROSE</option>
                                                        <option value="BLUE">BLUE</option>
                                                    </select></div>
                                            </div>
                                            <div class="selector-wrapper" style="display: none;"><label
                                                    for="productSelect-option-1">SIZE</label>
                                                <div class="selector-arrow"><select class="single-option-selector"
                                                        data-option="option2" id="productSelect-option-1">
                                                        <option value="L">L</option>
                                                        <option value="S">S</option>
                                                    </select></div>
                                            </div><select name="id" id="productSelect" class="" style="display: none;">

                                                <option selected="selected" value="31481037848676">BLACK / L</option>

                                                <option value="31481037881444">GREEN / L</option>

                                                <option value="31481037914212">ROSE / L</option>

                                                <option value="31481037946980">BLUE / L</option>

                                                <option value="31481037979748">BLACK / S</option>

                                                <option value="31481038012516">GREEN / S</option>

                                                <option value="31481038045284">ROSE / S</option>

                                                <option value="31481038078052">BLUE / S</option>

                                            </select>
                                        </div>
                                        <div class="product-single__quantity ">
                                            <div class="quantity-box-section">
                                                <label>Quantity :</label>
                                                <div class="quantity_width">

                                                    <div class="dec button">-</div>

                                                    <input type="number" id="quantity" name="quantity" value="1"
                                                        min="1">

                                                    <div class="inc button">+</div>

                                                    <p class="min-qty-alert" style="display:none">Minimum quantity
                                                        should be 1</p>
                                                </div>
                                                <script>
                                                jQuery(".button").on("click", function() {
                                                    var oldValue = jQuery("#quantity").val(),
                                                        newVal = 1;

                                                    if (jQuery(this).text() == "+") {
                                                        newVal = parseInt(oldValue) + 1;
                                                    } else if (oldValue > 1) {
                                                        newVal = parseInt(oldValue) - 1;
                                                    }

                                                    jQuery("#quantity").val(newVal);

                                                    updatePricing();

                                                });




                                                //update price when changing quantity
                                                function updatePricing() {


                                                    //try pattern one before pattern 2
                                                    var regex = /([0-9]+[.|,][0-9]+[.|,][0-9]+)/g;
                                                    var unitPriceTextMatch = jQuery('.product-single #ProductPrice')
                                                        .text().match(regex);

                                                    if (!unitPriceTextMatch) {
                                                        regex = /([0-9]+[.|,][0-9]+)/g;
                                                        unitPriceTextMatch = jQuery('.product-single #ProductPrice')
                                                            .text().match(regex);
                                                    }

                                                    if (unitPriceTextMatch) {
                                                        var unitPriceText = unitPriceTextMatch[0];
                                                        var unitPrice = unitPriceText.replace(/[.|,]/g, '');
                                                        var quantity = parseInt(jQuery('#quantity').val());
                                                        var totalPrice = unitPrice * quantity;

                                                        var totalPriceText = Shopify.formatMoney(totalPrice, window
                                                            .money_format);
                                                        regex = /([0-9]+[.|,][0-9]+[.|,][0-9]+)/g;
                                                        if (!totalPriceText.match(regex)) {
                                                            regex = /([0-9]+[.|,][0-9]+)/g;
                                                        }
                                                        totalPriceText = totalPriceText.match(regex)[0];

                                                        var regInput = new RegExp(unitPriceText, "g");
                                                        var totalPriceHtml = jQuery('.product-single #ProductPrice')
                                                            .html().replace(regInput, totalPriceText);

                                                        jQuery('.product-single .total-price span').html(
                                                        totalPriceHtml);
                                                    }
                                                }

                                                jQuery('#quantity').on('change', updatePricing);




                                                var t = false

                                                jQuery('input').focus(function() {
                                                    var $this = jQuery(this)

                                                    t = setInterval(

                                                        function() {
                                                            if (($this.val() < 1) && $this.val().length !=
                                                                0) {
                                                                if ($this.val() < 1) {
                                                                    $this.val(1)
                                                                }


                                                                jQuery('.min-qty-alert').fadeIn(1000,
                                                                    function() {
                                                                        jQuery(this).fadeOut(500)
                                                                    })
                                                            }
                                                        }, 50)
                                                })

                                                jQuery('input').blur(function() {
                                                    if (t != false) {
                                                        window.clearInterval(t)
                                                        t = false;
                                                    }
                                                })
                                                </script>




                                                <div class="total-price">
                                                    <label>Subtotal : </label><span>$12.38</span>
                                                </div>



                                            </div>
                                        </div>
                                        <div class="product-infor">



                                            <p class="product-vendor">
                                                <label>Brand :</label>
                                                <span>Sports Wear</span>
                                            </p>


                                            <p class="product-type">
                                                <label>Product Type: </label>
                                                <span>Sale</span>
                                            </p>


                                            <p class="product-inventory" id="product-inventory">
                                                <label>Availability : </label>
                                                <span class="many-in-stock">Many In Stock</span>
                                            </p>


                                        </div>
                                        <button type="submit" name="add" id="AddToCart" class="btn">
                                            <span id="AddToCartText">Add to Cart</span>
                                        </button>

                                        <div data-shopify="payment-button" class="shopify-payment-button">
                                            <div>
                                                <div>
                                                    <div>
                                                        <div class="shopify-cleanslate">
                                                            <div id="shopify-svg-symbols" class="VoW3UuJKYxZJHMpUkDNUv"
                                                                aria-hidden="true"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlnsXlink="http://www.w3.org/1999/xlink"
                                                                    focusable="false">
                                                                    <defs>
                                                                        <symbol id="shopify-svg__warning"
                                                                            viewBox="0 0 16 14">
                                                                            <path
                                                                                d="M5.925 2.344c1.146-1.889 3.002-1.893 4.149 0l4.994 8.235c1.146 1.889.288 3.421-1.916 3.421h-10.305c-2.204 0-3.063-1.529-1.916-3.421l4.994-8.235zm1.075 1.656v5h2v-5h-2zm0 6v2h2v-2h-2z">
                                                                            </path>
                                                                        </symbol>
                                                                        <symbol id="shopify-svg__loading"
                                                                            viewBox="0 0 32 32">
                                                                            <path
                                                                                d="M32 16c0 8.837-7.163 16-16 16S0 24.837 0 16 7.163 0 16 0v2C8.268 2 2 8.268 2 16s6.268 14 14 14 14-6.268 14-14h2z">
                                                                            </path>
                                                                        </symbol>
                                                                        <symbol id="shopify-svg__error"
                                                                            viewBox="0 0 18 18">
                                                                            <path
                                                                                d="M9 18c5 0 9-4 9-9s-4-9-9-9-9 4-9 9 4 9 9 9z"
                                                                                style="fill: rgb(255, 62, 62);"></path>
                                                                            <path d="M8 4h2v6H8z"
                                                                                style="fill: rgb(255, 255, 255);">
                                                                            </path>
                                                                            <rect x="7.8" y="12" width="2.5"
                                                                                height="2.5" rx="1.3"
                                                                                style="fill: rgb(255, 255, 255);">
                                                                            </rect>
                                                                        </symbol>
                                                                        <symbol id="shopify-svg__close-circle"
                                                                            viewBox="0 0 16 16">
                                                                            <circle cx="8" cy="8" r="8"></circle>
                                                                            <path d="M10.5 5.5l-5 5M5.5 5.5l5 5"
                                                                                stroke="#FFF" stroke-width="1.5"
                                                                                stroke-linecap="square"></path>
                                                                        </symbol>
                                                                        <symbol id="shopify-svg__close"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M17.1 4.3l-1.4-1.4-5.7 5.7-5.7-5.7-1.4 1.4 5.7 5.7-5.7 5.7 1.4 1.4 5.7-5.7 5.7 5.7 1.4-1.4-5.7-5.7z">
                                                                            </path>
                                                                        </symbol>
                                                                        <symbol id="shopify-svg__arrow-right"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M16 8.1l-8.1 8.1-1.1-1.1L13 8.9H0V7.3h13L6.8 1.1 7.9 0 16 8.1z">
                                                                            </path>
                                                                        </symbol>
                                                                        <symbol
                                                                            id="shopify-svg__payments-google-pay-light"
                                                                            viewBox="0 0 41 17">
                                                                            <path
                                                                                d="M19.526 2.635v4.083h2.518c.6 0 1.096-.202 1.488-.605.403-.402.605-.882.605-1.437 0-.544-.202-1.018-.605-1.422-.392-.413-.888-.62-1.488-.62h-2.518zm0 5.52v4.736h-1.504V1.198h3.99c1.013 0 1.873.337 2.582 1.012.72.675 1.08 1.497 1.08 2.466 0 .991-.36 1.819-1.08 2.482-.697.665-1.559.996-2.583.996h-2.485v.001zM27.194 10.442c0 .392.166.718.499.98.332.26.722.391 1.168.391.633 0 1.196-.234 1.692-.701.497-.469.744-1.019.744-1.65-.469-.37-1.123-.555-1.962-.555-.61 0-1.12.148-1.528.442-.409.294-.613.657-.613 1.093m1.946-5.815c1.112 0 1.989.297 2.633.89.642.594.964 1.408.964 2.442v4.932h-1.439v-1.11h-.065c-.622.914-1.45 1.372-2.486 1.372-.882 0-1.621-.262-2.215-.784-.594-.523-.891-1.176-.891-1.96 0-.828.313-1.486.94-1.976s1.463-.735 2.51-.735c.892 0 1.629.163 2.206.49v-.344c0-.522-.207-.966-.621-1.33a2.132 2.132 0 0 0-1.455-.547c-.84 0-1.504.353-1.995 1.062l-1.324-.834c.73-1.045 1.81-1.568 3.238-1.568M40.993 4.889l-5.02 11.53H34.42l1.864-4.034-3.302-7.496h1.635l2.387 5.749h.032l2.322-5.75z"
                                                                                style="fill: rgb(255, 255, 255);">
                                                                            </path>
                                                                            <path
                                                                                d="M13.448 7.134c0-.473-.04-.93-.116-1.366H6.988v2.588h3.634a3.11 3.11 0 0 1-1.344 2.042v1.68h2.169c1.27-1.17 2.001-2.9 2.001-4.944"
                                                                                style="fill: rgb(66, 133, 244);"></path>
                                                                            <path
                                                                                d="M6.988 13.7c1.816 0 3.344-.595 4.459-1.621l-2.169-1.681c-.603.406-1.38.643-2.29.643-1.754 0-3.244-1.182-3.776-2.774H.978v1.731a6.728 6.728 0 0 0 6.01 3.703"
                                                                                style="fill: rgb(52, 168, 83);"></path>
                                                                            <path
                                                                                d="M3.212 8.267a4.034 4.034 0 0 1 0-2.572V3.964H.978A6.678 6.678 0 0 0 .261 6.98c0 1.085.26 2.11.717 3.017l2.234-1.731z"
                                                                                style="fill: rgb(251, 188, 5);"></path>
                                                                            <path
                                                                                d="M6.988 2.921c.992 0 1.88.34 2.58 1.008v.001l1.92-1.918C10.324.928 8.804.262 6.989.262a6.728 6.728 0 0 0-6.01 3.702l2.234 1.731c.532-1.592 2.022-2.774 3.776-2.774"
                                                                                style="fill: rgb(234, 67, 53);"></path>
                                                                        </symbol>
                                                                        <symbol
                                                                            id="shopify-svg__payments-google-pay-dark"
                                                                            viewBox="0 0 41 17">
                                                                            <path
                                                                                d="M19.526 2.635v4.083h2.518c.6 0 1.096-.202 1.488-.605.403-.402.605-.882.605-1.437 0-.544-.202-1.018-.605-1.422-.392-.413-.888-.62-1.488-.62h-2.518zm0 5.52v4.736h-1.504V1.198h3.99c1.013 0 1.873.337 2.582 1.012.72.675 1.08 1.497 1.08 2.466 0 .991-.36 1.819-1.08 2.482-.697.665-1.559.996-2.583.996h-2.485v.001zM27.194 10.442c0 .392.166.718.499.98.332.26.722.391 1.168.391.633 0 1.196-.234 1.692-.701.497-.469.744-1.019.744-1.65-.469-.37-1.123-.555-1.962-.555-.61 0-1.12.148-1.528.442-.409.294-.613.657-.613 1.093m1.946-5.815c1.112 0 1.989.297 2.633.89.642.594.964 1.408.964 2.442v4.932h-1.439v-1.11h-.065c-.622.914-1.45 1.372-2.486 1.372-.882 0-1.621-.262-2.215-.784-.594-.523-.891-1.176-.891-1.96 0-.828.313-1.486.94-1.976s1.463-.735 2.51-.735c.892 0 1.629.163 2.206.49v-.344c0-.522-.207-.966-.621-1.33a2.132 2.132 0 0 0-1.455-.547c-.84 0-1.504.353-1.995 1.062l-1.324-.834c.73-1.045 1.81-1.568 3.238-1.568M40.993 4.889l-5.02 11.53H34.42l1.864-4.034-3.302-7.496h1.635l2.387 5.749h.032l2.322-5.75z"
                                                                                style="fill: rgba(0, 0, 0, 0.55);">
                                                                            </path>
                                                                            <path
                                                                                d="M13.448 7.134c0-.473-.04-.93-.116-1.366H6.988v2.588h3.634a3.11 3.11 0 0 1-1.344 2.042v1.68h2.169c1.27-1.17 2.001-2.9 2.001-4.944"
                                                                                style="fill: rgb(66, 133, 244);"></path>
                                                                            <path
                                                                                d="M6.988 13.7c1.816 0 3.344-.595 4.459-1.621l-2.169-1.681c-.603.406-1.38.643-2.29.643-1.754 0-3.244-1.182-3.776-2.774H.978v1.731a6.728 6.728 0 0 0 6.01 3.703"
                                                                                style="fill: rgb(52, 168, 83);"></path>
                                                                            <path
                                                                                d="M3.212 8.267a4.034 4.034 0 0 1 0-2.572V3.964H.978A6.678 6.678 0 0 0 .261 6.98c0 1.085.26 2.11.717 3.017l2.234-1.731z"
                                                                                style="fill: rgb(251, 188, 5);"></path>
                                                                            <path
                                                                                d="M6.988 2.921c.992 0 1.88.34 2.58 1.008v.001l1.92-1.918C10.324.928 8.804.262 6.989.262a6.728 6.728 0 0 0-6.01 3.702l2.234 1.731c.532-1.592 2.022-2.774 3.776-2.774"
                                                                                style="fill: rgb(234, 67, 53);"></path>
                                                                        </symbol>
                                                                        <symbol id="shopify-svg__payments-amazon-pay"
                                                                            viewBox="0 0 102 20">
                                                                            <path
                                                                                d="M75.19 1.786c-.994 0-1.933.326-2.815.98v5.94c.896.683 1.82 1.023 2.774 1.023 1.932 0 2.899-1.32 2.899-3.96 0-2.655-.953-3.983-2.858-3.983zm-2.962-.277A5.885 5.885 0 0 1 73.93.444a4.926 4.926 0 0 1 1.85-.362c.672 0 1.282.127 1.827.383a3.763 3.763 0 0 1 1.387 1.108c.378.482.669 1.068.872 1.757.203.689.305 1.466.305 2.332 0 .88-.109 1.675-.326 2.385-.217.71-.522 1.314-.914 1.81a4.137 4.137 0 0 1-1.429 1.16 4.165 4.165 0 0 1-1.87.416c-1.26 0-2.346-.419-3.256-1.256v4.983c0 .284-.14.426-.42.426h-1.24c-.28 0-.42-.142-.42-.426V.827c0-.284.14-.426.42-.426h.925c.28 0 .441.142.483.426l.105.682zm13.194 8.37a4.21 4.21 0 0 0 1.45-.277 5.463 5.463 0 0 0 1.45-.81V6.62c-.35-.085-.719-.152-1.104-.202a8.8 8.8 0 0 0-1.124-.075c-1.583 0-2.374.617-2.374 1.853 0 .54.147.955.441 1.246.294.29.715.437 1.261.437zm-2.458-7.625l-.158.053a.561.561 0 0 1-.179.033c-.182 0-.273-.128-.273-.384V1.38c0-.199.028-.337.084-.415.056-.078.169-.153.337-.224.448-.199 1-.359 1.66-.48.657-.12 1.316-.18 1.974-.18 1.33 0 2.311.277 2.942.83.63.554.945 1.413.945 2.577v7.284c0 .284-.14.426-.42.426h-.903c-.267 0-.42-.135-.463-.405l-.105-.702a5.74 5.74 0 0 1-1.67 1.022 4.908 4.908 0 0 1-1.817.362c-1.009 0-1.807-.288-2.395-.863-.589-.575-.883-1.345-.883-2.31 0-1.037.364-1.864 1.092-2.481.73-.618 1.71-.927 2.942-.927.784 0 1.667.12 2.647.362V3.852c0-.767-.168-1.307-.504-1.619-.336-.313-.925-.469-1.764-.469-.982 0-2.01.163-3.09.49zm14.16 10.84c-.379.98-.816 1.683-1.314 2.109-.496.426-1.144.639-1.943.639-.448 0-.847-.05-1.197-.15a.606.606 0 0 1-.336-.202c-.07-.093-.105-.237-.105-.437V14.5c0-.27.105-.405.315-.405.07 0 .175.014.315.043.14.028.33.043.567.043.532 0 .946-.128 1.24-.384.294-.255.56-.724.798-1.406l.4-1.086-4.056-10.137c-.098-.241-.146-.411-.146-.511 0-.17.097-.256.294-.256h1.26c.224 0 .378.036.463.106.083.072.167.228.251.47l2.942 8.263L99.708.976c.084-.24.168-.397.252-.469.084-.07.238-.106.462-.106h1.177c.196 0 .294.086.294.256 0 .1-.05.27-.147.51l-4.622 11.927M40.15 15.47c-3.761 2.814-9.216 4.31-13.912 4.31-6.583 0-12.51-2.466-16.996-6.572-.352-.322-.038-.763.385-.513 4.84 2.855 10.825 4.574 17.006 4.574 4.17 0 8.753-.877 12.971-2.691.636-.273 1.17.425.547.891"
                                                                                style="fill: rgb(51, 62, 72);"></path>
                                                                            <path
                                                                                d="M41.717 13.657c-.482-.624-3.181-.296-4.394-.148-.368.044-.425-.281-.093-.517 2.153-1.533 5.682-1.09 6.092-.577.413.518-.108 4.104-2.127 5.816-.31.263-.605.122-.468-.225.455-1.15 1.471-3.724.99-4.349M37.429 2.06V.57A.365.365 0 0 1 37.8.193l6.59-.001c.21 0 .38.155.38.376v1.278c-.003.214-.18.494-.496.938L40.86 7.722c1.267-.03 2.607.163 3.757.818.26.148.33.367.35.582v1.59c0 .218-.237.472-.485.34-2.028-1.077-4.718-1.194-6.96.013-.23.124-.47-.126-.47-.345V9.209c0-.242.005-.656.246-1.024l3.953-5.75H37.81a.369.369 0 0 1-.38-.375M13.4 11.365h-2.005a.38.38 0 0 1-.358-.343L11.038.595a.38.38 0 0 1 .387-.375h1.866a.38.38 0 0 1 .365.35v1.36h.037C14.18.615 15.096 0 16.331 0c1.253 0 2.039.614 2.6 1.93C19.418.615 20.521 0 21.7 0c.842 0 1.758.351 2.32 1.141.635.878.505 2.15.505 3.27l-.002 6.58a.38.38 0 0 1-.387.374h-2.001a.378.378 0 0 1-.36-.374V5.463c0-.438.037-1.535-.056-1.952-.15-.703-.6-.9-1.179-.9-.486 0-.991.33-1.197.855-.206.527-.188 1.405-.188 1.997v5.527a.38.38 0 0 1-.386.375h-2.002a.379.379 0 0 1-.36-.374l-.001-5.528c0-1.163.186-2.874-1.235-2.874-1.44 0-1.384 1.668-1.384 2.874l-.001 5.527a.38.38 0 0 1-.387.375m37.059-9.236c-1.478 0-1.571 2.04-1.571 3.312 0 1.273-.02 3.993 1.552 3.993 1.554 0 1.628-2.194 1.628-3.532 0-.877-.038-1.93-.3-2.764-.224-.724-.673-1.01-1.31-1.01zM50.439 0c2.975 0 4.584 2.59 4.584 5.88 0 3.181-1.777 5.705-4.584 5.705-2.918 0-4.508-2.59-4.508-5.814C45.93 2.523 47.539 0 50.439 0zm8.441 11.365h-1.997a.379.379 0 0 1-.36-.374L56.52.561a.381.381 0 0 1 .386-.34L58.764.22c.175.009.32.13.356.291v1.595h.038C59.72.68 60.505 0 61.89 0c.898 0 1.778.329 2.339 1.229.524.834.524 2.237.524 3.247v6.561a.382.382 0 0 1-.385.328H62.36a.38.38 0 0 1-.357-.328V5.376c0-1.141.13-2.809-1.253-2.809-.487 0-.936.33-1.16.834-.281.636-.319 1.272-.319 1.975v5.614a.386.386 0 0 1-.39.375m-24.684.075a.41.41 0 0 1-.473.047c-.665-.56-.785-.82-1.149-1.354-1.1 1.136-1.879 1.477-3.304 1.477-1.687 0-3-1.055-3-3.166 0-1.65.882-2.77 2.138-3.32 1.087-.484 2.606-.572 3.769-.704v-.264c0-.484.037-1.055-.245-1.473-.243-.374-.712-.528-1.124-.528-.765 0-1.444.397-1.611 1.22-.035.183-.167.364-.348.374l-1.943-.214c-.164-.037-.346-.17-.299-.425C27.055.721 29.183 0 31.09 0c.975 0 2.25.263 3.018 1.011.975.924.881 2.155.881 3.497v3.165c0 .952.39 1.37.757 1.882.128.185.156.405-.007.54-.409.348-1.136.988-1.537 1.35l-.005-.005zm-2.02-4.953v-.44c-1.45 0-2.98.314-2.98 2.045 0 .88.45 1.473 1.218 1.473.562 0 1.069-.352 1.387-.923.394-.704.376-1.363.376-2.155zM7.926 11.44a.41.41 0 0 1-.473.047c-.667-.56-.786-.82-1.15-1.354C5.204 11.27 4.425 11.61 3 11.61c-1.688 0-3-1.055-3-3.166 0-1.65.88-2.77 2.137-3.32 1.087-.484 2.606-.572 3.768-.704v-.264c0-.484.038-1.055-.243-1.473-.244-.374-.713-.528-1.125-.528-.764 0-1.444.397-1.61 1.22-.036.183-.168.364-.35.374l-1.94-.214c-.165-.037-.347-.17-.3-.425C.783.721 2.911 0 4.818 0c.975 0 2.25.263 3.018 1.011.975.924.882 2.155.882 3.497v3.165c0 .952.39 1.37.756 1.882.128.185.157.405-.006.54a78.47 78.47 0 0 0-1.537 1.35l-.005-.005zm-2.02-4.953v-.44c-1.45 0-2.982.314-2.982 2.045 0 .88.45 1.473 1.219 1.473.562 0 1.069-.352 1.387-.923.394-.704.375-1.363.375-2.155z"
                                                                                style="fill: rgb(51, 62, 72);"></path>
                                                                        </symbol>
                                                                        <symbol
                                                                            id="shopify-svg__payments-apple-pay-dark"
                                                                            viewBox="0 0 43 19">
                                                                            <path
                                                                                d="M6.948 1.409C7.934.147 9.305.147 9.305.147s.193 1.18-.771 2.316c-1.05 1.2-2.228.993-2.228.993s-.236-.93.642-2.047zM3.82 3.663c-1.735 0-3.6 1.51-3.6 4.363 0 2.916 2.186 6.555 3.943 6.555.6 0 1.543-.6 2.485-.6.922 0 1.607.559 2.464.559 1.907 0 3.322-3.826 3.322-3.826s-2.015-.744-2.015-2.936c0-1.944 1.629-2.73 1.629-2.73s-.836-1.447-2.936-1.447c-1.22 0-2.164.661-2.656.661-.622.021-1.5-.6-2.636-.6zM19.64 1.426c2.453 0 4.188 1.788 4.188 4.396 0 2.608-1.755 4.417-4.248 4.417h-2.932v4.564h-1.974V1.426h4.966zm-2.992 7.067h2.473c1.695 0 2.693-.967 2.693-2.65 0-1.683-.978-2.671-2.693-2.671h-2.473v5.321zm7.559 3.429c0-1.767 1.296-2.777 3.65-2.945l2.572-.147v-.78c0-1.156-.738-1.787-1.994-1.787-1.037 0-1.795.568-1.955 1.43h-1.775c.06-1.788 1.656-3.092 3.79-3.092 2.333 0 3.829 1.304 3.829 3.281v6.9h-1.815v-1.684h-.04c-.519 1.094-1.715 1.788-3.012 1.788-1.934.021-3.25-1.178-3.25-2.965zm6.222-.905v-.778l-2.313.168c-1.297.084-1.975.59-1.975 1.494 0 .862.718 1.409 1.815 1.409 1.396-.021 2.473-.968 2.473-2.293zm3.969 7.383v-1.64c.14.041.438.041.598.041.897 0 1.416-.4 1.735-1.472l.14-.526L33.4 4.707h2.054l2.453 8.224h.04L40.4 4.707h1.994l-3.57 10.538c-.818 2.419-1.715 3.197-3.67 3.197-.14.02-.598-.021-.757-.042z"
                                                                                style="fill: rgb(0, 0, 0);"></path>
                                                                        </symbol>
                                                                        <symbol
                                                                            id="shopify-svg__payments-apple-pay-light"
                                                                            viewBox="0 0 43 19">
                                                                            <path
                                                                                d="M6.948 1.409C7.934.147 9.305.147 9.305.147s.193 1.18-.771 2.316c-1.05 1.2-2.228.993-2.228.993s-.236-.93.642-2.047zM3.82 3.663c-1.735 0-3.6 1.51-3.6 4.363 0 2.916 2.186 6.555 3.943 6.555.6 0 1.543-.6 2.485-.6.922 0 1.607.559 2.464.559 1.907 0 3.322-3.826 3.322-3.826s-2.015-.744-2.015-2.936c0-1.944 1.629-2.73 1.629-2.73s-.836-1.447-2.936-1.447c-1.22 0-2.164.661-2.656.661-.622.021-1.5-.6-2.636-.6zM19.64 1.426c2.453 0 4.188 1.788 4.188 4.396 0 2.608-1.755 4.417-4.248 4.417h-2.932v4.564h-1.974V1.426h4.966zm-2.992 7.067h2.473c1.695 0 2.693-.967 2.693-2.65 0-1.683-.978-2.671-2.693-2.671h-2.473v5.321zm7.559 3.429c0-1.767 1.296-2.777 3.65-2.945l2.572-.147v-.78c0-1.156-.738-1.787-1.994-1.787-1.037 0-1.795.568-1.955 1.43h-1.775c.06-1.788 1.656-3.092 3.79-3.092 2.333 0 3.829 1.304 3.829 3.281v6.9h-1.815v-1.684h-.04c-.519 1.094-1.715 1.788-3.012 1.788-1.934.021-3.25-1.178-3.25-2.965zm6.222-.905v-.778l-2.313.168c-1.297.084-1.975.59-1.975 1.494 0 .862.718 1.409 1.815 1.409 1.396-.021 2.473-.968 2.473-2.293zm3.969 7.383v-1.64c.14.041.438.041.598.041.897 0 1.416-.4 1.735-1.472l.14-.526L33.4 4.707h2.054l2.453 8.224h.04L40.4 4.707h1.994l-3.57 10.538c-.818 2.419-1.715 3.197-3.67 3.197-.14.02-.598-.021-.757-.042z"
                                                                                style="fill: rgb(255, 255, 255);">
                                                                            </path>
                                                                        </symbol>
                                                                        <symbol id="shopify-svg__payments-paypal"
                                                                            viewBox="0 0 67 19">
                                                                            <path
                                                                                d="M8.44.57H3.29a.718.718 0 0 0-.707.61L.502 14.517c-.041.263.16.5.425.5h2.458a.718.718 0 0 0 .707-.61l.561-3.597a.717.717 0 0 1 .706-.611h1.63c3.391 0 5.349-1.658 5.86-4.944.23-1.437.01-2.566-.657-3.357C11.461 1.029 10.162.57 8.44.57zm.594 4.87C8.752 7.308 7.34 7.308 5.976 7.308h-.777l.545-3.485a.43.43 0 0 1 .424-.366h.356c.93 0 1.807 0 2.26.535.27.32.353.794.25 1.45zm14.796-.06h-2.466a.43.43 0 0 0-.424.367l-.109.696-.172-.252c-.534-.783-1.724-1.044-2.912-1.044-2.725 0-5.052 2.084-5.505 5.008-.235 1.46.1 2.854.919 3.827.75.894 1.826 1.267 3.105 1.267 2.195 0 3.412-1.426 3.412-1.426l-.11.692a.432.432 0 0 0 .424.502h2.22a.718.718 0 0 0 .707-.61l1.333-8.526a.43.43 0 0 0-.423-.5zm-3.437 4.849c-.238 1.422-1.356 2.378-2.782 2.378-.716 0-1.288-.232-1.655-.672-.365-.436-.503-1.058-.387-1.75.222-1.41 1.359-2.397 2.763-2.397.7 0 1.269.235 1.644.678.375.448.524 1.073.417 1.763zM36.96 5.38h-2.478a.716.716 0 0 0-.592.318l-3.417 5.085-1.448-4.887a.719.719 0 0 0-.687-.515h-2.435a.433.433 0 0 0-.407.573l2.73 8.09-2.567 3.66a.434.434 0 0 0 .35.684h2.475a.712.712 0 0 0 .588-.31l8.24-12.016a.434.434 0 0 0-.352-.681z"
                                                                                style="fill: rgb(37, 59, 128);"></path>
                                                                            <path
                                                                                d="M45.163.57h-5.15a.717.717 0 0 0-.706.61l-2.082 13.337a.43.43 0 0 0 .423.5h2.642a.502.502 0 0 0 .494-.427l.591-3.78a.717.717 0 0 1 .706-.611h1.63c3.392 0 5.348-1.658 5.86-4.944.231-1.437.009-2.566-.657-3.357C48.183 1.029 46.886.57 45.163.57zm.593 4.87c-.28 1.867-1.692 1.867-3.057 1.867h-.777l.546-3.485a.429.429 0 0 1 .423-.366h.356c.93 0 1.807 0 2.26.535.27.32.353.794.25 1.45zm14.795-.06h-2.464a.428.428 0 0 0-.423.367l-.109.696-.173-.252c-.534-.783-1.723-1.044-2.911-1.044-2.724 0-5.05 2.084-5.504 5.008-.235 1.46.099 2.854.918 3.827.753.894 1.826 1.267 3.105 1.267 2.195 0 3.413-1.426 3.413-1.426l-.11.692a.432.432 0 0 0 .424.502h2.22a.717.717 0 0 0 .707-.61l1.333-8.526a.433.433 0 0 0-.426-.5zm-3.436 4.849c-.237 1.422-1.356 2.378-2.782 2.378-.714 0-1.288-.232-1.655-.672-.365-.436-.502-1.058-.387-1.75.223-1.41 1.359-2.397 2.763-2.397.7 0 1.269.235 1.644.678.377.448.526 1.073.417 1.763zM63.458.935l-2.113 13.582a.43.43 0 0 0 .423.5h2.124a.716.716 0 0 0 .707-.61L66.683 1.07a.432.432 0 0 0-.423-.5h-2.379c-.21 0-.39.156-.423.366z"
                                                                                style="fill: rgb(23, 155, 215);"></path>
                                                                        </symbol>
                                                                        <symbol
                                                                            id="shopify-svg__payments-shopify-pay-dark"
                                                                            viewBox="134 256 410 1">
                                                                            <path
                                                                                d="M241.22,242.74c-3.07-6.44-8.89-10.6-17.66-10.6a17.58,17.58,0,0,0-13.81,7.1l-.32.39V214.39a.55.55,0,0,0-.55-.55h-12.4a.55.55,0,0,0-.54.55v72.4a.54.54,0,0,0,.54.54h13.28a.55.55,0,0,0,.55-.54V255.92c0-6,4-10.25,10.4-10.25,7,0,8.77,5.76,8.77,11.63v29.49a.54.54,0,0,0,.54.54h13.25a.55.55,0,0,0,.55-.54V255.54c0-1.07,0-2.12-.14-3.14A27.63,27.63,0,0,0,241.22,242.74Z"
                                                                                style="fill: white;"></path>
                                                                            <path
                                                                                d="M174.91,253.47s-6.76-1.59-9.25-2.23-6.84-2-6.84-5.29,3.51-4.34,7.07-4.34,7.52.86,7.83,4.81a.57.57,0,0,0,.57.52l13.09-.05a.56.56,0,0,0,.56-.6c-.81-12.64-11.9-17.16-22.13-17.16-12.13,0-21,8-21,16.82,0,6.44,1.82,12.48,16.13,16.68,2.51.73,5.92,1.68,8.9,2.51,3.58,1,5.51,2.51,5.51,4.89,0,2.76-4,4.68-7.93,4.68-5.69,0-9.73-2.11-10.06-5.9a.57.57,0,0,0-.57-.5l-13.06.06a.57.57,0,0,0-.57.59c.6,11.93,12.12,18.36,22.86,18.36,16,0,23.23-9,23.23-17.43C189.27,265.93,188.36,256.91,174.91,253.47Z"
                                                                                style="fill: white;"></path>
                                                                            <path
                                                                                d="M343.31,232.12c-6.65,0-12.22,3.68-15.81,8.12v-7.6a.54.54,0,0,0-.53-.54H314.55a.54.54,0,0,0-.54.54v71a.54.54,0,0,0,.54.53h13.29a.53.53,0,0,0,.53-.53V280.3h.2c2.11,3.22,7.88,7.08,15.42,7.08,14.18,0,26-11.76,26-27.65C370,244.48,358.24,232.12,343.31,232.12Zm-1.23,41.73a14.09,14.09,0,1,1,13.74-14.12A13.9,13.9,0,0,1,342.08,273.85Z"
                                                                                style="fill: white;"></path>
                                                                            <path
                                                                                d="M274.68,229c-12.39,0-18.57,4.21-23.53,7.58l-.15.1a1.23,1.23,0,0,0-.37,1.63l4.9,8.44a1.24,1.24,0,0,0,.87.6,1.21,1.21,0,0,0,1-.27l.39-.32c2.55-2.14,6.64-5,16.54-5.78,5.51-.44,10.27,1,13.78,4.28,3.86,3.56,6.17,9.31,6.17,15.38,0,11.17-6.58,18.19-17.15,18.33-8.71-.05-14.56-4.59-14.56-11.3,0-3.56,1.61-5.88,4.75-8.2a1.22,1.22,0,0,0,.37-1.56l-4.4-8.32a1.29,1.29,0,0,0-.77-.62,1.24,1.24,0,0,0-1,.13c-4.94,2.93-11,8.29-10.67,18.59.4,13.11,11.3,23.12,25.47,23.53l.71,0H278c16.84-.55,29-13.05,29-30C307,245.66,295.66,229,274.68,229Z"
                                                                                style="fill: white;"></path>
                                                                            <path
                                                                                d="M342.08,245.68a14.09,14.09,0,1,0,13.74,14.05A13.84,13.84,0,0,0,342.08,245.68Z"
                                                                                style="fill: rgb(90, 49, 244);"></path>
                                                                            <rect x="383.23" y="214.02" width="141.73"
                                                                                height="90.42" rx="14.17"
                                                                                style="fill: white;"></rect>
                                                                            <path
                                                                                d="M439.07,246.62c0,9.67-6.77,16.57-16.23,16.57h-8.92a.75.75,0,0,0-.75.75v12.7a.75.75,0,0,1-.75.75h-6.28a.76.76,0,0,1-.75-.75V230.81a.75.75,0,0,1,.75-.75h16.7C432.3,230.06,439.07,237,439.07,246.62Zm-7.78,0c0-5.54-3.79-9.6-8.93-9.6h-8.44a.76.76,0,0,0-.75.75v17.71a.75.75,0,0,0,.75.74h8.44C427.5,256.22,431.29,252.17,431.29,246.62Z"
                                                                                style="fill: rgb(90, 49, 244);"></path>
                                                                            <path
                                                                                d="M440.92,268.6a8.91,8.91,0,0,1,3.72-7.64c2.44-1.83,6.22-2.78,11.83-3l5.95-.2V256c0-3.51-2.36-5-6.15-5s-6.18,1.34-6.74,3.53a.72.72,0,0,1-.72.52h-5.87a.74.74,0,0,1-.75-.85c.88-5.2,5.18-9.15,14.35-9.15,9.74,0,13.25,4.53,13.25,13.18v18.38a.75.75,0,0,1-.75.76h-5.93a.75.75,0,0,1-.75-.76v-1.37a.56.56,0,0,0-1-.39c-1.77,1.93-4.65,3.33-9.24,3.33C445.39,278.2,440.92,274.68,440.92,268.6Zm21.5-4v-1.42l-7.7.4c-4.06.21-6.43,1.9-6.43,4.74,0,2.57,2.17,4,5.95,4C459.38,272.32,462.42,269.54,462.42,264.61Z"
                                                                                style="fill: rgb(90, 49, 244);"></path>
                                                                            <path
                                                                                d="M475.75,291.27v-5.35a.76.76,0,0,1,.9-.75,14.84,14.84,0,0,0,2.75.26,7.11,7.11,0,0,0,7.17-5.07l.39-1.23a.74.74,0,0,0,0-.51l-12.34-31.7a.76.76,0,0,1,.71-1h6a.77.77,0,0,1,.71.49l8.38,22.36a.77.77,0,0,0,1.44,0l7.27-22.3a.75.75,0,0,1,.72-.52H506a.76.76,0,0,1,.71,1l-13.2,35.21c-3,8.18-8.25,10.28-14,10.28a11.17,11.17,0,0,1-3.21-.39A.77.77,0,0,1,475.75,291.27Z"
                                                                                style="fill: rgb(90, 49, 244);"></path>
                                                                        </symbol>
                                                                        <symbol
                                                                            id="shopify-svg__payments-shopify-pay-light"
                                                                            viewBox="134 256 410 1">
                                                                            <path
                                                                                d="M241.22,242.74c-3.07-6.44-8.89-10.6-17.66-10.6a17.58,17.58,0,0,0-13.81,7.1l-.32.39V214.39a.55.55,0,0,0-.55-.55h-12.4a.55.55,0,0,0-.54.55v72.4a.54.54,0,0,0,.54.54h13.28a.55.55,0,0,0,.55-.54V255.92c0-6,4-10.25,10.4-10.25,7,0,8.77,5.76,8.77,11.63v29.49a.54.54,0,0,0,.54.54h13.25a.55.55,0,0,0,.55-.54V255.54c0-1.07,0-2.12-.14-3.14A27.63,27.63,0,0,0,241.22,242.74Z"
                                                                                style="fill: white;"></path>
                                                                            <path
                                                                                d="M174.91,253.47s-6.76-1.59-9.25-2.23-6.84-2-6.84-5.29,3.51-4.34,7.07-4.34,7.52.86,7.83,4.81a.57.57,0,0,0,.57.52l13.09-.05a.56.56,0,0,0,.56-.6c-.81-12.64-11.9-17.16-22.13-17.16-12.13,0-21,8-21,16.82,0,6.44,1.82,12.48,16.13,16.68,2.51.73,5.92,1.68,8.9,2.51,3.58,1,5.51,2.51,5.51,4.89,0,2.76-4,4.68-7.93,4.68-5.69,0-9.73-2.11-10.06-5.9a.57.57,0,0,0-.57-.5l-13.06.06a.57.57,0,0,0-.57.59c.6,11.93,12.12,18.36,22.86,18.36,16,0,23.23-9,23.23-17.43C189.27,265.93,188.36,256.91,174.91,253.47Z"
                                                                                style="fill: white;"></path>
                                                                            <path
                                                                                d="M343.31,232.12c-6.65,0-12.22,3.68-15.81,8.12v-7.6a.54.54,0,0,0-.53-.54H314.55a.54.54,0,0,0-.54.54v71a.54.54,0,0,0,.54.53h13.29a.53.53,0,0,0,.53-.53V280.3h.2c2.11,3.22,7.88,7.08,15.42,7.08,14.18,0,26-11.76,26-27.65C370,244.48,358.24,232.12,343.31,232.12Zm-1.23,41.73a14.09,14.09,0,1,1,13.74-14.12A13.9,13.9,0,0,1,342.08,273.85Z"
                                                                                style="fill: white;"></path>
                                                                            <path
                                                                                d="M274.68,229c-12.39,0-18.57,4.21-23.53,7.58l-.15.1a1.23,1.23,0,0,0-.37,1.63l4.9,8.44a1.24,1.24,0,0,0,.87.6,1.21,1.21,0,0,0,1-.27l.39-.32c2.55-2.14,6.64-5,16.54-5.78,5.51-.44,10.27,1,13.78,4.28,3.86,3.56,6.17,9.31,6.17,15.38,0,11.17-6.58,18.19-17.15,18.33-8.71-.05-14.56-4.59-14.56-11.3,0-3.56,1.61-5.88,4.75-8.2a1.22,1.22,0,0,0,.37-1.56l-4.4-8.32a1.29,1.29,0,0,0-.77-.62,1.24,1.24,0,0,0-1,.13c-4.94,2.93-11,8.29-10.67,18.59.4,13.11,11.3,23.12,25.47,23.53l.71,0H278c16.84-.55,29-13.05,29-30C307,245.66,295.66,229,274.68,229Z"
                                                                                style="fill: white;"></path>
                                                                            <path
                                                                                d="M342.08,245.68a14.09,14.09,0,1,0,13.74,14.05A13.84,13.84,0,0,0,342.08,245.68Z"
                                                                                style="fill: rgb(90, 49, 244);"></path>
                                                                            <rect x="383.23" y="214.02" width="141.73"
                                                                                height="90.42" rx="14.17"
                                                                                style="fill: white;"></rect>
                                                                            <path
                                                                                d="M439.07,246.62c0,9.67-6.77,16.57-16.23,16.57h-8.92a.75.75,0,0,0-.75.75v12.7a.75.75,0,0,1-.75.75h-6.28a.76.76,0,0,1-.75-.75V230.81a.75.75,0,0,1,.75-.75h16.7C432.3,230.06,439.07,237,439.07,246.62Zm-7.78,0c0-5.54-3.79-9.6-8.93-9.6h-8.44a.76.76,0,0,0-.75.75v17.71a.75.75,0,0,0,.75.74h8.44C427.5,256.22,431.29,252.17,431.29,246.62Z"
                                                                                style="fill: rgb(90, 49, 244);"></path>
                                                                            <path
                                                                                d="M440.92,268.6a8.91,8.91,0,0,1,3.72-7.64c2.44-1.83,6.22-2.78,11.83-3l5.95-.2V256c0-3.51-2.36-5-6.15-5s-6.18,1.34-6.74,3.53a.72.72,0,0,1-.72.52h-5.87a.74.74,0,0,1-.75-.85c.88-5.2,5.18-9.15,14.35-9.15,9.74,0,13.25,4.53,13.25,13.18v18.38a.75.75,0,0,1-.75.76h-5.93a.75.75,0,0,1-.75-.76v-1.37a.56.56,0,0,0-1-.39c-1.77,1.93-4.65,3.33-9.24,3.33C445.39,278.2,440.92,274.68,440.92,268.6Zm21.5-4v-1.42l-7.7.4c-4.06.21-6.43,1.9-6.43,4.74,0,2.57,2.17,4,5.95,4C459.38,272.32,462.42,269.54,462.42,264.61Z"
                                                                                style="fill: rgb(90, 49, 244);"></path>
                                                                            <path
                                                                                d="M475.75,291.27v-5.35a.76.76,0,0,1,.9-.75,14.84,14.84,0,0,0,2.75.26,7.11,7.11,0,0,0,7.17-5.07l.39-1.23a.74.74,0,0,0,0-.51l-12.34-31.7a.76.76,0,0,1,.71-1h6a.77.77,0,0,1,.71.49l8.38,22.36a.77.77,0,0,0,1.44,0l7.27-22.3a.75.75,0,0,1,.72-.52H506a.76.76,0,0,1,.71,1l-13.2,35.21c-3,8.18-8.25,10.28-14,10.28a11.17,11.17,0,0,1-3.21-.39A.77.77,0,0,1,475.75,291.27Z"
                                                                                style="fill: rgb(90, 49, 244);"></path>
                                                                        </symbol>
                                                                    </defs>
                                                                </svg></div>
                                                        </div><button type="button"
                                                            class="shopify-payment-button__button shopify-payment-button__button--unbranded _2ogcW-Q9I-rgsSkNbRiJzA _2EiMjnumZ6FVtlC7RViKtj _2-dUletcCZ2ZL1aaH0GXxT"
                                                            data-testid="Checkout-button">Buy it now</button><button
                                                            aria-disabled="true" aria-hidden="true"
                                                            class="shopify-payment-button__more-options _2ogcW-Q9I-rgsSkNbRiJzA shopify-payment-button__button--hidden"
                                                            type="button" data-testid="sheet-open-button">More payment
                                                            options</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <div class="add-to-wishlist">
                                    <div class="show">
                                        <div
                                            class="default-wishbutton-c122-1113577-aonijie-sports-waist-belt-bag-pack-4755-inch-touch-screen-phone-case-holder-marathon-running loading">
                                            <a class="add-in-wishlist-js btn"
                                                href="c122-1113577-aonijie-sports-waist-belt-bag-pack-4755-inch-touch-screen-phone-case-holder-marathon-running"><i
                                                    class="fa fa-heart-o"></i><span class="tooltip-label">Add to
                                                    wishlist</span></a></div>
                                        <div class="loadding-wishbutton-c122-1113577-aonijie-sports-waist-belt-bag-pack-4755-inch-touch-screen-phone-case-holder-marathon-running loading btn"
                                            style="display: none; pointer-events: none"><a class="add_to_wishlist"
                                                href="c122-1113577-aonijie-sports-waist-belt-bag-pack-4755-inch-touch-screen-phone-case-holder-marathon-running"><i
                                                    class="fa fa-circle-o-notch fa-spin"></i></a></div>
                                        <div class="added-wishbutton-c122-1113577-aonijie-sports-waist-belt-bag-pack-4755-inch-touch-screen-phone-case-holder-marathon-running loading"
                                            style="display: none;"><a class="added-wishlist btn add_to_wishlist"
                                                href="/pages/wishlist"><i class="fa fa-heart"></i><span
                                                    class="tooltip-label">View Wishlist</span></a></div>
                                    </div>
                                </div>


                                <img
                                    src="//cdn.shopify.com/s/files/1/0145/2942/9604/t/2/assets/secure-checkout.jpg?v=10995401043679342695">


                                <div class="share_this_btn">
                                    <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                        <a class="addthis_button_reddit addthis_button_preferred_1 at300b at300b"
                                            target="_blank" title="Preferred_1" href="#"><span class="at-icon-wrapper"
                                                style="background-color: rgb(255, 87, 0); line-height: 32px; height: 32px; width: 32px;"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"
                                                    version="1.1" role="img" aria-labelledby="at-svg-reddit-1"
                                                    title="Reddit" alt="Reddit" style="width: 32px; height: 32px;"
                                                    class="at-icon at-icon-reddit">
                                                    <title id="at-svg-reddit-1">Reddit</title>
                                                    <g>
                                                        <path
                                                            d="M27 15.5a2.452 2.452 0 0 1-1.338 2.21c.098.38.147.777.147 1.19 0 1.283-.437 2.47-1.308 3.563-.872 1.092-2.06 1.955-3.567 2.588-1.506.634-3.143.95-4.91.95-1.768 0-3.403-.316-4.905-.95-1.502-.632-2.69-1.495-3.56-2.587-.872-1.092-1.308-2.28-1.308-3.562 0-.388.045-.777.135-1.166a2.47 2.47 0 0 1-1.006-.912c-.253-.4-.38-.842-.38-1.322 0-.678.237-1.26.712-1.744a2.334 2.334 0 0 1 1.73-.726c.697 0 1.29.26 1.78.782 1.785-1.258 3.893-1.928 6.324-2.01l1.424-6.467a.42.42 0 0 1 .184-.26.4.4 0 0 1 .32-.063l4.53 1.006c.147-.306.368-.553.662-.74a1.78 1.78 0 0 1 .97-.278c.508 0 .94.18 1.302.54.36.36.54.796.54 1.31 0 .512-.18.95-.54 1.315-.36.364-.794.546-1.302.546-.507 0-.94-.18-1.295-.54a1.793 1.793 0 0 1-.533-1.308l-4.1-.92-1.277 5.86c2.455.074 4.58.736 6.37 1.985a2.315 2.315 0 0 1 1.757-.757c.68 0 1.256.242 1.73.726.476.484.713 1.066.713 1.744zm-16.868 2.47c0 .513.178.95.534 1.315.356.365.787.547 1.295.547.508 0 .942-.182 1.302-.547.36-.364.54-.802.54-1.315 0-.513-.18-.95-.54-1.31-.36-.36-.794-.54-1.3-.54-.5 0-.93.183-1.29.547a1.79 1.79 0 0 0-.54 1.303zm9.944 4.406c.09-.09.135-.2.135-.323a.444.444 0 0 0-.44-.447c-.124 0-.23.042-.32.124-.336.348-.83.605-1.486.77a7.99 7.99 0 0 1-1.964.248 7.99 7.99 0 0 1-1.964-.248c-.655-.165-1.15-.422-1.486-.77a.456.456 0 0 0-.32-.124.414.414 0 0 0-.306.124.41.41 0 0 0-.135.317.45.45 0 0 0 .134.33c.352.355.837.636 1.455.843.617.207 1.118.33 1.503.366a11.6 11.6 0 0 0 1.117.056c.36 0 .733-.02 1.117-.056.385-.037.886-.16 1.504-.366.62-.207 1.104-.488 1.456-.844zm-.037-2.544c.507 0 .938-.182 1.294-.547.356-.364.534-.802.534-1.315 0-.505-.18-.94-.54-1.303a1.75 1.75 0 0 0-1.29-.546c-.506 0-.94.18-1.3.54-.36.36-.54.797-.54 1.31s.18.95.54 1.315c.36.365.794.547 1.3.547z"
                                                            fill-rule="evenodd"></path>
                                                    </g>
                                                </svg></span></a>
                                        <a class="addthis_button_facebook addthis_button_preferred_2 at300b at300b"
                                            title="Preferred_2" href="#"><span class="at-icon-wrapper"
                                                style="background-color: rgb(59, 89, 152); line-height: 32px; height: 32px; width: 32px;"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"
                                                    version="1.1" role="img" aria-labelledby="at-svg-facebook-2"
                                                    title="Facebook" alt="Facebook" style="width: 32px; height: 32px;"
                                                    class="at-icon at-icon-facebook">
                                                    <title id="at-svg-facebook-2">Facebook</title>
                                                    <g>
                                                        <path
                                                            d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z"
                                                            fill-rule="evenodd"></path>
                                                    </g>
                                                </svg></span></a>
                                        <a class="addthis_button_twitter addthis_button_preferred_3 at300b at300b"
                                            title="Preferred_3" href="#"><span class="at-icon-wrapper"
                                                style="background-color: rgb(29, 161, 242); line-height: 32px; height: 32px; width: 32px;"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"
                                                    version="1.1" role="img" aria-labelledby="at-svg-twitter-3"
                                                    title="Twitter" alt="Twitter" style="width: 32px; height: 32px;"
                                                    class="at-icon at-icon-twitter">
                                                    <title id="at-svg-twitter-3">Twitter</title>
                                                    <g>
                                                        <path
                                                            d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336"
                                                            fill-rule="evenodd"></path>
                                                    </g>
                                                </svg></span></a>
                                        <a class="addthis_button_print addthis_button_preferred_4 at300b at300b"
                                            title="Preferred_4" href="#" target="_blank"><span class="at-icon-wrapper"
                                                style="background-color: rgb(115, 138, 141); line-height: 32px; height: 32px; width: 32px;"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"
                                                    version="1.1" role="img" aria-labelledby="at-svg-print-4"
                                                    title="Print" alt="Print" style="width: 32px; height: 32px;"
                                                    class="at-icon at-icon-print">
                                                    <title id="at-svg-print-4">Print</title>
                                                    <g>
                                                        <path
                                                            d="M24.67 10.62h-2.86V7.49H10.82v3.12H7.95c-.5 0-.9.4-.9.9v7.66h3.77v1.31L15 24.66h6.81v-5.44h3.77v-7.7c-.01-.5-.41-.9-.91-.9zM11.88 8.56h8.86v2.06h-8.86V8.56zm10.98 9.18h-1.05v-2.1h-1.06v7.96H16.4c-1.58 0-.82-3.74-.82-3.74s-3.65.89-3.69-.78v-3.43h-1.06v2.06H9.77v-3.58h13.09v3.61zm.75-4.91c-.4 0-.72-.32-.72-.72s.32-.72.72-.72c.4 0 .72.32.72.72s-.32.72-.72.72zm-4.12 2.96h-6.1v1.06h6.1v-1.06zm-6.11 3.15h6.1v-1.06h-6.1v1.06z">
                                                        </path>
                                                    </g>
                                                </svg></span></a>
                                        <a class="addthis_button_compact at300m" href="#"><span class="at-icon-wrapper"
                                                style="background-color: rgb(255, 101, 80); line-height: 32px; height: 32px; width: 32px;"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"
                                                    version="1.1" role="img" aria-labelledby="at-svg-addthis-5"
                                                    title="More" alt="More" style="width: 32px; height: 32px;"
                                                    class="at-icon at-icon-addthis">
                                                    <title id="at-svg-addthis-5">AddThis</title>
                                                    <g>
                                                        <path d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z"
                                                            fill-rule="evenodd"></path>
                                                    </g>
                                                </svg></span></a>
                                        <a class="addthis_counter addthis_bubble_style" href="#"
                                            style="display: inline-block;"><a class="addthis_button_expanded"
                                                target="_blank" title="More" href="#">0</a><a
                                                class="atc_s addthis_button_compact">Share<span></span></a></a>
                                        <div class="atclear"></div>
                                    </div>
                                    <script type="text/javascript">
                                    var addthis_product = 'sfy-2.0.2';
                                    var addthis_plugin_info = {
                                        "info_status": "enabled",
                                        "cms_name": "Shopify",
                                        "cms_version": null,
                                        "plugin_name": "AddThis Sharing Tool",
                                        "plugin_version": "2.0.2",
                                        "plugin_mode": "AddThis"
                                    };
                                    var addthis_config = {
                                        /*AddThisShopify_config_begins*/
                                        pubid: 'xa-525fbbd6215b4f1a',
                                        button_style: 'style3',
                                        services_compact: '',
                                        ui_delay: 0,
                                        ui_click: false,
                                        ui_language: '',
                                        data_track_clickback: true,
                                        data_ga_tracker: '',
                                        custom_services: '',
                                        custom_services_size: true /*AddThisShopify_config_ends*/
                                    };
                                    </script>
                                    <script type="text/javascript"
                                        src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-525fbbd6215b4f1a">
                                    </script>

                                </div>
                            </div>
                        </div>
                        <div class="dt-sc-hr-invisible-large"></div>
                        <div class="dt-sc-tabs-container">
                            <ul class="dt-sc-tabs">
                                <li><a class="btn current" href="#"> Description </a></li>


                            </ul>

                            <div class="dt-sc-tabs-content" id="desc_pro" style="display: block;">
                                <p><span style="font-size:14px;"><strong>Specification:</strong>Brand:&nbsp;AONIJIEMaterial:
                                        Lycra(DWR waterproof treatment)Webbing Material: PolyesterGender: UnisexSize:
                                        S(4.7 inch), M(5.5 inch)Waistline: 65-150cm(S), 70-160cm(L)Color: Black, Rose,
                                        Green, BlueWeight: About 75g(S), 85g(L)Use: Marathon, Running, Jogging, Walking,
                                        Racing etc.<strong>Features:</strong>4.7" is suit for cell phone screen under
                                        4.7 inch;&nbsp;5.5" for cell phone screen under 6 inch.Lightweight and
                                        practical, convenient to carry.Touch screen design, easy for operation during
                                        sports.Elastic lycra fabric, soft, water resistant, breathable and
                                        wicking.Reflective viewing frame, reflect light and safer for night
                                        running.<strong>Pacakge Included:</strong>1 x AONIJIE Sports Waist Belt
                                        Bag</span></p>
                                <div style="text-align: center;"></div>
                                <div style="text-align: center;"></div>
                                <div style="text-align: center;"></div>
                                <div style="text-align: center;"></div>
                                <div style="text-align: center;"></div>
                                <div style="text-align: center;"></div>
                                <div style="text-align: center;"></div><span
                                    style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; line-height: 18.2px;">&nbsp;&nbsp;</span>
                                <p></p>
                            </div>
                        </div>


                        <div class="dt-sc-hr-invisible-large"></div>

                        <script>
                        /**
                         * Module to show Recently Viewed Products
                         *
                         * Copyright (c) 2014 Caroline Schnapp (11heavens.com)
                         * Dual licensed under the MIT and GPL licenses:
                         * http://www.opensource.org/licenses/mit-license.php
                         * http://www.gnu.org/licenses/gpl.html
                         *
                         */
                        Shopify.Products = function() {
                            var e = {
                                howManyToShow: 3,
                                howManyToStoreInMemory: 10,
                                wrapperId: "recently-viewed-products",
                                templateId: "recently-viewed-product-template",
                                onComplete: null
                            };
                            var t = [];
                            var n = null;
                            var r = null;
                            var i = 0;
                            var s = {
                                configuration: {
                                    expires: 90,
                                    path: "/",
                                    domain: window.location.hostname
                                },
                                name: "shopify_recently_viewed",
                                write: function(e) {
                                    jQuery.cookie(this.name, e.join(" "), this.configuration)
                                },
                                read: function() {
                                    var e = [];
                                    var t = jQuery.cookie(this.name);
                                    if (t !== null && t != undefined) {
                                        e = t.split(" ")
                                    }
                                    return e
                                },
                                destroy: function() {
                                    jQuery.cookie(this.name, null, this.configuration)
                                },
                                remove: function(e) {
                                    var t = this.read();
                                    var n = jQuery.inArray(e, t);
                                    if (n !== -1) {
                                        t.splice(n, 1);
                                        this.write(t)
                                    }
                                }
                            };
                            var o = function() {
                                n.show();
                                if (e.onComplete) {
                                    try {
                                        e.onComplete()
                                    } catch (t) {}
                                }
                            };
                            var u = function() {
                                if (t.length && i < e.howManyToShow) {
                                    jQuery.ajax({
                                        dataType: "json",
                                        url: "/products/" + t[0] + ".js",
                                        cache: false,
                                        success: function(e) {
                                            r.tmpl(e).appendTo(n);
                                            t.shift();
                                            i++;
                                            u()
                                        },
                                        error: function() {
                                            s.remove(t[0]);
                                            t.shift();
                                            u()
                                        }
                                    })
                                } else {
                                    o()
                                }
                            };
                            return {
                                resizeImage: function(e, t) {
                                    if (t == null) {
                                        return e
                                    }
                                    if (t == "master") {
                                        return e.replace(/http(s)?:/, "")
                                    }
                                    var n = e.match(/\.(jpg|jpeg|gif|png|bmp|bitmap|tiff|tif)(\?v=\d+)?/i);
                                    if (n != null && n != undefined) {
                                        var r = e.split(n[0]);
                                        var i = n[0];
                                        return (r[0] + "_" + t + i).replace(/http(s)?:/, "")
                                    } else {
                                        return null
                                    }
                                },
                                showRecentlyViewed: function(i) {
                                    var i = i || {};
                                    jQuery.extend(e, i);
                                    t = s.read();
                                    r = jQuery("#" + e.templateId);
                                    n = jQuery("#" + e.wrapperId);
                                    e.howManyToShow = Math.min(t.length, e.howManyToShow);
                                    if (e.howManyToShow && r.length && n.length) {
                                        u()
                                    }
                                },
                                getConfig: function() {
                                    return e
                                },
                                clearList: function() {
                                    s.destroy()
                                },
                                recordRecentlyViewed: function(t) {
                                    var t = t || {};
                                    jQuery.extend(e, t);
                                    var n = s.read();
                                    if (window.location.pathname.indexOf("/products/") !== -1) {
                                        var r = window.location.pathname.match(/\/products\/([a-z0-9\-]+)/)[1];
                                        var i = jQuery.inArray(r, n);
                                        if (i === -1) {
                                            n.unshift(r);
                                            n = n.splice(0, e.howManyToStoreInMemory)
                                        } else {
                                            n.splice(i, 1);
                                            n.unshift(r)
                                        }
                                        s.write(n)
                                    }
                                }
                            }
                        }()


                        Shopify.Products.showRecentlyViewed({
                            howManyToShow: 8,
                            wrapperId: 'recently-viewed-products-grid',
                            templateId: 'recently-viewed-product-grid-template',
                            onComplete: function() {
                                if (jQuery("#recently-viewed-products-grid").children().length > 0) {
                                    jQuery(".recently-viewed-products").show();
                                }
                            }
                        });
                        </script>



                    </div>
                </div>

                <script
                    src="//cdn.shopify.com/s/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js"
                    type="text/javascript"></script>
                <script src="//cdn.shopify.com/s/files/1/0145/2942/9604/t/2/assets/jquery.fancybox.js?12"
                    type="text/javascript"></script>

                <script>
                var selectCallback = function(variant, selector) {
                    timber.productPage({
                        money_format: "${{amount}}",
                        variant: variant,
                        selector: selector,
                        translations: {
                            add_to_cart: "Add to Cart",
                            sold_out: "Sold Out",
                            unavailable: "Unavailable"
                        }
                    });
                };

                jQuery(function($) {
                    new Shopify.OptionSelectors('productSelect', {
                        product: {
                            "id": 4420396220516,
                            "title": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running",
                            "handle": "c122-1113577-aonijie-sports-waist-belt-bag-pack-4755-inch-touch-screen-phone-case-holder-marathon-running",
                            "description": "\u003cspan style=\"font-size:14px;\"\u003e\u003cstrong\u003eSpecification:\u003c\/strong\u003eBrand: AONIJIEMaterial: Lycra(DWR waterproof treatment)Webbing Material: PolyesterGender: UnisexSize: S(4.7 inch), M(5.5 inch)Waistline: 65-150cm(S), 70-160cm(L)Color: Black, Rose, Green, BlueWeight: About 75g(S), 85g(L)Use: Marathon, Running, Jogging, Walking, Racing etc.\u003cstrong\u003eFeatures:\u003c\/strong\u003e4.7\" is suit for cell phone screen under 4.7 inch; 5.5\" for cell phone screen under 6 inch.Lightweight and practical, convenient to carry.Touch screen design, easy for operation during sports.Elastic lycra fabric, soft, water resistant, breathable and wicking.Reflective viewing frame, reflect light and safer for night running.\u003cstrong\u003ePacakge Included:\u003c\/strong\u003e1 x AONIJIE Sports Waist Belt Bag\u003c\/span\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cspan style=\"color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; line-height: 18.2px;\"\u003e  \u003c\/span\u003e",
                            "published_at": "2020-02-07T05:18:38-05:00",
                            "created_at": "2020-02-07T05:18:46-05:00",
                            "vendor": "Sports Wear",
                            "type": "Sale",
                            "tags": ["sale"],
                            "price": 1238,
                            "price_min": 1238,
                            "price_max": 1238,
                            "available": true,
                            "price_varies": false,
                            "compare_at_price": 0,
                            "compare_at_price_min": 0,
                            "compare_at_price_max": 0,
                            "compare_at_price_varies": false,
                            "variants": [{
                                "id": 31481037848676,
                                "title": "BLACK \/ L",
                                "option1": "BLACK",
                                "option2": "L",
                                "option3": null,
                                "sku": "eb74a1cdbdf3c9a5b710cdc18990e6de",
                                "requires_shipping": true,
                                "taxable": true,
                                "featured_image": null,
                                "available": true,
                                "name": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running - BLACK \/ L",
                                "public_title": "BLACK \/ L",
                                "options": ["BLACK", "L"],
                                "price": 1238,
                                "weight": 95,
                                "compare_at_price": 0,
                                "inventory_management": null,
                                "barcode": ""
                            }, {
                                "id": 31481037881444,
                                "title": "GREEN \/ L",
                                "option1": "GREEN",
                                "option2": "L",
                                "option3": null,
                                "sku": "a3745a11f847f851805f8321744bd9d6",
                                "requires_shipping": true,
                                "taxable": true,
                                "featured_image": null,
                                "available": true,
                                "name": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running - GREEN \/ L",
                                "public_title": "GREEN \/ L",
                                "options": ["GREEN", "L"],
                                "price": 1238,
                                "weight": 95,
                                "compare_at_price": 0,
                                "inventory_management": null,
                                "barcode": ""
                            }, {
                                "id": 31481037914212,
                                "title": "ROSE \/ L",
                                "option1": "ROSE",
                                "option2": "L",
                                "option3": null,
                                "sku": "8cada67917f0ce05519333233dec7a63",
                                "requires_shipping": true,
                                "taxable": true,
                                "featured_image": null,
                                "available": true,
                                "name": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running - ROSE \/ L",
                                "public_title": "ROSE \/ L",
                                "options": ["ROSE", "L"],
                                "price": 1238,
                                "weight": 95,
                                "compare_at_price": 0,
                                "inventory_management": null,
                                "barcode": ""
                            }, {
                                "id": 31481037946980,
                                "title": "BLUE \/ L",
                                "option1": "BLUE",
                                "option2": "L",
                                "option3": null,
                                "sku": "6bcd55696c6a1d29e403b505976fd2d8",
                                "requires_shipping": true,
                                "taxable": true,
                                "featured_image": null,
                                "available": true,
                                "name": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running - BLUE \/ L",
                                "public_title": "BLUE \/ L",
                                "options": ["BLUE", "L"],
                                "price": 1238,
                                "weight": 95,
                                "compare_at_price": 0,
                                "inventory_management": null,
                                "barcode": ""
                            }, {
                                "id": 31481037979748,
                                "title": "BLACK \/ S",
                                "option1": "BLACK",
                                "option2": "S",
                                "option3": null,
                                "sku": "26b8d158e610b2e25cb5c1e401644de9",
                                "requires_shipping": true,
                                "taxable": true,
                                "featured_image": null,
                                "available": true,
                                "name": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running - BLACK \/ S",
                                "public_title": "BLACK \/ S",
                                "options": ["BLACK", "S"],
                                "price": 1238,
                                "weight": 95,
                                "compare_at_price": 0,
                                "inventory_management": null,
                                "barcode": ""
                            }, {
                                "id": 31481038012516,
                                "title": "GREEN \/ S",
                                "option1": "GREEN",
                                "option2": "S",
                                "option3": null,
                                "sku": "6d73b3286b8a09bc218c2a71120d3243",
                                "requires_shipping": true,
                                "taxable": true,
                                "featured_image": null,
                                "available": true,
                                "name": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running - GREEN \/ S",
                                "public_title": "GREEN \/ S",
                                "options": ["GREEN", "S"],
                                "price": 1238,
                                "weight": 95,
                                "compare_at_price": 0,
                                "inventory_management": null,
                                "barcode": ""
                            }, {
                                "id": 31481038045284,
                                "title": "ROSE \/ S",
                                "option1": "ROSE",
                                "option2": "S",
                                "option3": null,
                                "sku": "b511bede080f81ffe53c0fe9c886654c",
                                "requires_shipping": true,
                                "taxable": true,
                                "featured_image": null,
                                "available": true,
                                "name": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running - ROSE \/ S",
                                "public_title": "ROSE \/ S",
                                "options": ["ROSE", "S"],
                                "price": 1238,
                                "weight": 95,
                                "compare_at_price": 0,
                                "inventory_management": null,
                                "barcode": ""
                            }, {
                                "id": 31481038078052,
                                "title": "BLUE \/ S",
                                "option1": "BLUE",
                                "option2": "S",
                                "option3": null,
                                "sku": "8c888012e4b4d388ed09e613bab14697",
                                "requires_shipping": true,
                                "taxable": true,
                                "featured_image": null,
                                "available": true,
                                "name": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running - BLUE \/ S",
                                "public_title": "BLUE \/ S",
                                "options": ["BLUE", "S"],
                                "price": 1238,
                                "weight": 95,
                                "compare_at_price": 0,
                                "inventory_management": null,
                                "barcode": ""
                            }],
                            "images": [
                                "\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577.jpg?v=1581070726",
                                "\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006895.jpg?v=1581070726",
                                "\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006896.jpg?v=1581070726",
                                "\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006897.jpg?v=1581070726",
                                "\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006898.jpg?v=1581070726",
                                "\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006899.jpg?v=1581070726"
                            ],
                            "featured_image": "\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577.jpg?v=1581070726",
                            "options": ["COLOR", "SIZE"],
                            "media": [{
                                "alt": null,
                                "id": 6046947639396,
                                "position": 1,
                                "preview_image": {
                                    "aspect_ratio": 1.0,
                                    "height": 500,
                                    "width": 500,
                                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577.jpg?v=1581070726"
                                },
                                "aspect_ratio": 1.0,
                                "height": 500,
                                "media_type": "image",
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577.jpg?v=1581070726",
                                "width": 500
                            }, {
                                "alt": null,
                                "id": 6046947672164,
                                "position": 2,
                                "preview_image": {
                                    "aspect_ratio": 1.0,
                                    "height": 500,
                                    "width": 500,
                                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006895.jpg?v=1581070726"
                                },
                                "aspect_ratio": 1.0,
                                "height": 500,
                                "media_type": "image",
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006895.jpg?v=1581070726",
                                "width": 500
                            }, {
                                "alt": null,
                                "id": 6046947704932,
                                "position": 3,
                                "preview_image": {
                                    "aspect_ratio": 1.0,
                                    "height": 500,
                                    "width": 500,
                                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006896.jpg?v=1581070726"
                                },
                                "aspect_ratio": 1.0,
                                "height": 500,
                                "media_type": "image",
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006896.jpg?v=1581070726",
                                "width": 500
                            }, {
                                "alt": null,
                                "id": 6046947737700,
                                "position": 4,
                                "preview_image": {
                                    "aspect_ratio": 1.0,
                                    "height": 500,
                                    "width": 500,
                                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006897.jpg?v=1581070726"
                                },
                                "aspect_ratio": 1.0,
                                "height": 500,
                                "media_type": "image",
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006897.jpg?v=1581070726",
                                "width": 500
                            }, {
                                "alt": null,
                                "id": 6046947770468,
                                "position": 5,
                                "preview_image": {
                                    "aspect_ratio": 1.0,
                                    "height": 500,
                                    "width": 500,
                                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006898.jpg?v=1581070726"
                                },
                                "aspect_ratio": 1.0,
                                "height": 500,
                                "media_type": "image",
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006898.jpg?v=1581070726",
                                "width": 500
                            }, {
                                "alt": null,
                                "id": 6046947803236,
                                "position": 6,
                                "preview_image": {
                                    "aspect_ratio": 1.0,
                                    "height": 500,
                                    "width": 500,
                                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006899.jpg?v=1581070726"
                                },
                                "aspect_ratio": 1.0,
                                "height": 500,
                                "media_type": "image",
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006899.jpg?v=1581070726",
                                "width": 500
                            }],
                            "content": "\u003cspan style=\"font-size:14px;\"\u003e\u003cstrong\u003eSpecification:\u003c\/strong\u003eBrand: AONIJIEMaterial: Lycra(DWR waterproof treatment)Webbing Material: PolyesterGender: UnisexSize: S(4.7 inch), M(5.5 inch)Waistline: 65-150cm(S), 70-160cm(L)Color: Black, Rose, Green, BlueWeight: About 75g(S), 85g(L)Use: Marathon, Running, Jogging, Walking, Racing etc.\u003cstrong\u003eFeatures:\u003c\/strong\u003e4.7\" is suit for cell phone screen under 4.7 inch; 5.5\" for cell phone screen under 6 inch.Lightweight and practical, convenient to carry.Touch screen design, easy for operation during sports.Elastic lycra fabric, soft, water resistant, breathable and wicking.Reflective viewing frame, reflect light and safer for night running.\u003cstrong\u003ePacakge Included:\u003c\/strong\u003e1 x AONIJIE Sports Waist Belt Bag\u003c\/span\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cspan style=\"color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; line-height: 18.2px;\"\u003e  \u003c\/span\u003e"
                        },
                        onVariantSelected: selectCallback,
                        enableHistoryState: true
                    });




                    Shopify.linkOptionSelectors({
                        "id": 4420396220516,
                        "title": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running",
                        "handle": "c122-1113577-aonijie-sports-waist-belt-bag-pack-4755-inch-touch-screen-phone-case-holder-marathon-running",
                        "description": "\u003cspan style=\"font-size:14px;\"\u003e\u003cstrong\u003eSpecification:\u003c\/strong\u003eBrand: AONIJIEMaterial: Lycra(DWR waterproof treatment)Webbing Material: PolyesterGender: UnisexSize: S(4.7 inch), M(5.5 inch)Waistline: 65-150cm(S), 70-160cm(L)Color: Black, Rose, Green, BlueWeight: About 75g(S), 85g(L)Use: Marathon, Running, Jogging, Walking, Racing etc.\u003cstrong\u003eFeatures:\u003c\/strong\u003e4.7\" is suit for cell phone screen under 4.7 inch; 5.5\" for cell phone screen under 6 inch.Lightweight and practical, convenient to carry.Touch screen design, easy for operation during sports.Elastic lycra fabric, soft, water resistant, breathable and wicking.Reflective viewing frame, reflect light and safer for night running.\u003cstrong\u003ePacakge Included:\u003c\/strong\u003e1 x AONIJIE Sports Waist Belt Bag\u003c\/span\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cspan style=\"color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; line-height: 18.2px;\"\u003e  \u003c\/span\u003e",
                        "published_at": "2020-02-07T05:18:38-05:00",
                        "created_at": "2020-02-07T05:18:46-05:00",
                        "vendor": "Sports Wear",
                        "type": "Sale",
                        "tags": ["sale"],
                        "price": 1238,
                        "price_min": 1238,
                        "price_max": 1238,
                        "available": true,
                        "price_varies": false,
                        "compare_at_price": 0,
                        "compare_at_price_min": 0,
                        "compare_at_price_max": 0,
                        "compare_at_price_varies": false,
                        "variants": [{
                            "id": 31481037848676,
                            "title": "BLACK \/ L",
                            "option1": "BLACK",
                            "option2": "L",
                            "option3": null,
                            "sku": "eb74a1cdbdf3c9a5b710cdc18990e6de",
                            "requires_shipping": true,
                            "taxable": true,
                            "featured_image": null,
                            "available": true,
                            "name": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running - BLACK \/ L",
                            "public_title": "BLACK \/ L",
                            "options": ["BLACK", "L"],
                            "price": 1238,
                            "weight": 95,
                            "compare_at_price": 0,
                            "inventory_management": null,
                            "barcode": ""
                        }, {
                            "id": 31481037881444,
                            "title": "GREEN \/ L",
                            "option1": "GREEN",
                            "option2": "L",
                            "option3": null,
                            "sku": "a3745a11f847f851805f8321744bd9d6",
                            "requires_shipping": true,
                            "taxable": true,
                            "featured_image": null,
                            "available": true,
                            "name": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running - GREEN \/ L",
                            "public_title": "GREEN \/ L",
                            "options": ["GREEN", "L"],
                            "price": 1238,
                            "weight": 95,
                            "compare_at_price": 0,
                            "inventory_management": null,
                            "barcode": ""
                        }, {
                            "id": 31481037914212,
                            "title": "ROSE \/ L",
                            "option1": "ROSE",
                            "option2": "L",
                            "option3": null,
                            "sku": "8cada67917f0ce05519333233dec7a63",
                            "requires_shipping": true,
                            "taxable": true,
                            "featured_image": null,
                            "available": true,
                            "name": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running - ROSE \/ L",
                            "public_title": "ROSE \/ L",
                            "options": ["ROSE", "L"],
                            "price": 1238,
                            "weight": 95,
                            "compare_at_price": 0,
                            "inventory_management": null,
                            "barcode": ""
                        }, {
                            "id": 31481037946980,
                            "title": "BLUE \/ L",
                            "option1": "BLUE",
                            "option2": "L",
                            "option3": null,
                            "sku": "6bcd55696c6a1d29e403b505976fd2d8",
                            "requires_shipping": true,
                            "taxable": true,
                            "featured_image": null,
                            "available": true,
                            "name": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running - BLUE \/ L",
                            "public_title": "BLUE \/ L",
                            "options": ["BLUE", "L"],
                            "price": 1238,
                            "weight": 95,
                            "compare_at_price": 0,
                            "inventory_management": null,
                            "barcode": ""
                        }, {
                            "id": 31481037979748,
                            "title": "BLACK \/ S",
                            "option1": "BLACK",
                            "option2": "S",
                            "option3": null,
                            "sku": "26b8d158e610b2e25cb5c1e401644de9",
                            "requires_shipping": true,
                            "taxable": true,
                            "featured_image": null,
                            "available": true,
                            "name": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running - BLACK \/ S",
                            "public_title": "BLACK \/ S",
                            "options": ["BLACK", "S"],
                            "price": 1238,
                            "weight": 95,
                            "compare_at_price": 0,
                            "inventory_management": null,
                            "barcode": ""
                        }, {
                            "id": 31481038012516,
                            "title": "GREEN \/ S",
                            "option1": "GREEN",
                            "option2": "S",
                            "option3": null,
                            "sku": "6d73b3286b8a09bc218c2a71120d3243",
                            "requires_shipping": true,
                            "taxable": true,
                            "featured_image": null,
                            "available": true,
                            "name": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running - GREEN \/ S",
                            "public_title": "GREEN \/ S",
                            "options": ["GREEN", "S"],
                            "price": 1238,
                            "weight": 95,
                            "compare_at_price": 0,
                            "inventory_management": null,
                            "barcode": ""
                        }, {
                            "id": 31481038045284,
                            "title": "ROSE \/ S",
                            "option1": "ROSE",
                            "option2": "S",
                            "option3": null,
                            "sku": "b511bede080f81ffe53c0fe9c886654c",
                            "requires_shipping": true,
                            "taxable": true,
                            "featured_image": null,
                            "available": true,
                            "name": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running - ROSE \/ S",
                            "public_title": "ROSE \/ S",
                            "options": ["ROSE", "S"],
                            "price": 1238,
                            "weight": 95,
                            "compare_at_price": 0,
                            "inventory_management": null,
                            "barcode": ""
                        }, {
                            "id": 31481038078052,
                            "title": "BLUE \/ S",
                            "option1": "BLUE",
                            "option2": "S",
                            "option3": null,
                            "sku": "8c888012e4b4d388ed09e613bab14697",
                            "requires_shipping": true,
                            "taxable": true,
                            "featured_image": null,
                            "available": true,
                            "name": "AONIJIE Sports Waist Belt Bag Pack 4.7\/5.5 Inch Touch Screen Phone Case Holder Marathon Running - BLUE \/ S",
                            "public_title": "BLUE \/ S",
                            "options": ["BLUE", "S"],
                            "price": 1238,
                            "weight": 95,
                            "compare_at_price": 0,
                            "inventory_management": null,
                            "barcode": ""
                        }],
                        "images": [
                            "\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577.jpg?v=1581070726",
                            "\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006895.jpg?v=1581070726",
                            "\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006896.jpg?v=1581070726",
                            "\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006897.jpg?v=1581070726",
                            "\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006898.jpg?v=1581070726",
                            "\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006899.jpg?v=1581070726"
                        ],
                        "featured_image": "\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577.jpg?v=1581070726",
                        "options": ["COLOR", "SIZE"],
                        "media": [{
                            "alt": null,
                            "id": 6046947639396,
                            "position": 1,
                            "preview_image": {
                                "aspect_ratio": 1.0,
                                "height": 500,
                                "width": 500,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577.jpg?v=1581070726"
                            },
                            "aspect_ratio": 1.0,
                            "height": 500,
                            "media_type": "image",
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577.jpg?v=1581070726",
                            "width": 500
                        }, {
                            "alt": null,
                            "id": 6046947672164,
                            "position": 2,
                            "preview_image": {
                                "aspect_ratio": 1.0,
                                "height": 500,
                                "width": 500,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006895.jpg?v=1581070726"
                            },
                            "aspect_ratio": 1.0,
                            "height": 500,
                            "media_type": "image",
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006895.jpg?v=1581070726",
                            "width": 500
                        }, {
                            "alt": null,
                            "id": 6046947704932,
                            "position": 3,
                            "preview_image": {
                                "aspect_ratio": 1.0,
                                "height": 500,
                                "width": 500,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006896.jpg?v=1581070726"
                            },
                            "aspect_ratio": 1.0,
                            "height": 500,
                            "media_type": "image",
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006896.jpg?v=1581070726",
                            "width": 500
                        }, {
                            "alt": null,
                            "id": 6046947737700,
                            "position": 4,
                            "preview_image": {
                                "aspect_ratio": 1.0,
                                "height": 500,
                                "width": 500,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006897.jpg?v=1581070726"
                            },
                            "aspect_ratio": 1.0,
                            "height": 500,
                            "media_type": "image",
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006897.jpg?v=1581070726",
                            "width": 500
                        }, {
                            "alt": null,
                            "id": 6046947770468,
                            "position": 5,
                            "preview_image": {
                                "aspect_ratio": 1.0,
                                "height": 500,
                                "width": 500,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006898.jpg?v=1581070726"
                            },
                            "aspect_ratio": 1.0,
                            "height": 500,
                            "media_type": "image",
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006898.jpg?v=1581070726",
                            "width": 500
                        }, {
                            "alt": null,
                            "id": 6046947803236,
                            "position": 6,
                            "preview_image": {
                                "aspect_ratio": 1.0,
                                "height": 500,
                                "width": 500,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006899.jpg?v=1581070726"
                            },
                            "aspect_ratio": 1.0,
                            "height": 500,
                            "media_type": "image",
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0145\/2942\/9604\/products\/1113577_27006899.jpg?v=1581070726",
                            "width": 500
                        }],
                        "content": "\u003cspan style=\"font-size:14px;\"\u003e\u003cstrong\u003eSpecification:\u003c\/strong\u003eBrand: AONIJIEMaterial: Lycra(DWR waterproof treatment)Webbing Material: PolyesterGender: UnisexSize: S(4.7 inch), M(5.5 inch)Waistline: 65-150cm(S), 70-160cm(L)Color: Black, Rose, Green, BlueWeight: About 75g(S), 85g(L)Use: Marathon, Running, Jogging, Walking, Racing etc.\u003cstrong\u003eFeatures:\u003c\/strong\u003e4.7\" is suit for cell phone screen under 4.7 inch; 5.5\" for cell phone screen under 6 inch.Lightweight and practical, convenient to carry.Touch screen design, easy for operation during sports.Elastic lycra fabric, soft, water resistant, breathable and wicking.Reflective viewing frame, reflect light and safer for night running.\u003cstrong\u003ePacakge Included:\u003c\/strong\u003e1 x AONIJIE Sports Waist Belt Bag\u003c\/span\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cdiv style=\"text-align: center;\"\u003e\u003c\/div\u003e\u003cspan style=\"color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; line-height: 18.2px;\"\u003e  \u003c\/span\u003e"
                    });



                    // Add label if only one product option and it isn't 'Title'. Could be 'Size'.

                    // Hide selectors if we only have 1 variant and its title contains 'Default'.


                    // Auto-select first available variant on page load. Otherwise the product looks sold out.





                    $('.single-option-selector:eq(0)').val("BLACK").trigger('change');

                    $('.single-option-selector:eq(1)').val("L").trigger('change');



















                    $('.product-single .single-option-selector').wrap('<div class="selector-arrow">');



                });
                </script>
            </div>

        </div>


    </main>

</div>

<?php endif; ?>

<?php include_once('../includes/footer.php'); ?>