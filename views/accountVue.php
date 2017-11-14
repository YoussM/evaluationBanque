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
    <!-- form type card -->
    <div class="card carte" style="width: 20rem;" >
      <input type="text" name="" value="<?php echo $account->getName()?>" readonly="">
      <input type="text" name="" value="<?php echo $account->getType()?>" readonly="" >
      <input type="text" name="" value="<?php echo $account->getAmount()?>" readonly="" >
    <div class="card-body">

    <!-- form for add amount -->
    <form class=""  method="post">
      <button type="submit" name="addAmount"class="btn btn-outline-primary" id="">Add</button>
      <input name="add" type="number" min= "0" step="0.01"id="add">
    </form>

    <!-- form for drop amount -->
    <form class=""  method="post">
      <button type="submit" name="suppAmount"class="btn btn-outline-info" id="">Back</button>
      <input name="supp" type="number" min= "0" step="0.01" id="supp">
    </form>

    <!-- form for credited account -->
    <form class=""  method="post">
    <select class="" name="credited">
        <?php foreach ($accounts as $key => $value): ?>
          <option value="<?php echo $value["id"];?>"><?php echo $value["name"]?></option>
        <?php endforeach; ?>
    </select>

    <!-- form for debited account -->
    <select class="" name="debited">
        <?php foreach ($accounts as $key => $value): ?>
          <option value="<?php echo $value["id"];?>"><?php echo $value["name"]?></option>
        <?php endforeach; ?>
    </select>

    <!-- button credited account -->
    <input name="cred" type="number" min= "0" step="0.01"id="add">
    <button type="submit" name="creditedb"class="btn btn-outline-primary" id="">credited</button>
    </form>

    <!-- button delete account -->
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
