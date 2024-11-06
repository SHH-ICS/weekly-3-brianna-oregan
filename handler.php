<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_orange-blue.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Order Summary</title>
  </head>

  <body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">Order Summary</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="page-content"><br>
    <center>
    <?php
    // Function to round to the nearest nickel
    function roundToNickel($amount)
    {
      return round($amount * 20) / 20;
    }

    //set the variables
    $size = isset($_POST['size']) ? strtolower(trim($_POST['size'])) : '';
    $toppings = isset($_POST['toppings']) ? (int)$_POST['toppings'] : 0;
    $cost = 0.0;
    $top_cost = 0.0;
    //validate input, set cost based on pizza size
    if ($size == "large") {
      $cost = 6.00;
    } elseif ($size == "extra large") {
      $cost = 10.00;
    } else {
      echo "<br><h5>Invalid size input. Please enter 'large' or 'extra large'.</h5>";
      echo '<form action="index.html" method="get">
              <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                Try Again
              </button>
            </form>';
      exit();
    }

    if ($toppings == 1) {
      $top_cost = 1.00;
    } elseif ($toppings == 2) {
      $top_cost = 1.75;
    } elseif ($toppings == 3) {
      $top_cost = 2.50;
    } elseif ($toppings == 4) {
      $top_cost = 3.35;
    } else {
      echo "<p>Invalid input. Please enter a number between 1 and 4.</p>";
      exit();
    }

    // Calculate the costs
    $subtotal = roundToNickel($cost + $top_cost, 2);
    $tax = roundToNickel($subtotal * 0.13, 2);
    $total = roundToNickel($subtotal + $tax, 2);

    // print the results
    echo "<br><h5>Subtotal = $" . number_format($subtotal, 2) . "</h5>";
    echo "<h5>Tax = $" . number_format($tax, 2) . "</h5>";
    echo "<h5>Total = $" . number_format($total, 2) . "</h5>";
    ?>

    </center>

  </body>

</html>