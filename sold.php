  
        <?php

           $item->getProductInfoimg();
        ?>

<div class="position-fixed d-flex mb-3 justify-content-center text-align-center" style="right:-5%; bottom:5px;">
<div class="mx-3">
    <button type="button" class="btn-plus bg-primary border-white" data-bs-toggle="modal" data-bs-target="#insertModal"><i class="fas fa-plus"></i>
</button>
</div>
<div class="mx-3">
    <button type="button" class="btn-plus bg-success border-white" data-bs-toggle="modal" data-bs-target="#updateModal"><i class="fas fa-edit"></i>
</button>
</div>
<div class="mx-3">
    <button type="button" class="btn-plus bg-danger border-white" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fas fa-trash"></i>
</button>
</div>
<form method="post" action="processSoldItem.php">
        <div class="mx-3" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" title="Apply Changes" data-bs-content="Clicking Apply will subtract the amount of quantity in sold to the quantity of items in Stocks">
            <button type="submit" name="apply-btn" class="btn-plus bg-warning border-white">Apply</button>
        </div>
    </form>
</div>


<!--Insert Modal -->
<div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="insertModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="processSoldItem.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="insertModalLabel">Add Sold</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <select class="form-select form-select-lg mb-3" name="sold_item" aria-label=".form-select-lg example">
          <option selected>Select Item Sold</option>
                        <option value="Hita">Hita</option>
                        <option value="Pecho">Pecho</option>
                        <option value="Liempo">Liempo</option>
                        <option value="Barbecue Pork">Barbecue Pork</option>
                        <option value="Ground Pork">Ground Pork</option>
                        <option value="Mineral Water">Mineral Water</option>
                        <option value="Spices">Spices</option>
                        <option value="Mantika">Mantika</option>
                        <option value="Calamansi">Calamansi</option>
                        <option value="Toyo">Toyo</option>
                        <option value="SIli">SIli</option>
          </select>
          <label for="quantity">Sold Item Quantity</label>
          <input type="number" name="quantity" id="quantity" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        
      </form>
    </div>
  </div>
</div>
<!-- delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="processSoldItem.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Delete Sold</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
    <label for="delete_sold">Sold ID</label>
    <input type="number" name="delete_sold" id="delete_sold" class="form-control" placeholder="Enter sold ID you want to delete.">
        </div>


        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
          
        </div>
        
      </form>
    </div>
  </div>
</div>

<!-- update Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="processSoldItem.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update Sold Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <select class="form-select form-select-lg mb-3" name="update_sold" aria-label=".form-select-lg example">
                        <option selected>Select Sold Item to be Updated</option>
                        <option value="Hita">Hita</option>
                        <option value="Pecho">Pecho</option>
                        <option value="Liempo">Liempo</option>
                        <option value="Barbecue Pork">Barbecue Pork</option>
                        <option value="Ground Pork">Ground Pork</option>
                        <option value="Mineral Water">Mineral Water</option>
                        <option value="Spices">Spices</option>
                        <option value="Mantika">Mantika</option>
                        <option value="Calamansi">Calamansi</option>
                        <option value="Toyo">Toyo</option>
                        <option value="SIli">SIli</option>
                    </select>
                    <label for="update_quantity">Sold Item Quantity</label>
                    <input type="number" name="update_quantity" id="quantity" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Initialize popovers -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl)
    });
  });
</script>