
  <!-- Modal -->
  <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="productModal" aria-hidden="true">
    <form action="" method="post" id="addProductFrom">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="productModal">Add Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                
                <div class="errMsgContainer mb-3"></div>

                <div class="from-group">
                  <label for="name">Product Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
                </div>
                <div class="from-group mt-2">
                  <label for="name">Product Price</label>
                  <input type="text" class="form-control" name="price" id="price" placeholder="Product Price">
                </div>
      
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add_product">Save Product</button>
              </div>
            </div>
          </div>
    </form>
  </div>