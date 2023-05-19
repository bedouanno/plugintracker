<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-danger shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-center px-3">
                <h6 class="text-white ps-3 d-inline-block pt-3">List of Not Safe Plugins</h6>
                <a href="<?php echo base_url(); ?>" class="btn btn-info mr-3 d-block mr-5"><span><i class="fa fa-home text-white text-sm"></i> Back to Home Page </span></a> 
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Plugin Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Added By (Committee)</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Version</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tested Up to <span class="d-block">(WordPress Version)</span></th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Compatible <span class="d-block">WordPress Version</span></th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Updated</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Requested By</th>
                      <th class="text-secondary opacity-7 text-center">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($plugins as $plugin): ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $plugin['plugin_name']; ?></h6>
                            <p class="text-xs text-secondary mb-0"><a href="<?php echo $plugin['plugin_link']; ?>" target="_blank"><?php echo $plugin['plugin_link']; ?></a></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">
                        <?php echo $this->users_model->get_user($plugin['plugin_added_by'])['first_name']; ?>
                        </p>
    
                      </td>
                      <td class="align-middle text-left text-sm">
                        <!-- <span class="badge badge-sm bg-gradient-success"><?php //echo $plugin['plugin_version']; ?></span> -->
                          <p class="text-xs font-weight-bold mb-0"><?php echo $plugin['plugin_version']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                          <p class="text-xs font-weight-bold mb-0"><?php echo $plugin['plugin_testup_wp']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                          <p class="text-xs font-weight-bold mb-0"><?php echo $plugin['plugin_compatible_wp']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                          <p class="text-xs font-weight-bold mb-0"><?php echo $plugin['plugin_last_updated']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                      <!-- <?php //echo $rby ?> -->
                          <p class="text-xs font-weight-bold mb-0"><?php echo $request_by[$plugin['plugin_requested_by']]; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <a href="javascript:;" class="badge bg-danger text-success font-weight-bold text-xxs text-white">
                          Not Safe
                        </a>
                        <a href="<?php echo base_url(); ?>view/plugin/id-<?php echo $plugin['id']; ?>" class="badge bg-secondary text-success font-weight-bold text-xxs text-white">
                          <i class="material-icons text-xxs position-relative">visibility</i>
                        </a>
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