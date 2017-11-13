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
    <div class="card carte" style="width: 20rem;" >
      <input type="text" name="" value="<?php echo $account->getName()?>" readonly="">
      <input type="text" name="" value="<?php echo $account->getType()?>" readonly="" >
      <input type="text" name="" value="<?php echo $account->getAmount()?>" readonly="" >
    <div class="card-body">

    <form class=""  method="post">
      <button type="submit" name="addAmount"class="btn btn-outline-primary" id="">Add</button>
      <input name="add" type="number" step="0.01"id="add">
    </form>

    <form class=""  method="post">
      <button type="submit" name="suppAmount"class="btn btn-outline-info" id="">Back</button>
      <input name="supp" type="number" step="0.01" id="supp">
    </form>

    <form class=""  method="post">
      <button type="submit" name="delete"class="btn btn-outline-danger" id="">Delete</button>
    </form>


  </div>
  </div>

  </body>
</html>

<?php
  include("template/footer.php")
 ?>
