<?php // Get and Post Method practice ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
    <h2>Order Only Pizza</h2><br>
    <label>Enter Quentiy</label><br>
    <input type="text" name="quentity" placeholder="Pizza Quentity"><br>
    <input type="submit" name="submit">
  </form>
</body>

</html>

<?php
// Simple food quentity example not using localhost database

$foob = "Pizza";
$quentity = $_POST['quentity'];
$total = $quentity * 5.33;

echo "You have Order {$quentity} x Pizza <br>";
echo "And the total Price is {$total} $";

?>