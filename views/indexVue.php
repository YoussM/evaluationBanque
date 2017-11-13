<?php
  include("template/header.php")
 ?>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Add Account</button>

    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <form class="" action="index.php" method="post">
            <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="name" value="" placeholder="name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="type">Type:</label>
        <div class="col-sm-10">
          <select class="" name="type" id="type" required>
            <option value="Pel">PEL</option>
            <option value="Cheque">Chèque</option>
          </select>
        </div>
      </div>
      <div class=
      <div class="form-group">
  <label class="control-label col-sm-2" for="name">Amount:</label>
  <div class="col-sm-10">
    <input class="form-control" type="number" name="amount" value=""placeholder="amount">
  </div>
</div>

  <button class= "btn btn-primary" type="submit" name="button" id="btn">send</button>

    <button type="submit" name="delete">delete</button>


      </form>
    </div>
  </div>
    </div>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Selection Compte
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php foreach ($accounts as $key => $value): ?>
            <a class="dropdown-item" href="thisAccount.php?id=<?php echo $value->getId()?>"><?php echo $value->getName() ?></a>
        <?php endforeach; ?>


      </div>
    </div>

   </body>
 </html>


 <?php
   include("template/footer.php")
  ?>
