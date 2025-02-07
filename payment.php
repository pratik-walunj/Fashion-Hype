<?php
require "includes/common.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
  <style>
  body {
    font-family: Arial, sans-serif;
  }

  .container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
  }

  .container h2 {
    text-align: center;
  }

  label {
    display: block;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="email"],
  textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }

  input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }
  </style>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="container">
    <h2>Checkout</h2>
    <form action="process_checkout.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="address">Address:</label>
      <textarea id="address" name="address" required></textarea>
      <label for="card_number">Card Number:</label>
      <input type="text" id="card_number" name="card_number" required>
      <label for="expiry_date">Expiry Date:</label>
      <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YY" required>
      <label for="cvv">CVV:</label>
      <input type="text" id="cvv" name="cvv" required>
      <input type="submit" value="Pay Now">
    </form>
  </div>


</body>

</html>