<?php
echo '<title>Purchase Complete</title>';
echo '<head> <link rel="stylesheet" href="style.css"> </head>';
echo '<div id="box"><div class="wrapper"><p>';

$pwd = $_POST['pwd'];

$scrunkly = $_POST['scrunkly'];
$scrunklyCost = $scrunkly;

$blorbo = $_POST['blorbo'];
$blorboCost = $blorbo * 2;

$meowmeow = $_POST['meowmeow'];
$meowmeowCost = $meowmeow * 3;

$shipping = $_POST['shipping'];
$shippingCost;

$totalCost = $scrunklyCost + $blorboCost + $meowmeowCost + $shippingCost;


switch ($shipping) {
    case "7 Day":
        $shippingCost = 'Free'; break;
    case "3 Day":
        $shippingCost = '$5.00'; break;
    case "Overnight":
        $shippingCost = '$50.00'; break;
}


echo 'Thank you for your purchase! Your password is: <br>' . $pwd;
echo '<br><br><table>';
echo <<<EOL
  	<th></th>
    <th>Quantity</th>
    <th>Cost Per Item</th>
    <th>Subtotal</th>
  </tr>
  <tr>
    <th class="label">Scrunklies</th>
    <td>$scrunkly</td>
    <td>$1.00</td>
    <td>$$scrunklyCost.00</td>
  </tr>
  <tr>
    <th class="label">Blorbos</th>
    <td>$blorbo</td>
    <td>$2.00</td>
    <td>$$blorboCost.00</td>
  </tr>
  <tr>
    <th class="label">Meow Meows</th>
    <td>$meowmeow</td>
    <td>$3.00</td>
    <td>$$meowmeowCost.00</td>
  </tr>
  <tr>
    <th class="label">Shipping</th>
    <td colspan='2'>$shipping</td>
    <td>$shippingCost</td>
  </tr>
  <tr>
    <th colspan='3'>Total Cost</th>
    <td>$$totalCost.00</td>
  </tr>
EOL;
echo '</table>'
echo '</p></div></div>';

?>
