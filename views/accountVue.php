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
  </body>
</html>

<?php
  include("template/footer.php")
 ?>
