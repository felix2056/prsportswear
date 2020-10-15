<?php
$products = array();

/***********************************************************
 * Sale starts here
***********************************************************/


$product42 = array();
$product42['id'] = 42;
$product42['title'] = "AONIJIE E4088 Antiperspirant Running Belt Sweat Head Bands Elastic Silicone Multifunction Sportband";
$product42['price'] = "$26.14";
$product42['sale_price'] = "$15.38";
$product42['meta'] = array(
    "style" => "Artificial",
    "material" => "Resin",
    "theme" => "Animal",
    "use" => "Home Garden Decoration",
    "size" => "as the picture shows"
);

$product42['featured_image'] = "/assets/images/products/1278672_850x.jpg";
$product42['images'] = array(
    "/assets/images/products/product-image-881493830_grande.jpg",
    "/assets/images/products/product-image-881493831_grande.jpg",
    "/assets/images/products/product-image-881493827_grande.jpg"
);


$product43 = array();
$product43['id'] = 43;
$product43['title'] = "Sports Gym Large Capacity Travel Duffle Bag Waterproof Fitness Training Yoga Riding Backpack";
$product43['price'] = "$17.94";
$product43['sale_price'] = "$29.98";
$product43['meta'] = array(
    "specification" => "Single-piece Package",
    "style" => "Creative",
    "pattern" => "Plane Wall Sticker",
    "scenerios" => "Wall",
    "material" => "vinyl"
);

$product43['featured_image'] = "/assets/images/products/1245845_850x.jpg";

$product43['images'] = array(
    "/assets/images/products/product-image-641606229_grande.jpg",
    "/assets/images/products/product-image-641606238_grande.jpg",
    "/assets/images/products/product-image-641606234_grande.jpg",
    "/assets/images/products/product-image-641606233_grande.jpg",
    "/assets/images/products/product-image-641606237_grande.jpg"
);


$product44 = array();
$product44['id'] = 44;
$product44['title'] = "Sports Marathon Music Waist Bag Fanny Pack IPhone 7 Plus Belt Pouch With Audio Amplifier Speaker";
$product44['price'] = "$29.18";
$product44['sale_price'] = "$23.18";
$product44['meta'] = array(
    "style" => "Modern",
    "material" => "Spandex",
    "theme" => "Sports",
    "size" => "40cm*40cm/15.7*15.7"
);

$product44['featured_image'] = "/assets/images/products/1120379_850x.jpg";
$product44['images'] = array(
    "/assets/images/products/product-image-395749773_grande.jpg",
    "/assets/images/products/product-image-635678816_grande.jpg",
    "/assets/images/products/product-image-635678823_grande.jpg",
    "/assets/images/products/product-image-635678814_grande.jpg"
);


$product45 = array();
$product45['id'] = 45;
$product45['title'] = "AONIJIE Sports Waist Belt Bag Pack 4.7/5.5 Inch Touch Screen Phone Case Holder Marathon Running";
$product45['price'] = "$74.20";
$product45['sale_price'] = "$56.40";
$product45['meta'] = array(
    "style" => "Flower Bouquet",
    "material" => "Plastic",
    "model" => "Artificial flower",
    "occasion" => "Valentine's Day",
    "type" => "Decorative Flowers & Wreaths,Peony",
    "classification" => "rtificial Flowers"
);

$product45['featured_image'] = "/assets/images/products/1113577_850x.jpg";
$product45['images'] = array(
    "/assets/images/products/product-image-898734118_grande.jpg",
    "/assets/images/products/product-image-898734119_grande.jpg",
    "/assets/images/products/product-image-898734120_grande.jpg"
);

array_push($products, $product42);
array_push($products, $product43);
array_push($products, $product43);
array_push($products, $product44);
array_push($products, $product45);


function getAllSale() {
    return json_encode($GLOBALS['products']);
}