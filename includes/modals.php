<!-- Begin quick-view-template -->
<div class="clearfix" id="quickview-template" style="display:none">
    <div class="overlay"></div>
    <div class="content clearfix">
        <div class="product-img images">
            <div class="quickview-featured-image product-photo-container"></div>
            <div class="more-view-wrapper">
                <ul class="product-photo-thumbs quickview-more-views-owlslider owl-carousel owl-theme">
                </ul>
                <div class="quick-view-carousel"></div>
            </div>
        </div>
        <div class="product-shop summary">
            <div class="product-item product-detail-section">
                <h2 class="product-title"><a>&nbsp;</a></h2>
                <p class="item-text product-description"></p>
                <div class="prices product_price">
                    <label>Effective Price :</label>
                    <span class="price h2" id="QProductPrice"></span>
                    <span class="compare-price" id="QComparePrice"></span>
                </div>

                <div class="product-infor">
                    <p class="product-inventory"><label>Availability :</label><span></span></p>
                </div>

                <div class="details clearfix">
                    <form action="/cart/add" method="post" class="variants">
                        <select name="id" style="display:none"></select>
                        <div class="qty-section quantity-box">
                            <label>Quantity :</label>
                            <div class="dec button qtyminus">-</div>
                            <input type="number" name="quantity" id="Qty" value="1" class="quantity">
                            <div class="inc button qtyplus">+</div>
                        </div>


                        <div class="total-price">
                            <label>Subtotal :</label><span class="h5"></span>
                        </div>

                        <div class="actions">
                            <button type="button" class="add-to-cart-btn btn">
                                Add to Cart
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <a href="javascript:void(0)" class="close-window"></a>
    </div>

</div>
<!-- End of quick-view-template -->
<script type="text/javascript">
Shopify.doNotTriggerClickOnThumb = false;

