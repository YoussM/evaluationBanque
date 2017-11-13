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

    <form class=""  method="post">
      <button type="submit" name="delete">delete</button>
    </form>

    <form class=""  method="post">
      <button type="submit" name="addAmount"></button>
      <input name="add" type="number" step="0.01">
    </form>

  </body>
</html>

<?php
  include("template/footer.php")
 ?>
