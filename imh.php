<?php
session_start();
?>
<?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>

<div class="row text-center" id="watch">
  <div class="col-md-3 col-6 py-2">
    <div class="card">
      <img src="images/watch1.jpg" alt="" class="img-fluid pb-1">
      <div class="figure-caption">
        <h6>Guess 1875</h6>
        <h6>Price :Rs 3000</h6>
        <?php if (!isset($_SESSION['email'])) {?>
        <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
        <?php
                    } else {
                    if (check_if_added_to_cart(1)) {
                     echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
        <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
        <p>
          <?php
                        }
                    }
                    ?>
      </div>
    </div>
  </div>