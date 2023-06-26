<? $object; ?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Number of Plugins</p>
                <h4 class="mb-0"><?php echo $this->plugins_model->get_review_count(); ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Users</p>
                <h4 class="mb-0"><?php echo $this->users_model->get_users_count(); ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
            </div>
          </div>
        </div>

      </div>
      <div class="row mt-4">

      </div>
      <div class="row mb-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Activity Log</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">30 Reviewed</span> this month
                  </p>
                </div>
                <!-- <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="card-body px-3 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0" id="dashBoardTable">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Plugins</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Users</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Notes</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($activity_logs as $log): ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
  


                        <?php  if($log['plugin_image_link'] != NULL){ ?>
                        <img src="<?php echo $log['plugin_image_link']; ?>" alt="profile_image" class="avatar avatar-sm me-3">
                        <?php }else{ ?>
                        <img src="https://www.nicepng.com/png/detail/39-395944_logo-wordpress-plugin-logo.png" class="avatar avatar-sm me-3" alt="profile_image">
                        <?php } ?>
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $log['plugin_name']; ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <!-- <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="<?php echo base_url(); ?>assetsv2/img/team-1.jpg" alt="team1">
                          </a> -->
                          

                          <?php echo $this->users_model->get_user($log['user_id_log'])['first_name']; ?>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <?php 
                        // switch ($log['plugin_status']) {
                        //     case 0:
                        //         $statusclass = "text-info";
                        //         $status_name = "For review";
                        //         break;
                        //     case 1:
                        //         $statusclass = "text-success";
                        //         $status_name = "Approved";
                        //         break;
                        //     case 2:
                        //         $statusclass = "text-danger";
                        //         $status_name = "Not safe";
                        //         break;
                        // }
                        ?>
                        <span class="text-xs font-weight-bold"> <?php echo $log['activity_desc']; ?> </span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-xs font-weight-bold text-info"><?php echo dateTimeDateFunction($log['activity_datetime']); ?></span>
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

