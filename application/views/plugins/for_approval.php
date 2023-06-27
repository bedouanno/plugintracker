<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-danger shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-center px-3">
                <h6 class="text-white ps-3 d-inline-block pt-3">List of For Review Plugin</h6>
                <!-- <a href="<?php echo base_url(); ?>plugins/create" class="btn btn-success mr-3 d-block mr-5">Add Plugin</a>  -->
              </div>
            </div>
            <div class="card-body px-3 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="forApproval">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Plugin Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Added By (Committee)</th>
                      <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Version</th> -->
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tested Up to <span class="d-block">(WordPress Version)</span></th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Compatible <span class="d-block">WordPress Version</span></th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Updated</th> -->
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Requested By</th>
                      <th class="text-secondary opacity-7 text-center">Status/Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($plugins as $plugin): ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex justify-content-center">
                            <div>
                          <?php  if($plugin['plugin_image_link'] != NULL){ ?>
                        <img src="<?php echo $plugin['plugin_image_link']; ?>" alt="profile_image" class="avatar avatar-sm me-3">
                        <?php }else{ ?>
                        <img src="https://www.nicepng.com/png/detail/39-395944_logo-wordpress-plugin-logo.png" class="avatar avatar-sm me-3" alt="profile_image">
                        <?php } ?>
                          </div>

                            <div>
                            <h6 class="mb-0 text-sm"><?php echo $plugin['plugin_name']; ?></h6>
                            <p class="text-xs text-secondary mb-0"><a href="<?php echo $plugin['plugin_link']; ?>" target="_blank"><?php echo $plugin['plugin_link']; ?></a></p>
                            </div>

                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">
                        <?php echo $this->users_model->get_user($plugin['plugin_added_by'])['first_name']; ?>
                        </p>
    
                      </td>
                      <!-- <td class="align-middle text-left text-sm">
                          <p class="text-xs font-weight-bold mb-0"><?php echo $plugin['plugin_version']; ?></p>
                      </td> -->
                      <td class="align-middle text-center">
                          <p class="text-xs font-weight-bold mb-0"><?php echo $plugin['plugin_testup_wp']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                          <p class="text-xs font-weight-bold mb-0"><?php echo $plugin['plugin_compatible_wp']; ?></p>
                      </td>
                      <!-- <td class="align-middle text-center">
                          <p class="text-xs font-weight-bold mb-0"><-?php echo $plugin['plugin_last_updated']; ?></p>
                      </td> -->
                      <td class="align-middle text-center">
                      <!-- <?php //echo $rby ?> -->
                          <p class="text-xs font-weight-bold mb-0"><?php echo $request_by[$plugin['plugin_requested_by']]; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <?php if($user_info['role'] != 2){ ?>
                        <a href="<?php echo base_url(); ?>plugins/for-review-view/<?php echo $plugin['id']; ?>" class="badge bg-danger text-success font-weight-bold text-xxs text-white">
                          Review
                        </a>
                        <?php  }else{ ?>
                        <a href="javascript:;" class="badge bg-info text-success font-weight-bold text-xxs text-white">
                          For Review
                        </a>
                        <?php  } ?>
                      </td>
                    </tr>
                    <?php endforeach; ?> 

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>