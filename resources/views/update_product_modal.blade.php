
  <!-- Modal -->
  <div class="modal fade" id="updateProductModal" tabindex="-1" aria-labelledby="updatedateModal" aria-hidden="true">
    <form action="" method="post" id="updateProductFrom">
        @csrf
        <input type="hidden" id="up_id">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="updateModal">Update Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                
                <div class="errMsgContainer mb-3"></div>

                <div class="from-group">
                  <label for="name">Product Name</label>
                  <input type="text" class="form-control" name="up-name" id="up_name" placeholder="Product Name">
                </div>
                <div class="from-group mt-2">
                  <label for="name">Product Price</label>
                  <input type="text" class="form-control" name="up-price" id="up_price" placeholder="Product Price">
                </div>
      
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary update_product">Update Product</button>
              </div>
            </div>
          </div>
    </form>
  </div>