var selectCallbackQuickview = function(variant, selector) {
    var productItem = jQuery('.quick-view .product-item');
    addToCart = productItem.find('.add-to-cart-btn'),
        productPrice = productItem.find('.price'),
        comparePrice = productItem.find('.compare-price'),
        totalPrice = productItem.find('.total-price span'),
        inventory = productItem.find('.product-inventory');
    if (variant) {
        if (variant.available) {
            // We have a valid product variant, so enable the submit button
            addToCart.removeClass('disabled').removeAttr('disabled').text('Add to Cart');

        } else {
            // Variant is sold out, disable the submit button
            addToCart.val('Sold Out').addClass('disabled').attr('disabled', 'disabled');
        }

        // Regardless of stock, update the product price
        productPrice.html(Shopify.formatMoney(variant.price, "${{ amount }}"));

        // Also update and show the product's compare price if necessary
        if (variant.compare_at_price > variant.price) {
            comparePrice
                .html(Shopify.formatMoney(variant.compare_at_price, "${{ amount }}"))
                .show();
            productPrice.addClass('on-sale');
        } else {
            comparePrice.hide();
            productPrice.removeClass('on-sale');
        }



        //update variant inventory

        var inventoryInfo = productItem.find('.product-inventory span');
        if (variant.available) {
            if (variant.inventory_management != null) {
                inventoryInfo.text(window.in_stock);
                inventoryInfo.addClass('items-count');
                inventoryInfo.removeClass('many-in-stock');
                inventoryInfo.removeClass('out-of-stock');
                inventoryInfo.removeClass('unavailable');
            } else {
                inventoryInfo.text(window.many_in_stock);
                inventoryInfo.addClass('many-in-stock')
                inventoryInfo.removeClass('items-count');
                inventoryInfo.removeClass('out-of-stock');
                inventoryInfo.removeClass('unavailable');
            }
        } else {
            inventoryInfo.addClass('out-of-stock')
            inventoryInfo.text(window.out_of_stock);
            inventoryInfo.removeClass('items-count');
            inventoryInfo.removeClass('many-in-stock');
            inventoryInfo.removeClass('unavailable');
        }



        /*recaculate total price*/
        //try pattern one before pattern 2
        var regex = /([0-9]+[.|,][0-9]+[.|,][0-9]+)/g;
        var unitPriceTextMatch = jQuery('.quick-view .price').text().match(regex);

        if (!unitPriceTextMatch) {
            regex = /([0-9]+[.|,][0-9]+)/g;
            unitPriceTextMatch = jQuery('.quick-view .price').text().match(regex);
        }

        if (unitPriceTextMatch) {
            var unitPriceText = unitPriceTextMatch[0];
            var unitPrice = unitPriceText.replace(/[.|,]/g, '');
            var quantity = parseInt(jQuery('.quick-view input[name=quantity]').val());
            var totalPrice = unitPrice * quantity;

            var totalPriceText = Shopify.formatMoney(totalPrice, window.money_format);
            regex = /([0-9]+[.|,][0-9]+[.|,][0-9]+)/g;
            if (!totalPriceText.match(regex)) {
                regex = /([0-9]+[.|,][0-9]+)/g;
            }
            totalPriceText = totalPriceText.match(regex)[0];

            var regInput = new RegExp(unitPriceText, "g");
            var totalPriceHtml = jQuery('.quick-view .price').html().replace(regInput, totalPriceText);
            jQuery('.quick-view .total-price span').html(totalPriceHtml);
        }
        /*end of price calculation*/



        Currency.convertAll('USD', jQuery('#currencies').val(), 'span.money', 'money_format');


        /*begin variant image*/
        /*begin variant image*/
        if (variant && variant.featured_image) {
            var originalImage = jQuery(".quick-view .quickview-featured-image img");
            var newImage = variant.featured_image;
            var element = originalImage[0];
            Shopify.Image.switchImage(newImage, element, function(newImageSizedSrc, newImage, element) {
                newImageSizedSrc = newImageSizedSrc.replace(/\?(.*)/, "");
                jQuery('.quick-view .more-view-wrapper img').each(function() {
                    var grandSize = jQuery(this).attr('src');
                    grandSize = grandSize.replace('medium', 'grande');

                    if (grandSize == newImageSizedSrc) {
                        jQuery(this).parent().trigger('click');
                        return false;
                    }
                });
            });
        }
        /*end of variant image*/
        /*end of variant image*/
    } else {
        // The variant doesn't exist. Just a safegaurd for errors, but disable the submit button anyway
        addToCart.text('Unavailable').addClass('disabled').attr('disabled', 'disabled');


        var inventoryInfo = productItem.find('.product-inventory span');
        inventoryInfo.addClass("unavailable");
        inventoryInfo.removeClass("many-in-stock");
        inventoryInfo.removeClass("items-count");
        inventoryInfo.removeClass("out-of-stock");
        inventoryInfo.text(window.unavailable);

    }
};
</script>

<div class="loading-modal compare_modal">Loading</div>
<div class="ajax-success-compare-modal compare_modal" id="moda-compare" tabindex="-1" role="dialog"
    style="display:none">
    <div class="overlay"> </div>
    <div class="modal-dialog modal-lg">
        <div class="modal-content content" id="compare-modal">
            <div class="modal-header">

                <h4 class="modal-title">Compare Products</h4>
            </div>
            <div class="modal-body">
                <div class="table-wrapper">
                    <div class="table-wrapper">
                        <table class="table table-hover">
                            <thead>
                                <tr class="th-compare">
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="table-compare">

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="close-modal"><i class="zmdi zmdi-close-circle"></i></a>
            </div>
        </div>
    </div>
</div>


<div class="loading-modal modal">Loading</div>
<div class="ajax-error-modal modal">
    <div class="modal-inner">
        <div class="ajax-error-title">Error</div>
        <div class="ajax-error-message"></div>
    </div>
