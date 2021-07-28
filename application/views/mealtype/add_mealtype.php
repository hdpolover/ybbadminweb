<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

  <?php echo $this->session->flashdata('message'); ?>

  <!-- Basic Card Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Summit</h6>
    </div>
    <div class="card-body">
      <form method="post" action="<?= base_url('mealtype/create_new_meal'); ?>">
        <div class="form-group row">
          <label for="desc" class="col-sm-4 col-form-label">Description</label>
          <div class="col-sm-8">
            <input type="text" name="desc" class="form-control" id="desc">
          </div>
        </div>
            <div style="overflow:auto;">
              <div class="mb-3 ml-3" style="float:left;">
                <a href="<?= base_url(); ?>mealtype" class="btn btn-primary mt-2">Back</a>
                <button type="submit" name="save" class="btn btn-danger mt-2">Save</button>
              </div>
      </div>
    </div>
  </div>