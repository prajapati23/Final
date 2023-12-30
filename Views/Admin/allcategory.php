<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <div class="row">
            <h5 class="col-10">Category</h5>
            <div class="col-2 text-right">
              <a class="btn btn-md btn-primary" href="addcategory">Add Category</a>
            </div>
            <div class="table-responsive mt-5">
              <table class=" table text-nowrap mb-0 align-middle" style="border: solid 2px;">
                <thead class="text-dark">
                  <tr>
                    <th>
                      <h6 class="fw-semibold mb-0">Id</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Category Name</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Category Description</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Action</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $index = 1;
                  foreach ($allCategories['Data'] as $key => $value) {
                    // echo "<pre>";
                    // print_r($value->role_id);
                    // echo "</pre>";
                  
                    ?>
                    <tr>

                      <td>
                        <h6 class="fw-semibold mb-1">
                          <?php echo $value->cat_id; ?>
                        </h6>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">
                          <?php echo $value->cat_name; ?>
                        </p>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">
                          <?php echo $value->cat_desc; ?>
                        </p>
                      </td>
                      <td>
                      <div class="d-flex align-items-center gap-2">
                          <a href="edit?userid=<?php echo $value->id; ?>">
                            <span class="badge bg-primary rounded-3 fw-semibold">
                              Edit
                            </span></a>
                          <a href="deleteuser?userid=<?php echo $value->id; ?>">
                            <span class="badge bg-danger rounded-3 fw-semibold">
                              Delete
                            </span></a>
                      </div>
                    </td>
                    </tr>
                    <?php $index++;
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>