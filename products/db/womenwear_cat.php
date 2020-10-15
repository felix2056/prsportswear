<?php
$womencrops_products = array();
$womenleggings_products = array();

/********************************************* 
* Women wear Starts Here
**********************************************/

/**
 * Women crop tops starts Here
*/

$product17 = array();
$product17['id'] = 17;
$product17['title'] = "Asymmetrical Butterfly Print Ombre Color Tank Top - White Xl";
$product17['price'] = "$58.90";
$product17['sale_price'] = "$43.30";
$product17['meta'] = array(
    "theme" => "Pattern",
    "specifications" => "Single-piece Package",
    "style" => "Solid",
    "scenerios" => "Wall",
    "brand_name" => "mondecor",
    "material" => "Plastic",
    "pattern" => "Plane Wall Sticker",
    "size" => "0.6 x 3M / 5M / 10M",
);

$product17['featured_image'] = "/assets/images/products/240378503_850x.jpg";
$product17['images'] = array();


$product18 = array();
$product18['id'] = 18;
$product18['title'] = "ZAN.STYLE Round Neck Tank Top - Black";
$product18['price'] = "$8.65";
$product18['sale_price'] = "$8.07";
$product18['meta'] = array(
    "material" => "Resin",
    "style" => "Retro and Nostalgic/Old Furniture",
    "theme" => "Animal",
    "brand_name" => "SaiDeKe Home",
    "pendulum_form" => "Decorations",
    "animal_name" => "cat",
    "name" => "Kiki's Delivery Service"
);

$product18['featured_image'] = "/assets/images/products/253395903_850x.jpg";
$product18['images'] = array();


$product19 = array();
$product19['id'] = 19;
$product19['title'] = "ZAN.STYLE Sleeveless Swing Tunic Dress Tank Top - Army Green M";
$product19['price'] = "$20.60";
$product19['sale_price'] = "$23.54";
$product19['meta'] = array(
    "material" => "PVC",
    "theme" => "Plant",
    "scenerios" => "Wall",
    "pattern" => "Plane Wall Sticker",
    "brancolord_name" => "multi",
    "received_size" => "60*90cm*2",
    "finished_size" => "187*128cm"
);

$product19['featured_image'] = "/assets/images/products/255560619_850x.jpg";

$product19['images'] = array();


$product20= array();
$product20['id'] = 20;
$product20['title'] = "ZAN.STYLE Camisole - Black M";
$product20['price'] = "$120.50";
$product20['sale_price'] = "$90.50";
$product20['meta'] = array(
    "material" => "Organic Material",
    "style" => "Religious",
    "theme" => "People",
    "the_material" => "boxwood",
    "process" => "carving",
    "category" => "Furnishing articles",
    "surface_process" => "carving",
    "decorative_pattern" => "Figure statues",
    "hanging_form" => "Tabletop",
);

$product20['featured_image'] = "/assets/images/products/240464303_850x.jpg";
$product20['images'] = array();

/**
 * Women crop top ends here
 */

/**
 * Women leggings starts here
 */
$product21 = array();
$product21['id'] = 21;
$product21['title'] = "Women Ladies Plus Size Fitness Pants High Waist Stretch Leggings Gym Yoga Running Trousers Sportswear";
$product21['price'] = "$37.80";
$product21['sale_price'] = "$28.16";
$product21['meta'] = array(
    "material" => "Resin",
    "style" => "Europe",
    "theme" => "Architecture",
    "material" => "Resin",
    "size_1" => "20*9.5*26 cm(7.87x3.74x10.24inch)",
    "size_2" => "20*14*26 cm(7.87x5.51x10.24inch)",
    "theme" => "Architecture",
    "feature" => "Piggy Bank",
    "color" => "Milky white, Green, Yellow, Red",
    "suitable_for" => "Gift, home decoration accessories"
);

$product21['featured_image'] = "/assets/images/products/1003516_850x.jpg";
$product21['images'] = array();


$product22 = array();
$product22['id'] = 22;
$product22['title'] = "Women Fitness Yoga Workout Leisure Elastic False Two-Piece Ninth Pants Leggings Sportswear";
$product22['price'] = "$3.41";
$product22['sale_price'] = "$4.47";
$product22['meta'] = array(
    "style" => "Modern",
    "specification" => "Single-piece Package",
    "pattern" => "Plane Wall Sticker",
    "scenerios" => "Wall",
    "theme" => "Pattern",
    "material" => "Vinyl",
    "product_size" => "L, M, S",
    "wall_decor_parking" => "Transparent OPP",
    "shape" => "Vegetables Pizza"
);

$product22['featured_image'] = "/assets/images/products/1032835_850x.jpg";
$product22['images'] = array();


$product23 = array();
$product23['id'] = 23;
$product23['title'] = "Women Plus Size AB Faces Color Block High Elastic Hips Up Work Out Yoga Leggings Pants";
$product23['price'] = "$27.46";
$product23['sale_price'] = "$20.82";
$product23['meta'] = array(
    "style" => "Modern",
    "material" => "Iron",
    "theme" => "Animal",
    "size" => "23*6*20CM"
);

$product23['featured_image'] = "/assets/images/products/1041397_850x.jpg";
$product23['images'] = array();


$product24 = array();
$product24['id'] = 24;
$product24['title'] = "Women Multi Pattern Printed Sports Yoga Stretch Leggings";
$product24['price'] = "21.50";
$product24['sale_price'] = "$15.50";
$product24['meta'] = array(
    "theme" => "100% Brand new and high quality",
    "specifications" => "Quantity:1Set / 30PC Butterfly",
    "style" => "Very fashion and modern breath",
    "scenerios" => "Can DIY. You could design you like",
    "brand_name" => "Shell Material:Acrylic",
    "material" => "1MM thick Plastic mirror",
    "pattern" => "Easy and Convenient to use"
);

$product24['featured_image'] = "/assets/images/products/1041398_850x.jpg";
$product24['images'] = array();

array_push($womencrops_products, $product17);
array_push($womencrops_products, $product18);
array_push($womencrops_products, $product19);
array_push($womencrops_products, $product20);


function getAllWomencrops() {
    return json_encode($GLOBALS['womencrops_products']);
}

array_push($womenleggings_products, $product21);
array_push($womenleggings_products, $product22);
array_push($womenleggings_products, $product23);
array_push($womenleggings_products, $product24);


function getAllWomenleggings() {
    return json_encode($GLOBALS['womenleggings_products']);
}