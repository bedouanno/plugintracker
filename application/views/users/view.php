<? $object; ?>
<div class="container-fluid py-4">



<div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-xl-6 mb-xl-0 mb-4">
              <div class="card bg-transparent shadow-xl">
                <div class="overflow-hidden position-relative border-radius-xl">
                  <img src="<?php echo base_url(); ?>assetsv2/img/illustrations/pattern-tree.svg" class="position-absolute opacity-2 start-0 top-0 w-100 z-index-1 h-100" alt="pattern-tree" data-popupalt-original-title="null" title="pattern-tree">
                  <span class="mask bg-gradient-dark opacity-10"></span>
                  <div class="card-body position-relative z-index-1 p-3" data-popupalt-original-title="null" title="pattern-tree">
                    <i class="material-icons text-white p-2">wifi</i>
                    <h5 class="text-white mt-4 mb-5 pb-2"><?php echo $user['first_name'].' '.$user['last_name']; ?></h5>
                    <div class="d-flex" data-popupalt-original-title="null" title="null">
                      <div class="d-flex">
                        <div class="me-4">
                          <p class="text-white text-sm opacity-8 mb-0"><?php echo $user['position_name']; ?></p>
                          <h6 class="text-white mb-0"><?php echo $user['first_name'].' '.$user['last_name']; ?></h6>
                        </div>
                        <div>
                          <p class="text-white text-sm opacity-8 mb-0">Join Date</p>
                          <h6 class="text-white mb-0"><?php echo dateTimeDateFunction3($user['created_date']); ?></h6>
                         </div>
                      </div>
                      <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                        <img class="w-60 mt-2" src="<?php echo base_url(); ?>assetsv2/img/logos/mastercard.png" alt="logo" data-popupalt-original-title="null" title="logo">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="row">
                <div class="col-md-6 col-6">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                        <i class="material-icons opacity-10">account_balance</i>
                      </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                      <h6 class="text-center mb-0">-</h6>
                      <span class="text-xs">-</span>
                      <hr class="horizontal dark my-3">
                      <h5 class="mb-0">-</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-6">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                        <i class="material-icons opacity-10">account_balance_wallet</i>
                      </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                      <h6 class="text-center mb-0">-</h6>
                      <span class="text-xs">-</span>
                      <hr class="horizontal dark my-3">
                      <h5 class="mb-0">-</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Options</h6>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-md-12 mb-md-0 mb-4">
                      <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                        <img class="w-10 me-3 mb-0" src="<?php echo base_url(); ?>assetsv2/img/logos/mastercard.png" alt="logo">
                        <h6 class="mb-0">Update Information</h6>
                        <a href="<?php echo base_url(); ?>user/update/<?php echo $user['id']; ?>" class="ms-auto">
                        <i class="material-icons text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Information">edit</i>
                        </a>
                      </div>
                    </div>
                    <!-- <div class="col-md-6">
                      <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                        <img class="w-10 me-3 mb-0" src="../assets/img/logos/visa.png" alt="logo">
                        <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;5248</h6>
                        <i class="material-icons ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Card">edit</i>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Activity Log</h6>
                </div>
                <div class="col-6 text-end">
                  <!-- <button class="btn btn-outline-primary btn-sm mb-0">View All</button> -->
                </div>
              </div>
            </div>
            <div class="card-body p-3 pb-0">
              <ul class="list-group">
                <?php foreach($activity_logs as $log): ?>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm"><?php echo $log['plugin_name']; ?> - <?php echo $log['activity_datetime']; ?></h6>
                    <span class="text-xs"><?php echo $log['activity_desc']; ?></span>
                  </div>
                  <div class="d-flex align-items-center text-sm">
                    -
                    <a href="<?php echo base_url(); ?>plugins/view/<?php echo $log['plugin_id_log']; ?>" class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">widgets</i> view</a>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>



</div>