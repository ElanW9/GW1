<?php
$errors = [];
if (!empty($_POST['name'])) {
  $name = $_POST['name'];
  if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
    $errors[] = "Only letters and white space allowed";
  }
}
if (!empty($_POST['mail'])) {
  $mail = $_POST['mail'];
  if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format";
  }
}
// print '<pre>';
// var_dump($errors);
// print '</pre>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/cart.css" />
  <title>login</title>
</head>
<nav id="hamnav">
  <!-- (B) THE HAMBURGER -->
  <label for="hamburger">&#9776;</label>
  <input type="checkbox" id="hamburger" />

  <!-- (C) MENU ITEMS -->
  <div id="hamitems">
    <a href="/index.html">HOME</a>
    <a href="/about/a.html">ABOUT</a>
    <a href="/products/c.html">PRODUCTS</a>
    <a href="d.html"><img class="cart" src="/img/cart-shopping-solid-yellow.png" alt="" /></a>
  </div>
</nav>

<body></body>

</html>