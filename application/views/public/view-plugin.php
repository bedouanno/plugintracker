<? $object; ?>
    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
        <!-- <a href="">Tested</a> -->
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
              <h5 class="mb-1">
                <?php echo $plugin['plugin_name']; ?>
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
                <a href="<?php echo $plugin['plugin_link']; ?>" target="_blank"><?php echo $plugin['plugin_link']; ?></a>
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 bg-success text-white" href="javascript:; " role="tab" aria-selected="true">
                    <i class="material-icons text-lg position-relative">info</i>
                    <span class="ms-1">Plugin Information</span>
                  </a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link mb-0 px-0 py-1 bg-secondary text-white " 
                  
                  <?php if($status['plugin_status'] == 1 ):  ?>
                  href="<?php echo base_url(); ?>approved-list" role="tab" 
                  <?php endif; ?>
                  
                <?php if($status['plugin_status'] == 2 ):  ?>
                href="<?php echo base_url(); ?>not-safe-list" role="tab" 
                  <?php endif; ?>
                  
                  
                  aria-selected="true">
                    <i class="material-icons text-lg position-relative">dehaze</i>
                    <span class="ms-1">Back to List</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 bg-secondary text-white " href="<?php echo base_url(); ?>" role="tab" aria-selected="true">
                    <i class="material-icons text-lg position-relative">home</i>
                    <span class="ms-1">Home</span>
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
              <div class="card card-plain h-100">
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
            <hr class="horizontal dark mt-0 mb-2">
            <div class="col-12 mt-4">
              <div class="mb-5 ps-3">
                <h6 class="mb-1">Related Plugins <span class="text-danger text-xxs font-italic">(Coming Soon...)</span></h6>
                <!-- <p class="text-sm">Architects design houses</p> -->
              </div>
              <div class="row">
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="<?php echo base_url(); ?>assetsv2/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <!-- <p class="mb-0 text-sm">Accessibility</p> -->
                      <a href="javascript:;">
                        <h5>
                          Plugin Name
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        <span class="badge badge-sm bg-secondary">Tags</span>
                        <span class="badge badge-sm bg-secondary">Tags</span>
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Plugin</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>assetsv2/img/team-4.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>assetsv2/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>assetsv2/img/team-2.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>assetsv2img/team-1.jpg">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="<?php echo base_url(); ?>assetsv2/img/home-decor-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <!-- <p class="mb-0 text-sm">Accessibility</p> -->
                      <a href="javascript:;">
                        <h5>
                          Plugin Name
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        <span class="badge badge-sm bg-secondary">Tags</span>
                        <span class="badge badge-sm bg-secondary">Tags</span>
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Plugin</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>assetsv2/img/team-4.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>assetsv2/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>assetsv2/img/team-2.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>assetsv2img/team-1.jpg">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="<?php echo base_url(); ?>assetsv2/img/home-decor-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <!-- <p class="mb-0 text-sm">Accessibility</p> -->
                      <a href="javascript:;">
                        <h5>
                          Plugin Name
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        <span class="badge badge-sm bg-secondary">Tags</span>
                        <span class="badge badge-sm bg-secondary">Tags</span>
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Plugin</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>assetsv2/img/team-4.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>assetsv2/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>assetsv2/img/team-2.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>assetsv2img/team-1.jpg">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="https://images.unsplash.com/photo-1606744824163-985d376605aa?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <!-- <p class="mb-0 text-sm">Accessibility</p> -->
                      <a href="javascript:;">
                        <h5>
                          Plugin Name
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        <span class="badge badge-sm bg-secondary">Tags</span>
                        <span class="badge badge-sm bg-secondary">Tags</span>
                        <span class="badge badge-sm bg-secondary">Tags</span>
                      </p> 
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Plugin</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>assetsv2/img/team-4.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>assetsv2/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>assetsv2/img/team-2.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>assetsv2img/team-1.jpg">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>