<?php
  include("template/header.php")
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p><?php echo $account->getName()?></p>
    <p><?php echo $account->getType()?></p>
    <p><?php echo $account->getAmount()?></p>
  </body>
</html>
<?php
  include("template/footer.php")
 ?>