</div>
<div class="ajax-success-modal modal">
    <div class="overlay"></div>
    <div class="content">


        <div class="ajax-left">
            <p class="added-to-cart info">Product successfully added to your shopping cart</p>
            <p class="added-to-wishlist info">translation missing: en.products.wishlist.added_to_wishlist</p>
            <img class="ajax-product-image" alt="modal window" src="/">
            <div class="ajax-cart-desc">
                <h3 class="ajax-product-title"></h3>
                <span class="ajax_price"></span>
                <p>Qty:&nbsp;<span class="ajax_qty"></span></p>
            </div>
        </div>
        <div class="ajax-right">

            <p>There are <span class="ajax_cartCount"></span>&nbsp;item(s) in your cart</p>
            <span class="ajax_cartTotal"></span>
            <button class="btn continue-shopping" onclick="javascript:void(0)">Continue shopping</button>
            <div class="success-message added-to-cart"><a href="/cart" class="btn"><i
                        class="fa fa-shopping-cart"></i>View
                    Cart</a> </div>
            <!--  <div class="success-message added-to-wishlist"> <a href="/pages/wishlist" class="btn"><i class="fa fa-heart"></i>View Wishlist</a></div>                -->
        </div>
        <a href="javascript:void(0)" class="close-modal"><i class="fa fa-times-circle"></i></a>
    </div>
</div>

<script src="//cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0145/2942/9604/t/2/assets/jquery.currencies.min.js?v=17505776077200662322"
    type="text/javascript"></script>

<script>
// Pick your format here:  
// Can be 'money_format' or 'money_with_currency_format'
Currency.format = 'money_format';
var shopCurrency = 'USD';

/* Sometimes merchants change their shop currency, let's tell our JavaScript file */
Currency.moneyFormats[shopCurrency].money_with_currency_format = "${{ amount }} USD";
Currency.moneyFormats[shopCurrency].money_format = "${{ amount }}";

var cookieCurrency = Currency.cookie.read();

// Fix for customer account pages 
jQuery('span.money span.money').each(function() {
    jQuery(this).parent('span.money').removeClass('money');
});

// Add precalculated shop currency to data attribute 
jQuery('span.money').each(function() {
    jQuery(this).attr('data-currency-USD', jQuery(this).html());
});

// Select all your currencies buttons.
var currencySwitcher = jQuery('#currencies');

// When the page loads.
if (cookieCurrency == null || cookieCurrency == shopCurrency) {
    Currency.currentCurrency = shopCurrency;
} else {
    Currency.currentCurrency = cookieCurrency;
    currencySwitcher.val(cookieCurrency);
    Currency.convertAll(shopCurrency, cookieCurrency);
}
//currencySwitcher.selectize();
jQuery('.selectize-input input').attr('disabled', 'disabled');

// When customer clicks on a currency switcher.
currencySwitcher.change(function() {
    var newCurrency = jQuery(this).val();
    Currency.cookie.write(newCurrency);
    Currency.convertAll(Currency.currentCurrency, newCurrency);
    //show modal
    jQuery("#currencies-modal span").text(newCurrency);
    if (jQuery("#cart-currency").length > 0) {
        jQuery("#cart-currency").text(newCurrency);
    }
    jQuery("#currencies-modal").fadeIn(500).delay(3000).fadeOut(500);
});

// For product options.
var original_selectCallback = window.selectCallback;
var selectCallback = function(variant, selector) {
    original_selectCallback(variant, selector);
    Currency.convertAll(shopCurrency, jQuery('#currencies').val());
};
</script>


