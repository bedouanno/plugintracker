<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-center px-3">
                <h6 class="text-white ps-3 d-inline-block pt-3">List of Plugins</h6>
                <!-- <a href="<?php echo base_url(); ?>plugins/create" class="btn btn-success mr-3 d-block mr-5">Add Plugin</a>  -->
              </div>
            </div>
            <div class="card-body px-5 pb-5">
                <?php echo form_open('plugins/create'); ?>

                    <div class="row">
                    <h6>Basic Information</h6>
                    <div class="col-sm-8">
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Plugin Name</label>
                        <input type="text" class="form-control" name="plugin_name">
                      </div>
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Plugin Link</label>
                        <input type="text" class="form-control" name="plugin_link">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Author</label>
                        <input type="text" class="form-control" name="plugin_author">
                      </div>
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Image plugin Link (Optional)</label>
                        <input type="text" class="form-control" name="plugin_image_link">
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <h6>Plugin Details</h6>
                      <div class="col-sm-3">
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Version</label>
                        <input type="text" class="form-control" name="plugin_version">
                      </div>
                      </div>
                      <div class="col-sm-3">
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Tested Up to (WordPress Version)</label>
                        <input type="text" class="form-control" name="tested_up_wp_version">
                      </div>
                      </div>
                      <div class="col-sm-3">
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Compatible WordPress Version</label>
                        <input type="text" class="form-control" name="compatible_wp_version">
                      </div>
                      </div>
                      <div class="col-sm-3">
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Last Updated</label>
                        <input type="text" class="form-control" name="last_update">
                      </div>
                      </div>
                    </div>
                    <div class="row">
                    <h6>Security Notes</h6>
                      <div class="col-sm-12">
                      <div class="input-group input-group-outline mb-3">
                        <textarea type="text" class="form-control" name="security_notes" id="security_notes"></textarea>
                      </div>
                      </div>
                    </div>
                    <div class="row">
                    <h6>Conclusion</h6>
                      <div class="col-sm-12">
                      <div class="input-group input-group-outline mb-3">
                        <textarea type="text" class="form-control" name="conclusion" id="conclusion"></textarea>
                      </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-9"></div>
                      <div class="col-sm-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="request_type" class="ms-0">Request Type</label>
                          <select class="form-control" id="request_type" name="request_type" required>
                            <option value="" selected>Click here to select</option>
                            <option value="1">Standard Protocol</option>
                            <option value="2">Client Request</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  <div class="text-center">
                    <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" value="Create">
                  </div>
                <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
</div>