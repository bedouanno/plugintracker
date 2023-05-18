<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-center px-3">
                <h6 class="text-white ps-3 d-inline-block pt-3">Update User</h6>
                <!-- <a href="<?php echo base_url(); ?>plugins/create" class="btn btn-success mr-3 d-block mr-5">Add Plugin</a>  -->
              </div>
            </div>
            <div class="card-body px-5 pb-5">
                <?php echo form_open('user/update/'. $user['id']); ?>

                    <div class="row">
                    <h6>Basic Information</h6>
                    <div class="col-sm-6">
                      <div class="input-group input-group-static mb-3">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="first_name" required value="<?php echo $user['first_name']; ?>">
                      </div>

                    </div>
                    <div class="col-sm-6">
                      <div class="input-group input-group-static mb-3">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="last_name" required value="<?php echo $user['last_name']; ?>">
                      </div>
                    </div>
                    </div>
 
                     <div class="row">
                    <h6>Account</h6>
                    <div class="col-sm-6">
                      <div class="input-group input-group-static mb-3">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" required value="<?php echo $user['username']; ?>">
                      </div>

                    </div>
                    <div class="col-sm-6">
                      <div class="input-group input-group-static mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control password" id="password" name="password">
                      </div>
                      <div class="input-group input-group-static mb-3">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" value="" disabled>
                      </div>
                    </div>

                    </div>
                    <div class="row">                  
                      <div class="col-sm-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="request_type" class="ms-0">Role</label>
                          <select class="form-control" id="role" name="role" required>
                            <option value="" selected>Click here to select</option>
                            <?php foreach($positions as $position): ?>
                              <option value="<?php echo $position['id']; ?>" <?php if($position['id']==$user['role']): echo 'selected'; endif; ?>><?php echo $position['position_name']; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  <div class="text-center">
                    <input type="submit" id="update_btn" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" value="Update" name="update_btn">
                  </div>
                <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
</div>