<script type="text/javascript">
// <![CDATA[
jQuery(document).ready(function() { //
    var $modalParent = jQuery('div.newsletterwrapper'),
        modalWindow = jQuery('#email-modal'),
        emailModal = jQuery('#email-modal'),
        modalPageURL = window.location.pathname;

    modalWindow = modalWindow.html();
    modalWindow = '<div id="email-modal">' + modalWindow + '</div>';
    $modalParent.css({
        'position': 'relative'
    });
    jQuery('.wrapper #email-modal').remove();
    $modalParent.append(modalWindow);

    if (jQuery.cookie('emailSubcribeModal') != 'closed') {
        openEmailModalWindow();
    };

    jQuery('#email-modal .btn.close').click(function(e) {
        e.preventDefault();
        closeEmailModalWindow();
    });
    jQuery('body').keydown(function(e) {
        if (e.which == 27) {
            closeEmailModalWindow();
            jQuery('body').unbind('keydown');
        }
    });
    jQuery('#mc_embed_signup form').submit(function() {
        if (jQuery('#mc_embed_signup .email').val() != '') {
            closeEmailModalWindow();
        }
    });

    function closeEmailModalWindow() {
        jQuery('#email-modal .modal-window').fadeOut(600, function() {
            jQuery('#email-modal .modal-overlay').fadeOut(600, function() {
                jQuery('#email-modal').hide();
                jQuery.cookie('emailSubcribeModal', 'closed', {
                    expires: 1,
                    path: '/'
                });
            });
        })
    }

    function openEmailModalWindow() {
        jQuery('#email-modal').fadeIn(600, function() {
            jQuery('#email-modal .modal-window').fadeIn(600);
        });
    }

});
// ]]
// ]]>
</script>
<div class="newsletterwrapper" style="position: relative;">
    <div id="email-modal" style="display: none;">
        <div class="modal-overlay"></div>
        <div class="modal-window" style="display: none;">
            <div class="window-window">
                <a class="btn close" title="Close Window"></a>




                <div class="window-content">
                    <div class="newsletter-title">
                        <h2 class="title">Get to know the latest offers</h2>
                    </div>
                    <p class="message">Subscribe and get notified at first on the latest update and offers!</p>
                    <div id="mailchimp-email-subscibe">
                        <div id="mc_embed_signup">


                            <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8"
                                class="contact-form"><input type="hidden" name="form_type" value="customer"><input
                                    type="hidden" name="utf8" value="✓">


                                <input type="email" value="" placeholder="Email address" name="contact[email]"
                                    class="mail" aria-label="Email address">
                                <input type="hidden" name="contact[tags]" value="newsletter">
                                <button type="submit" class="btn" name="subscribe" value="" id="subscribe">Send</button>



                            </form>

                        </div>
                        <span>We do not spam</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="email-modal">
        <div class="modal-overlay"></div>
        <div class="modal-window" style="display: none;">
            <div class="window-window">
                <a class="btn close" title="Close Window"></a>




                <div class="window-content">
                    <div class="newsletter-title">
                        <h2 class="title">Get to know the latest offers</h2>
                    </div>
                    <p class="message">Subscribe and get notified at first on the latest update and offers!</p>
                    <div id="mailchimp-email-subscibe">
                        <div id="mc_embed_signup">


                            <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8"
                                class="contact-form"><input type="hidden" name="form_type" value="customer"><input
                                    type="hidden" name="utf8" value="✓">


                                <input type="email" value="" placeholder="Email address" name="contact[email]"
                                    class="mail" aria-label="Email address">
                                <input type="hidden" name="contact[tags]" value="newsletter">
                                <button type="submit" class="btn" name="subscribe" value="" id="subscribe">Send</button>



                            </form>

                        </div>
                        <span>We do not spam</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<script src="//cdn.shopify.com/s/files/1/0145/2942/9604/t/2/assets/wow.js?v=8607965041847799793" type="text/javascript">
</script>





<script type="text/javascript">
$('.quick-view .close-window').click(function() {
    $('.quick-view').switchClass("open-in", "open-out");
});
</script>

<script>
$('.qtyplus').click(function(e) {
    e.preventDefault();
    var currentVal = parseInt($('input[name="quantity"]').val());
    if (!isNaN(currentVal)) {
        $('input[name="quantity"]').val(currentVal + 1);
    } else {
        $('input[name="quantity"]').val(1);
    }

});

$(".qtyminus").click(function(e) {

    e.preventDefault();
    var currentVal = parseInt($('input[name="quantity"]').val());
    if (!isNaN(currentVal) && currentVal > 0) {
        $('input[name="quantity"]').val(currentVal - 1);
    } else {
        $('input[name="quantity"]').val(1);
    }

});
</script>





