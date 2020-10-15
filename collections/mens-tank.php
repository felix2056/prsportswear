<?php include_once('../includes/header.php'); ?>

<?php require_once('../products/db/menwear_cat.php'); ?>


<?php
    $products = json_decode(getAllMentanks(), true);
?>

<div class="wrapper-container">

    <?php include_once('../includes/nav.php'); ?>

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <h1>Men tanks</h1>

        <a href="/" title="Back to the frontpage">Home</a>

        <span aria-hidden="true" class="breadcrumb__sep">/</span>
        <span>Men tanks</span>
    </nav>

    <div class="dt-sc-hr-invisible-large"></div>

    <main class="main-content ">
        <div class="wrapper">
            <div class="grid__item">
                <div class="grid__item">
                    <div class="collection-products">
                        <div class="grid__item sidebar-hidden">
                            <div class="collection-list">
                                <div class="grid-uniform grid-link__container col-main">
                                    <header class="section-header section-header--large">
                                        <div class="toolbar">

                                            <div
                                                class="view-mode grid__item wide--one-third post-large--two-tenths large--two-tenths">

                                                <div class="tags-filter">
                                                    <button id="showTagsFilter" class="btn tag-fillter">Filter <i
                                                            class="fa fa-angle-up"></i></button>
                                                </div>

                                                <a class="grid btn active" href="grid" title="Grid view"><span
                                                        class="fa fa-th-large" aria-hidden="true"></span></a>
                                                <a class="list btn" href="list" title="List view"><span
                                                        class="fa fa-th-list" aria-hidden="true"></span></a>
                                            </div>

                                            <div
                                                class="grid__item wide--five-tenths post-large--eight-tenths large--eight-tenths right">

                                                <div
                                                    class="filter-sortby grid__item  wide--six-tenths post-large--six-tenths large--six-tenths  ">
                                                    <label for="sort-by">Sort by</label>
                                                    <input type="text" id="sort-by">
                                                    <div class="sorting-section">
                                                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-exchange"></i>
                                                            <span>Featured</span>
                                                            <i class="icon-chevron-down"></i>
                                                        </button>

                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="active"><a href="manual">Featured</a></li>
                                                            <li><a href="price-ascending">Price, low to high</a></li>
                                                            <li><a href="price-descending">Price, high to low</a></li>
                                                            <li><a href="title-ascending"> A-Z</a></li>
                                                            <li><a href="title-descending">Z-A</a></li>
                                                            <li><a href="created-ascending">Date, old to new</a></li>
                                                            <li><a href="created-descending">Date, new to old</a></li>
                                                            <li><a href="best-selling">Best Selling</a></li>
                                                        </ul>
                                                    </div>
                                                </div>



                                                <div
                                                    class="filter-show grid__item wide--four-tenths post-large--four-tenths large--four-tenths">
                                                    <label>Show</label>
                                                    <div class="pages_list">
                                                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-exchange"></i>

                                                            <span>12</span>

                                                            <i class="icon-chevron-down"></i>
                                                        </button>

                                                        <ul class="dropdown-menu" role="menu">



                                                            <li><a href="8">8</a></li>
                                                            <li class="active"><a href="12">12</a></li>
                                                            <li><a href="24">24</a></li>
                                                            <li><a href="36">36</a></li>
                                                            <li><a href="all">All</a></li>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                    </header>


                                    <div id="tags-filter-content" class="tags-closed">
                                        <div class="collection_sidebar">
                                            <div class="refined-widgets">
                                                <a href="javascript:void(0)" class="clear-all" style="display:none">
                                                    Clear All
                                                </a>
                                            </div>
                                            <div class="sidebar-block">
                                                <div id="shopify-section-sidebar-colors" class="shopify-section">


                                                    <aside class="sidebar-tag color filter tags">
                                                        <div class="widget">
                                                            <h4>
                                                                <span>Shop By Color</span>
                                                                <a href="javascript:void(0)" class="clear"
                                                                    style="display:none">
                                                                    <i class="zmdi zmdi-close"></i>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="widget-content">
                                                            <ul>





                                                                <li class="red">

                                                                    <input type="checkbox" value="red">
                                                                    <a href="javascript:void(0)" title="Red">
                                                                        <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                            alt="Red">
                                                                        <span>Red</span>
                                                                    </a>
                                                                </li>







                                                                <li class="yellow">

                                                                    <input type="checkbox" value="yellow">
                                                                    <a href="javascript:void(0)" title="Yellow">
                                                                        <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                            alt="Yellow">
                                                                        <span>Yellow</span>
                                                                    </a>
                                                                </li>







                                                                <li class="orange">

                                                                    <input type="checkbox" value="orange">
                                                                    <a href="javascript:void(0)" title="Orange">
                                                                        <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                            alt="Orange">
                                                                        <span>Orange</span>
                                                                    </a>
                                                                </li>







                                                                <li class="black">

                                                                    <input type="checkbox" value="black">
                                                                    <a href="javascript:void(0)" title="Black">
                                                                        <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                            alt="Black">
                                                                        <span>Black</span>
                                                                    </a>
                                                                </li>







                                                                <li class="pink">

                                                                    <input type="checkbox" value="pink">
                                                                    <a href="javascript:void(0)" title="Pink">
                                                                        <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                            alt="Pink">
                                                                        <span>Pink</span>
                                                                    </a>
                                                                </li>







                                                                <li class="brown">

                                                                    <input type="checkbox" value="brown">
                                                                    <a href="javascript:void(0)" title="Brown">
                                                                        <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                            alt="Brown">
                                                                        <span>Brown</span>
                                                                    </a>
                                                                </li>







                                                                <li class="cyan">

                                                                    <input type="checkbox" value="cyan">
                                                                    <a href="javascript:void(0)" title="Cyan">
                                                                        <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                            alt="Cyan">
                                                                        <span>Cyan</span>
                                                                    </a>
                                                                </li>







                                                                <li class="gold">

                                                                    <input type="checkbox" value="gold">
                                                                    <a href="javascript:void(0)" title="Gold">
                                                                        <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                            alt="Gold">
                                                                        <span>Gold</span>
                                                                    </a>
                                                                </li>







                                                                <li class="blue">

                                                                    <input type="checkbox" value="blue">
                                                                    <a href="javascript:void(0)" title="Blue">
                                                                        <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                            alt="Blue">
                                                                        <span>Blue</span>
                                                                    </a>
                                                                </li>







                                                                <li class="sandal">

                                                                    <input type="checkbox" value="sandal">
                                                                    <a href="javascript:void(0)" title="Sandal">
                                                                        <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                            alt="Sandal">
                                                                        <span>Sandal</span>
                                                                    </a>
                                                                </li>





                                                            </ul>
                                                        </div>
                                                    </aside>









                                                </div>
                                                <div id="shopify-section-sidebar-tag-filters" class="shopify-section">



                                                    <aside class="sidebar-tag filter tags shop by size 1">

                                                        <div class="widget">
                                                            <h4>
                                                                <span>Shop By Size </span>
                                                                <a href="javascript:void(0)" class="clear"
                                                                    style="display:none">
                                                                    <i class="zmdi zmdi-close"></i>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="widget-content">
                                                            <ul>





                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="s">
                                                                    <label>S</label>
                                                                </li>






                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="m">
                                                                    <label>M</label>
                                                                </li>






                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="l">
                                                                    <label>L</label>
                                                                </li>






                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="xl">
                                                                    <label>XL</label>
                                                                </li>






                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="xxl">
                                                                    <label>XXL</label>
                                                                </li>




                                                            </ul>
                                                        </div>
                                                    </aside>





                                                    <aside class="sidebar-tag filter tags shop by brand 2">

                                                        <div class="widget">
                                                            <h4>
                                                                <span>Shop By Brand </span>
                                                                <a href="javascript:void(0)" class="clear"
                                                                    style="display:none">
                                                                    <i class="zmdi zmdi-close"></i>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="widget-content">
                                                            <ul>





                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="oneill">
                                                                    <label>O'Neill</label>
                                                                </li>






                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="rip-curl">
                                                                    <label>Rip Curl</label>
                                                                </li>






                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="romwe">
                                                                    <label>Romwe</label>
                                                                </li>






                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="forever">
                                                                    <label>Forever</label>
                                                                </li>






                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="zaful">
                                                                    <label>Zaful</label>
                                                                </li>




                                                            </ul>
                                                        </div>
                                                    </aside>





                                                    <aside class="sidebar-tag filter tags shop by price 3">

                                                        <div class="widget">
                                                            <h4>
                                                                <span>Shop By Price </span>
                                                                <a href="javascript:void(0)" class="clear"
                                                                    style="display:none">
                                                                    <i class="zmdi zmdi-close"></i>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="widget-content">
                                                            <ul>





                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="100-200">
                                                                    <label>$100 - $200</label>
                                                                </li>






                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="200-300">
                                                                    <label>$200 - $300</label>
                                                                </li>






                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="300-400">
                                                                    <label>$300 - $400</label>
                                                                </li>






                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="500-700">
                                                                    <label>$500 - $700</label>
                                                                </li>






                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="700-1000">
                                                                    <label>$700 - $1000</label>
                                                                </li>




                                                            </ul>
                                                        </div>
                                                    </aside>





                                                    <aside class="sidebar-tag filter tags shop by material 4">

                                                        <div class="widget">
                                                            <h4>
                                                                <span>Shop By Material </span>
                                                                <a href="javascript:void(0)" class="clear"
                                                                    style="display:none">
                                                                    <i class="zmdi zmdi-close"></i>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="widget-content">
                                                            <ul>





                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="synthetic">
                                                                    <label>Synthetic</label>
                                                                </li>






                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="leather">
                                                                    <label>Leather</label>
                                                                </li>






                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="denim">
                                                                    <label>Denim</label>
                                                                </li>






                                                                <li>
                                                                    <i></i>
                                                                    <input type="checkbox" value="jute-fabrics">
                                                                    <label>jute fabrics</label>
                                                                </li>




                                                            </ul>
                                                        </div>
                                                    </aside>





                                                </div>
                                            </div>


                                        </div>

                                    </div>


                                    <div class="products-grid-view">
                                        <?php if (count($products) > 0) : ?>
                                        <ul>
                                            <?php foreach ($products as $product) : ?>
                                            <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                                id="product-4420438294628">
                                                <div class="products product-hover-8">
                                                    <div class="product-container">
                                                        <a href="/products/single.php?product=<?php echo $product['id'] ?>"
                                                            class="grid-link">

                                                            <div class="ImageOverlayCa"></div>

                                                            <img src="<?php echo $product['featured_image'] ?>"
                                                                class="featured-image"
                                                                alt="<?php echo $product['title'] ?>">
                                                        </a>

                                                        <div class="product_right_tag  ">


                                                        </div>

                                                        <div class="product-button">
                                                            <a
                                                                href="/products/single.php?product=<?php echo $product['id'] ?>">
                                                                <i class="icon-link" aria-hidden="true"></i>
                                                            </a>

                                                            <a href="javascript:void(0)"
                                                                id="u213-240378503-asymmetrical-butterfly-print-ombre-color-tank-top-white-xl"
                                                                class="quick-view-text">
                                                                <i class="icon-eye" aria-hidden="true"></i>
                                                            </a>

                                                            <div class="add-to-wishlist">
                                                                <div class="show">
                                                                    <div
                                                                        class="default-wishbutton-u213-240378503-asymmetrical-butterfly-print-ombre-color-tank-top-white-xl loading">
                                                                        <a class="add-in-wishlist-js"
                                                                            href="u213-240378503-asymmetrical-butterfly-print-ombre-color-tank-top-white-xl"><i
                                                                                class="icon-heart"></i><span
                                                                                class="tooltip-label">Add to
                                                                                wishlist</span></a>
                                                                    </div>
                                                                    <div class="loadding-wishbutton-u213-240378503-asymmetrical-butterfly-print-ombre-color-tank-top-white-xl loading"
                                                                        style="display: none; pointer-events: none"><a
                                                                            class="add_to_wishlist"
                                                                            href="u213-240378503-asymmetrical-butterfly-print-ombre-color-tank-top-white-xl"><i
                                                                                class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                    </div>
                                                                    <div class="added-wishbutton-u213-240378503-asymmetrical-butterfly-print-ombre-color-tank-top-white-xl loading"
                                                                        style="display: none;"><a
                                                                            class="added-wishlist add_to_wishlist"
                                                                            href="/pages/wishlist"><i
                                                                                class="icon-heart"></i><span
                                                                                class="tooltip-label">View
                                                                                Wishlist</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product-detail">
                                                        <a href="/collections/crop-tops/products/u213-240378503-asymmetrical-butterfly-print-ombre-color-tank-top-white-xl"
                                                            class="grid-link__title"><?php echo $product['title'] ?>
                                                        </a>

                                                        <div class="grid-link__meta">
                                                            <div class="product_price">
                                                                <div class="grid-link__org_price">
                                                                    <?php echo $product['price'] ?>
                                                                </div>
                                                            </div>

                                                            <span class="shopify-product-reviews-badge"
                                                                data-id="4420438294628"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include_once('../includes/footer.php'); ?>