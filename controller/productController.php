<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

switch ( $route->getAction() ) {

    case 'add':

        $valid = false;
        if(isset($_POST)){
          $data = verifyProductForm($_POST);
          $valid = $data[0];

          if (false === $valid) {
              $message = $data[1];
              include( APP_VIEW .'/product/productSubNav.php' );
              include( APP_VIEW .'/product/newView.php' );
            } else{
              $result = insertProduct($_POST, $mysql);
              include( APP_VIEW .'/product/productSubNav.php' );
              include( APP_VIEW .'/product/successView.php' );
          }
        }
        else{
            include( APP_VIEW .'/product/productSubNav.php' );
            include( APP_VIEW .'/product/newView.php' );
        }
        break;

    case 'home':
        $products = loadProducts($mysql);

        include( APP_VIEW .'/product/productSubNav.php' );
        include( APP_VIEW .'/product/homeView.php' );
        break;

    case 'new':
        include( APP_VIEW .'/product/productSubNav.php' );
        include( APP_VIEW .'/product/newView.php' );
        break;

    default:
        $products = loadProducts($mysql);
        include( APP_VIEW .'/product/productSubNav.php' );
        include( APP_VIEW .'/product/homeView.php' );
        break;
}


# Include html footer
include( APP_VIEW . '/footer.php' );

# Local Functions

function insertProduct($formData, $dbconn){
  $sql = "INSERT INTO product
          (name, description, cost, retail, qty_on_hand, qty_on_order)
          VALUES
          (?, ?, ?, ?, ?, ?)";

  $stmt = $dbconn->prepare($sql);
  $stmt->bind_param(
    'ssddii',
    $formData['name'],
    $formData['description'],
    $formData['cost'],
    $formData['retail'],
    $formData['qtyOnHand'],
    $formData['qtyOnOrder']
  );
  $result = $stmt->execute();

  return $result;
}
function loadProducts($dbConn) {

  $sql = "SELECT *
          FROM product
          ORDER BY name";

  $result = $dbConn->query($sql);
  $products = $result->fetch_all(MYSQLI_ASSOC);

  return $products;

}

function verifyProductForm($formData){

  $valid = true;
  $message = '';

  if('' == $formData['name']){
    $valid = false;
    $message .= 'Please enter a product name<br>';
}
  if('' == $formData['description']){
    $valid = false;
    $message .= 'Please enter a product description<br>';
  }
  if('' == $formData['cost']){
    $valid = false;
    $message .= 'Please enter a the cost of the product<br>';
  }
  if('' == $formData['retail']){
    $valid = false;
    $message .= 'Please enter the retail value of the product</br>';
  }
  if('' == $formData['qtyOnHand']){
    $valid = false;
    $message .= 'Please supply the amount on hand, zero if there is none<br>';
  }
  if('' == $formData['qtyOnOrder']){
    $valid = false;
    $message .='Please specify the amount of the product on order, zero if there is none';
  }
  return array($valid, $message);
}
