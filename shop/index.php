<?php

session_start();

require_once 'php/CreateDb.php';
require_once './php/component.php';

// create instance of Createdb class
$database = new CreateDb('Productdb', 'Producttb');

if (isset($_POST['add'])) {
    /// print_r($_POST['product_id']);
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], 'product_id');

        if (in_array($_POST['product_id'], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        } else {
            $count = count($_SESSION['cart']);
            $item_array = [
                'product_id' => $_POST['product_id'],
            ];

            $_SESSION['cart'][$count] = $item_array;
        }
    } else {
        $item_array = [
            'product_id' => $_POST['product_id'],
        ];

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php require_once 'php/header.php'; ?>

<img src="./upload/banner.jpg" alt="fott" style="width:100%; height:450px;"/>
<h1 style="color:#1A2902;margin-top:-16rem;margin-left:10rem; font-size:27px;">Welcome to our merchadise</h1>
<p style="color:#1A2902;margin-left:10rem;">All the money collected will go to the foundation made by us, <br> purchase products and plant a tree</p>
<div class="container">
       <div class="row text-center py-5" style="margin-top:15rem">
            <?php
            $result = $database->getData();
            while ($row = mysqli_fetch_assoc($result)) {
                component(
                    $row['product_name'],
                    $row['product_price'],
                    $row['product_image'],
                    $row['id']
                );
            }
            ?> 
     
        <!-- <div class="row text-center py-5">
            <form action="index.php" method="post">
              <div class="card shadow">
                <div>
                  <img src="./upload/hoddie.jpg" alt="Image1" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                 <h5 class="card-title">Hoddie</h5>
                  <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                 </h6>
                <p class="card-text">
                 Some quick example text to build on the card.
                </p>
                <h5>
                  <span class="price">$20</span>
                </h5>
                
                <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                <input type='hidden' name='product_id' value='6'>
              </div>
        </form>
    </div>

    <div class="row text-center py-5">
            <form action="index.php" method="post">
              <div class="card shadow">
                <div>
                  <img src="./upload/hoddie.jpg" alt="Image1" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                 <h5 class="card-title">Hoddie</h5>
                  <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                 </h6>
                <p class="card-text">
                 Some quick example text to build on the card.
                </p>
                <h5>
                  <span class="price">$20</span>
                </h5>
                
                <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                <input type='hidden' name='product_id' value='6'>
              </div>
        </form>
           </div>
           <div class="row text-center py-5">
            <form action="index.php" method="post">
              <div class="card shadow">
                <div>
                  <img src="./upload/hoddie.jpg" alt="Image1" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                 <h5 class="card-title">Hoddie</h5>
                  <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                 </h6>
                <p class="card-text">
                 Some quick example text to build on the card.
                </p>
                <h5>
                  <span class="price">$20</span>
                </h5>
                
                <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                <input type='hidden' name='product_id' value='6'>
              </div>
        </form>
           </div> -->
</div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