<!-- End Recently Viewed Products -->


<script src="//cdn.shopify.com/s/files/1/0145/2942/9604/t/2/assets/magnific-popup.js?v=14308366903927063490"
    type="text/javascript"></script>
<script type="text/javascript">
if ($('.p-video').length > 0) {
    $('.jas-popup-url').magnificPopup({
        disableOn: 0,
        tLoading: '<div class="loader"><div class="loader-inner"></div></div>',
        type: 'iframe'
    });
}
</script>


<style type="text/css">
.bottom-products-suggest {
    background-color: #fff;
    border: 0;
    border-radius: 0;
    padding: 0;
    display: block;
    position: fixed;
    text-align: left;
    width: auto;
    min-width: 250px;
    left: 35px;
    bottom: 25px;
    z-index: 1000;
}

.bottom-products-suggest .product-short-suggest .product-thumb img {
    max-width: 50px;
}

.bottom-products-suggest .product-short-suggest {
    overflow: hidden;
    padding: 10px;
    background-color: #fff;
    border: 2px solid #efefef;
}

.bottom-products-suggest .product-short-suggest .product-thumb {
    float: right;
    margin-left: 10px;
}

.bottom-products-suggest .product-short-suggest .product-title {
    display: block;
    margin-bottom: 7px;
    font-weight: 500;
    font-size: 11px;
    line-height: 1.5;
    text-transform: uppercase;
}

.bottom-products-suggest .product-short-suggest .price del {
    color: #D0D0D0;
}
</style>





<div id="cboxOverlay" style="display: none;"></div>
<div id="colorbox" class="" style="display: none;">
    <div id="cboxWrapper">
        <div>
            <div id="cboxTopLeft" style="float: left;"></div>
            <div id="cboxTopCenter" style="float: left;"></div>
            <div id="cboxTopRight" style="float: left;"></div>
        </div>
        <div style="clear: left;">
            <div id="cboxMiddleLeft" style="float: left;"></div>
            <div id="cboxContent" style="float: left;">
                <div id="cboxTitle" style="float: left;"></div>
                <div id="cboxCurrent" style="float: left;"></div>
                <div id="cboxNext" style="float: left;"></div>
                <div id="cboxPrevious" style="float: left;"></div>
                <div id="cboxSlideshow" style="float: left;"></div>
                <div id="cboxClose" style="float: left;"></div>
            </div>
            <div id="cboxMiddleRight" style="float: left;"></div>
        </div>
        <div style="clear: left;">
            <div id="cboxBottomLeft" style="float: left;"></div>
            <div id="cboxBottomCenter" style="float: left;"></div>
            <div id="cboxBottomRight" style="float: left;"></div>
        </div>
    </div>
    <div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div>
</div>
<div id="fancybox-tmp"></div>
<div id="fancybox-loading">
    <div></div>
</div>
<div id="fancybox-overlay"></div>
<div id="fancybox-wrap">
    <div id="fancybox-outer">
        <div class="fancy-bg" id="fancy-bg-n"></div>
        <div class="fancy-bg" id="fancy-bg-ne"></div>
        <div class="fancy-bg" id="fancy-bg-e"></div>
        <div class="fancy-bg" id="fancy-bg-se"></div>
        <div class="fancy-bg" id="fancy-bg-s"></div>
        <div class="fancy-bg" id="fancy-bg-sw"></div>
        <div class="fancy-bg" id="fancy-bg-w"></div>
        <div class="fancy-bg" id="fancy-bg-nw"></div>
        <div id="fancybox-inner"></div><a id="fancybox-close"></a><a href="javascript:;" id="fancybox-left"><span
                class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span
                class="fancy-ico" id="fancybox-right-ico"></span></a>
    </div>
</div><a href="#" id="toTop" style="display: none;"><span id="toTopHover"></span><i class="fa fa-long-arrow-up"></i></a>