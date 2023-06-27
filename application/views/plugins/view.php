<? $object; ?>
    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">

               <?php  if($plugin['plugin_image_link'] != NULL){ ?>
              <img src="<?php echo $plugin['plugin_image_link']; ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
              <?php }else{ ?>
              <img src="https://www.nicepng.com/png/detail/39-395944_logo-wordpress-plugin-logo.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
              <?php } ?>
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1 d-flex align-items-center">
                <span class="mr-2">
                <?php echo $plugin['plugin_name']; ?>
                </span>
   
                    <?php 
                  switch ($plugin_status['plugin_status']) {
                      case 0:
                          $statusclass = "bg-secondary";
                          break;
                      case 1:
                          $statusclass = "bg-success";
                          break;
                      case 2:
                          $statusclass = "bg-danger";
                          break;
                  }
                ?>
                <a href="javascript:;" onclick="popup_sn('#approval_form')"><span class="badge text-xxxs <?php echo $statusclass; ?> p-2 rounded ml-2"><?php echo $array_status[$plugin_status['plugin_status']]; ?></span><span class="badge text-xxxs text-white bg-dark m-1 rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?php echo $plugin_status['reviewed_notes']; ?>"><i class="fa fa-info"></i></span></a>
    
              </h5>
              
              <p class="mb-0 font-weight-normal text-sm">
                <a href="<?php echo $plugin['plugin_link']; ?>" target="_blank"><?php echo $plugin['plugin_link']; ?></a>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">

            <div class="end-0">
              <ul class="nav nav-pills nav-fill p-1">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 bg-success text-white" href="<?php echo base_url(); ?>plugins/view/<?php echo $plugin['id']; ?>">
                    <i class="material-icons text-lg position-relative">info</i>
                    <span class="ms-1">Plugin Information</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1" href="<?php echo base_url(); ?>plugins/update/<?php echo $plugin['id']; ?>" role="tab" aria-selected="false">
                    <i class="material-icons text-lg position-relative">settings</i>
                    <span class="ms-1">Edit</span>
                  </a>
                </li>
              </ul>

            </div>

          </div>

        </div>

        <div class="row">
          <div class="row">
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Plugin Information</h6>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Author:</strong> &nbsp; <?php echo $plugin['plugin_author']; ?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Version:</strong> &nbsp;  <?php echo $plugin['plugin_version']; ?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Tested up to (WordPress Version):</strong> &nbsp;  <?php echo $plugin['plugin_testup_wp']; ?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Compatible WordPress Version:</strong> &nbsp;  <?php echo $plugin['plugin_compatible_wp']; ?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Last Update:</strong> &nbsp;  <?php echo $plugin['plugin_last_updated']; ?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Request By:</strong> &nbsp;  <?php echo $request_by[$plugin['plugin_requested_by']]; ?></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">Security Notes</h6>
                </div>
                <div class="card-body p-3">
                  <p class="text-sm">
                    <?php echo $plugin['plugin_security_notes']; ?>
                  </p>
                </div>
              </div>
            </div>



            <div class="col-12 col-xl-4">
              <div class="card card-plain">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">Conclusion</h6>
                </div>
                <div class="card-body p-3">
                  <p class="text-sm">
                    <?php echo $plugin['plugin_conclusion']; ?>
                  </p>
                </div>
       
              </div>
            </div>
            <div class="col-12">
              <div class="card-footer txt-right">
                  <ul>
                    <li class="d-inline-block pt-0 text-sm mx-2"><strong class="text-dark">Added By:</strong> &nbsp; <?php echo $plugin['first_name']; ?></li>
                    <li class="d-inline-block pt-0 text-sm"><strong class="text-dark">Added Date:</strong> &nbsp; <?php echo dateTimeDateFunction($plugin['plugin_date_added']); ?></li>
                  </ul>
                  <ul>
        
                    <li class="d-inline-block pt-0 text-sm mx-2"><strong class="text-dark">Updated By:</strong> &nbsp; <?php if($plugin['plugin_updated_by'] != NULL){ echo $this->users_model->get_user($plugin['plugin_updated_by'])['first_name']; }else{ echo "-"; } ?></li>
                    <li class="d-inline-block pt-0 text-sm"><strong class="text-dark">Updated Date:</strong> &nbsp; <?php echo dateTimeDateFunction($plugin['plugin_date_update']); ?></li>
                  </ul>
              </div>
            </div>
            <!-- <hr class="horizontal dark mt-0 mb-2"> -->
          </div>
        </div>
      </div>
    </div>



          <div class="modal-custom d-none" id="approval_form">
      <div class="row">
        <div class="col">
          <div class="card card-custom blue-grey darken-1 p-4 col-5">
            <?php echo form_open('plugins/for-review-view/'.$plugin['id']); ?>
            <div class="card-content white-text">
              <span class="card-title h6 pb-3">Update Status</span>
              <hr class="my-2">
                  <div class="col-sm-12">
                      <div class="input-group input-group-static mb-3">
                        <label>Additional Notes</label>
                        <textarea name="reviewed_notes" id="reviewed_notes" required></textarea>
                      </div>
                  </div>
                   <div class="input-group input-group-static mb-3">
                          <select class="form-control" id="plugin_status" name="plugin_status" required>
                            <option value="">For Review</option>
                            <option value="1">Approved</option>
                            <option value="2">Not Safe</option>
   
                          </select>
                      </div>
                        
                  
            </div>
            <div class="card-action mt-2">
            <input type="submit" name="save_btn" value="Save" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Save">
              <a href="#" class="btn btn-sm btn-danger close-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Close"><i class="large material-icons">close</i></a>
              <?php echo form_close(); ?>

            </div>
          </div>
        </div>
      </div>
      </div>