<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

  <?php echo $this->session->flashdata('message'); ?>

  <!-- Basic Card Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Summit Content</h6>
    </div>
    <div class="card-body">
      <?= form_open_multipart('summit_content/save_new_content'); ?>

      <div class="form-group row">
        <label for="desc" class="col-sm-4 col-form-label">Summit</label>
        <div class="col-sm-8">
          <select class="form-control" id="summit" name="summit">
            <?php foreach ($summit as $s) : ?>
              <option value="<?php echo $s['id_summit']; ?>"><?php echo $s['description']; ?> </option>
            <?php endforeach ?>
          </select>
        </div>
      </div>
      <div class="form-group">
                      <div class="row">
                        <div class="col">
                          <p class="card-text" style="color: black;">Day Date</p>
                        </div>
                        <div class="col-sm-8">
                          <input type="date" name="birthdate" class="form-control" id="birthdate" style="color: black;" value="">
                        </div>
                      </div>
                    </div>
      <div class="form-group row">
        <label for="desc" class="col-sm-4 col-form-label">Description</label>
        <div class="col-sm-8">
          <input type="text" name="desc" class="form-control" id="desc">
        </div>
      </div>
    
      <div style="overflow:auto;">
              <div class="mb-3 ml-3" style="float:left;">
                <a href="<?= base_url(); ?>summit_days" class="btn btn-primary mt-2">Kembali</a>
                <button type="submit" name="save" class="btn btn-danger mt-2">Save</button>
              </div>
      </div>
      </form>
    </div>
  </div>
