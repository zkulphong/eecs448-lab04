<?php
$username = $_POST["username"];
$password = $_POST["password"];
$keyboard = $_POST["keyboard"];
$mouse = $_POST["mouse"];
$monitor = $_POST["monitor"];
$shipping = $_POST["shipping"];

$keyboardTotal = $keyboard * 20;
$mouseTotal = $mouse * 5;
$monitorTotal = $monitor * 30;
$shippingPrice = 0;
if($shipping == "7 Day"){
  $shippingPrice = 0;
}

else if ($shipping == "Overnight"){
  $shippingPrice = 50;
}

else if ($shipping == "3 Day"){
  $shippingPrice = 5;
}

$total = $keyboardTotal + $mouseTotal + $monitorTotal + $shippingPrice;
echo $total;
$output = "<html><head><script type=text/javascript src=formChecker.js></script>
<link href=style.css rel=stylesheet type=text/css />
</head><body><h1>Your payment has been processed</h1><h2>Your password is $password</h2>
Table<table><tr><td>Item</td><td>Quantity</td><td>Cost Per Item</td><td>Sub Total</td></tr>
<tr><td>Keyboard</td><td>$keyboard</td><td>$20</td><td>$$keyboardTotal</td></tr>
<tr><td>Mouse</td><td>$mouse</td><td>$5</td><td>$$mouseTotal</td></tr>
<tr><td>Monitor</td><td>$monitor</td><td>$30</td><td>$$monitorTotal</td></tr>
<tr><td>Shipping</td><td>$shipping</td><td></td><td>$$shippingPrice</td></tr
<tr><td>Total</td><td></td><td></td><td>$$total</td></tr>></table><body></html";

echo $output;
?>
