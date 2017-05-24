
        <!-- page content -->
        <div class="col-md-9">
          <div class="pageContent">
            <table class="table table-hover table-bordered" style="background-color: Orange;">
              <thead>
          <tr>
             <th>Product</th>
             <th>Description</th>
             <th>Price</th>
             <th>Quantity</th>
           </tr>
           </thead>
           <tbody>
          <?php
            if (isset($products)) {
             foreach($products as $key => $product){
?>
            <tr>
              <td><?php print $product['name']; ?></td>
              <td><?php print $product['description']; ?></td>
              <td><?php print $product['retail']; ?></td>
              <td><?php print $product['qty_on_hand']; ?></td>
            </tr>
<?php
             }
           }
?>
       </tbody>
     </table>
