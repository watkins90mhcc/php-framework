<!--Div Content-->
<div class="col-md-9">
  <div class="pageContent" id="addForm">
    <h3 >Add New Product</h3>

              <hr>

              <?php
              if(isset($message)){
              ?>
              <div class="row" id="alertDiv">
                <div class="alert alert-danger" role="alert">
                  <?php print $message; ?>
                </div>
              </div>
              <?php
              }
              ?>

              <form method="post" name="insertProduct" action="<?php print APP_DOC_ROOT . '/product/add'; ?>">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" name="description" id="description" placeholder="Product Description">
                </div>
                <div class="form-group">
                  <label for="cost">Cost</label>
                  <input type="text" class="form-control" name="cost" id="cost" placeholder="Product Cost">
                </div>
                <div class="form-group">
                  <label for="retail">Retail Price</label>
                  <input type="text" class="form-control" name="retail" id="retail" placeholder="Retail Price">
                </div>
                <div class="form-group">
                  <label for="qtyOnHand">Qty on Hand</label>
                  <input type="text" class="form-control" name="qtyOnHand" id="qtyOnHand" placeholder="Qty on Hand">
                </div>
                <div class="form-group">
                  <label for="qtyOnOrder">Qty on Order</label>
                  <input type="text" class="form-control" name="qtyOnOrder" id="qtyOnOrder" placeholder="Qty on Order">
                </div>
                <button type="submit" name="submit" class="btn btn-default">Add Product</button>
              </form>
  </div>
</div>
<!--End Div Content-->
