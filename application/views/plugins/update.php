    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
 <a href="javascript:;" id="btn_img" onClick="popup_sn('#imgl_form')" class="d-block" style="width:100%">
              <?php  if($plugin['plugin_image_link'] != NULL){ ?>
              <img src="<?php echo $plugin['plugin_image_link']; ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
              <?php }else{ ?>
              <img src="https://www.nicepng.com/png/detail/39-395944_logo-wordpress-plugin-logo.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
              <?php } ?>
</a>
            </div>
          </div>
          <div class="col my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                
                    <div class="col-md-4 text-left">
                    <?php echo $plugin['plugin_name']; ?>
                      <a href="javascript:;" onClick="popup_sn('#pl_form')">
                        <i class="fas fa-edit text-secondary text-xs" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Plugin Name and Link"></i>
                      </a>
                    </div>
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
                  <a class="nav-link mb-0 px-0 py-1" href="<?php echo base_url(); ?>plugins/view/<?php echo $plugin['id']; ?>" role="tab" aria-selected="false">
                    <i class="material-icons text-lg position-relative">info</i>
                    <span class="ms-1">Plugin Information</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 bg-success text-white"  href="<?php echo base_url(); ?>plugins/update/<?php echo $plugin['id']; ?>" role="tab" aria-selected="true">
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
                <?php echo form_open('plugins/update/'.$plugin['id']); ?>
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Author:</strong> &nbsp; <input class="form-control-outline" name="plugin_author" type="text" value="<?php echo $plugin['plugin_author']; ?>"> </li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Version:</strong> &nbsp;  <input type="text" name="plugin_version"  value="<?php echo $plugin['plugin_version']; ?>"></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Tested up to (WordPress Version):</strong> &nbsp; <input  name="plugin_testup_wp" type="text" value="<?php echo $plugin['plugin_testup_wp'];  ?>"></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Compatible WordPress Version:</strong> &nbsp; <input type="text" name="plugin_compatible_wp" value="<?php echo $plugin['plugin_compatible_wp'];  ?>"></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Last Update:</strong> &nbsp; <input type="text" name="plugin_last_updated" value="<?php echo $plugin['plugin_last_updated'];  ?>"> </li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Request By:</strong> &nbsp; <div class="input-group input-group-static mb-4">
                          <select class="form-control" id="request_type" name="plugin_requested_by" required>
                            <option value="">Click here to select</option>
                            <option value="1" <?php if($plugin['plugin_requested_by'] == 1) { echo 'selected';} ?>>Standard Protocol</option>
                            <option value="2" <?php if($plugin['plugin_requested_by'] == 2) { echo 'selected';} ?>>Client Request</option>
                          </select>
                        </div>
                      </li>
                  </ul>
                  <input type="submit" value="Update" name="update_btn" class="btn btn-sm btn-success col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 end-0">
                   <?php echo form_close(); ?>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">Security Notes 
                        <a href="javascript:;" onClick="popup_sn('#sn_form')">
                        <i class="fas fa-edit text-secondary text-xs" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Security Notes"></i>
                      </a>
                    </h6>
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
                  <h6 class="mb-0">Conclusion 
                      <a href="javascript:;" onClick="popup_sn('#c_form')">
                        <i class="fas fa-edit text-secondary text-xs" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Conclusion"></i>
                      </a>
                  </h6>
                </div>
                <div class="card-body p-3">
                  <p class="text-sm">
                    <?php echo $plugin['plugin_conclusion']; ?>
                  </p>
                </div>
              </div>
            </div>
            <!-- <div class="col-12 mt-4">
              <div class="mb-5 ps-3">
                <h6 class="mb-1">Projects</h6>
                <p class="text-sm">Architects design houses</p>
              </div>
              <div class="row">
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="../assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <p class="mb-0 text-sm">Project #2</p>
                      <a href="javascript:;">
                        <h5>
                          Modern
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        As Uber works through a huge amount of internal management turmoil.
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                            <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                            <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                            <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                            <img alt="Image placeholder" src="../assets/img/team-4.jpg">
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
                        <img src="../assets/img/home-decor-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <p class="mb-0 text-sm">Project #1</p>
                      <a href="javascript:;">
                        <h5>
                          Scandinavian
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Music is something that every person has his or her own specific opinion about.
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                            <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                            <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                            <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                            <img alt="Image placeholder" src="../assets/img/team-2.jpg">
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
                        <img src="../assets/img/home-decor-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <p class="mb-0 text-sm">Project #3</p>
                      <a href="javascript:;">
                        <h5>
                          Minimalist
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Different people have different taste, and various types of music.
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                            <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                            <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                            <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                            <img alt="Image placeholder" src="../assets/img/team-1.jpg">
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
                      <p class="mb-0 text-sm">Project #4</p>
                      <a href="javascript:;">
                        <h5>
                          Gothic
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Why would anyone pick blue over pink? Pink is obviously a better color.
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                            <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                            <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                            <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                            <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>


      <div class="modal-custom d-none" id="sn_form">
      <div class="row">
        <div class="col">
          <div class="card card-custom blue-grey darken-1 p-4 col-5">
          <?php echo form_open('plugins/update/'.$plugin['id']); ?>
            <div class="card-content white-text">
              <span class="card-title h6 pb-3">Security Notes</span>
              <hr class="my-2">
              <textarea name="security_notes" id="security_notes"><?php echo $plugin['plugin_security_notes']; ?></textarea>
            </div>
            <div class="card-action mt-2">
              <input type="submit" name="update_sn_form" value="Update" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Update">
              <a href="#" class="btn btn-sm btn-danger close-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Close"><i class="large material-icons">close</i></a>
            <?php echo form_close(); ?>

            </div>
          </div>
        </div>
      </div>
      </div>


      <div class="modal-custom d-none" id="c_form">
      <div class="row">
        <div class="col">
          <div class="card card-custom blue-grey darken-1 p-4 col-5">
          <?php echo form_open('plugins/update/'.$plugin['id']); ?>
            <div class="card-content white-text">
              <span class="card-title h6 pb-3">Conclusion</span>
              <hr class="my-2">
              <textarea name="conclusion" id="conclusion"><?php echo $plugin['plugin_conclusion']; ?></textarea>
            </div>
            <div class="card-action mt-2">
              <input type="submit" name="update_c_form" value="Update" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Update">
              <a href="#" class="btn btn-sm btn-danger close-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Close"><i class="large material-icons">close</i></a>
            <?php echo form_close(); ?>

            </div>
          </div>
        </div>
      </div>
      </div>


      <div class="modal-custom d-none" id="pl_form">
      <div class="row">
        <div class="col">
          <div class="card card-custom blue-grey darken-1 p-4 col-5">
          <?php echo form_open('plugins/update/'.$plugin['id']); ?>
            <div class="card-content white-text">
            
              <span class="card-title h6 pb-3">Basic Information</span>
              <hr class="my-2">
                  <div class="col-sm-12">
                    <div class="input-group input-group-static mb-3">
                      <label>Plugin Name</label>
                      <input type="text" class="form-control" name="plugin_name" value="<?php echo $plugin['plugin_name']; ?>">
                    </div>
                    <div class="input-group input-group-static mb-3">
                      <label>Plugin Link</label>
                      <input type="text" class="form-control" name="plugin_link" value="<?php echo $plugin['plugin_link']; ?>">
                    </div>
                  </div>
            </div>
            <div class="card-action mt-2">
            <input type="submit" name="update_pl_form" value="Update" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Update">
              <a href="#" class="btn btn-sm btn-danger close-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Close"><i class="large material-icons">close</i></a>
              <?php echo form_close(); ?>

            </div>
          </div>
        </div>
      </div>
      </div>

    
      <div class="modal-custom d-none" id="imgl_form">
      <div class="row">
        <div class="col">
          <div class="card card-custom blue-grey darken-1 p-4 col-5">
            <?php echo form_open('plugins/update/'.$plugin['id']); ?>
            <div class="card-content white-text">
              <span class="card-title h6 pb-3">Basic Information</span>
              <hr class="my-2">
                  <div class="col-sm-12">
                      <div class="input-group input-group-static mb-3">
                        <label>Image plugin Link (Optional)</label>
                        <input type="text" class="form-control" name="plugin_image_link" value="<?php echo $plugin['plugin_image_link'] ?>">
                      </div>
                  </div>
            </div>
            <div class="card-action mt-2">
            <input type="submit" name="update_imgl_form" value="Update" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Update">
              <a href="#" class="btn btn-sm btn-danger close-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Close"><i class="large material-icons">close</i></a>
              <?php echo form_close(); ?>

            </div>
          </div>
        </div>
      </div>
      </div>