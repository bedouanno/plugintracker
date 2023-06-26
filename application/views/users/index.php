<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-center px-3">
                <h6 class="text-white ps-3 d-inline-block pt-3">List of Users/Commitee</h6>
                <a href="<?php echo base_url(); ?>users/create" class="btn btn-success mr-3 d-block mr-5">Add User</a> 
              </div>
            </div>
            <div class="card-body px-3 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="userList">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Username</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Password</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php foreach($users as $user): ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $user['first_name']; ?></h6>
                            <p class="text-xs text-secondary mb-0"><a href="<?php echo base_url(); ?>users/view/<?php echo $user['id']; ?>" target="_blank"><?php echo $user['first_name'].' '.$user['last_name']; ?></a></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $user['username']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php //echo $user['password']; ?>**************************************</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $user['position_name']; ?></p>
                      </td>
                  
                      <td class="align-middle">
                        <a href="<?php echo base_url(); ?>users/view/<?php echo $user['id']; ?>" class="badge bg-success text-success font-weight-bold text-xxs text-white">
                          View
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