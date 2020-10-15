<?php
$menhoodies_products = array();
$mentanks_products = array();

/*******************************************************
 * Men wear starts here
 *****************************************************/

 /**
  * Men hoodies starts here
  */
  $product25 = array();
  $product25['id'] = 25;
  $product25['title'] = "Mens Thick Casual Sport Joggers Solid Color Set Fashion Tracksuit Suit Hoodies Sweatshirts Pants";
  $product25['price'] = "$83.46";
  $product25['sale_price'] = "$78.82";
  $product25['meta'] = array(
      "style" => "Modern",
      "material" => "Iron",
      "theme" => "Animal",
      "size" => "23*6*20CM"
  );
  
  $product25['featured_image'] = "/assets/images/products/1004658_850x.jpg";
  $product25['images'] = array();
  
  
  $product26 = array();
  $product26['id'] = 26;
  $product26['title'] = "Mens Anti-Static Spring Zipper Solid Color Sweater Outdoor Sport Warm Fleece Jacket";
  $product26['price'] = "$7.75";
  $product26['sale_price'] = "$50.65";
  $product26['meta'] = array(
      "style" => "100% brand new and high quality.",
      "material" => "Non-toxic, environmental protection",
      "theme" => "Material:Flax",
      "size" => "30*50cm  45*45cm"
  );
  
  $product26['featured_image'] = "/assets/images/products/1039333_850x.jpg";
  $product26['images'] = array();
  
  
  $product27 = array();
  $product27['id'] = 27;
  $product27['title'] = "Mens Fashion Casual British Style Sweater Spell Color Stitching Button Raglan Sleeve T-Shirt";
  $product27['price'] = "$1.64";
  $product27['sale_price'] = "$0.64";
  $product27['meta'] = array(
      "style" => "Modern",
      "material" => "Silk",
      "theme" => "100% brand new and high quality",
      "size" => "45cm*45cm"
  );
  
  $product27['featured_image'] = "/assets/images/products/1039334_850x.jpg";
  $product27['images'] = array();
  
  
  $product28 = array();
  $product28['id'] = 28;
  $product28['title'] = "Mens Sweatshirt Solid Color Fashion Sweaters Multi Zipper Casual Hoodies";
  $product28['price'] = "$6.76";
  $product28['sale_price'] = "$6.76";
  $product28['meta'] = array(
      "style" => "Modern",
      "material" => "Linen Cotton",
      "theme" => "Pillow case",
      "size" => "45cm*45cm"
  );
  
  $product28['featured_image'] = "/assets/images/products/1070985_850x.jpg";
  $product28['images'] = array();
  
  /* 
  * Men hoodies Ends Here
  */
  
  /* 
  * Men tanks Starts Here
  */
  
  $product29 = array();
  $product29['id'] = 29;
  $product29['title'] = "Fashion Mens Sports Breathable Low Slits Fitness Vest Casual Bodybuilding Sleeveless Tank Tops";
  $product29['price'] = "$33.24";
  $product29['sale_price'] = "$28.24";
  $product29['meta'] = array(
      "style" => "Modern",
      "classification" => "For Wall",
      "material" => "Acrylic",
      "specification" => "Multi-piece Package",
      "pattern" => "Mirror Surface Wall Sticker",
      "scenerios" => "Wall",
      "theme" => "Abstract",
      "size" => "1 square = 5.5 x 5.5cm"
  );
  
  $product29['featured_image'] = "/assets/images/products/1126068_850x.jpg";
  $product29['images'] = array();
  
  
  $product30 = array();
  $product30['id'] = 30;
  $product30['title'] = "Mens Cotton Crewneck Sports Fitness Vest Casual Solid Color Slim Tank Tops";
  $product30['price'] = "$9.97";
  $product30['sale_price'] = "$6.99";
  $product30['meta'] = array(
      "style" => "Pastoral",
      "material" => "Fairy",
      "theme" => "Textile & Fabric",
      "size" => "PAN030006"
  );
  
  $product30['featured_image'] = "/assets/images/products/1128537_850x.webp";
  $product30['images'] = array();
  
  
  $product31 = array();
  $product31['id'] = 31;
  $product31['title'] = "Men's Breathable Sweat Sports Vest Casual Mesh Fitness Running Athletic Tank Tops";
  $product31['price'] = "$7.94";
  $product31['sale_price'] = "$6.98";
  $product31['meta'] = array(
      "theme" => "Modern",
      "style" => "Animal",
      "material" => "Ceramic & Enamel"
  );
  
  $product31['featured_image'] = "/assets/images/products/1135942_850x.webp";
  $product31['images'] = array();
  
  
  
  $product32 = array();
  $product32['id'] = 32;
  $product32['title'] = "Men's Seamless Ice Silk Vest Leisure Solid Color Thin Elastic Fitness Sports Tanks Tops";
  $product32['price'] = "$58.70";
  $product32['sale_price'] = "$43.90";
  $product32['meta'] = array(
      "style" => "Religious",
      "material" => "Metal",
      "theme" => "Mascot",
      "special" => "metal craft",
      "feature" => "collection",
      "size" => "1.69*1.69*3.14 inch"
  );
  
  $product32['featured_image'] = "/assets/images/products/1177653_850x.webp";
  $product32['images'] = array(
      "/assets/images/products/product-image-885766984_grande.jpg",
      "/assets/images/products/product-image-885766982_grande.jpg",
      "/assets/images/products/product-image-885766980_grande.jpg",
      "/assets/images/products/product-image-885766983_grande.jpg"
  );
  

array_push($menhoodies_products, $product25);
array_push($menhoodies_products, $product26);
array_push($menhoodies_products, $product27);
array_push($menhoodies_products, $product28);


function getAllMenhoodies() {
    return json_encode($GLOBALS['menhoodies_products']);
}

array_push($mentanks_products, $product29);
array_push($mentanks_products, $product30);
array_push($mentanks_products, $product31);
array_push($mentanks_products, $product32);


function getAllMentanks() {
    return json_encode($GLOBALS['mentanks_products']);
}