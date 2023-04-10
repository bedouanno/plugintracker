<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= ucwords($title); ?></h1>
        <p class="mt-2">Please input your research here.</p>
    </div>

    <div class="">
        <?php echo form_open('research'); ?>
        <div class="row mb-3">
            <label for="plugin_name" class="col-sm-2 col-form-label">Plugin Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="plugin_name" name="plugin_name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="plugin_author" class="col-sm-2 col-form-label">Author</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="plugin_author"  name="plugin_author">
            </div>
        </div>
        <div class="row mb-3">
            <label for="plugin_version" class="col-sm-2 col-form-label">Version</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="plugin_version"  name="plugin_version">
            </div>
        </div>
        <div class="row mb-3">
            <label for="plugin_wptest" class="col-sm-2 col-form-label">Tested Up to (WordPress Version)</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="plugin_wptest"  name="plugin_wptest">
            </div>
        </div>
        <div class="row mb-3">
            <label for="plugin_compatwp" class="col-sm-2 col-form-label">Compatible WordPress Version</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="plugin_compatwp"  name="plugin_compatwp">
            </div>
        </div>
        <div class="row mb-3">
            <label for="plugin_lastupdate" class="col-sm-2 col-form-label">Last Updated</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="plugin_lastupdate"  name="plugin_lastupdate">
            </div>
        </div>
        <div class="row mb-3">
            <label for="plugin_notes" class="col-sm-2 col-form-label">Security Notes</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="plugin_notes"  name="plugin_notes">
            </div>
        </div>
        <div class="row mb-3">
            <label for="plugin_conclusion" class="col-sm-2 col-form-label">Conclusion</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="plugin_conclusion"  name="plugin_conclusion">
            </div>
        </div>
        <div class="row mb-3 form-floating">
            <label for="plugin_requestedby" class="col-sm-2 col-form-label">REQUESTED BY</label>
            <div class="col-sm-10">
                <select class="form-select" id="plugin_requestedby" name="plugin_requestedby" aria-label="Floating label select example">
                    <option selected>Select</option>
                    <option value="Standard Protocol">Standard Protocol</option>
                    <option value="Client Request">Client Request</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="plugin_dateadded" class="col-sm-2 col-form-label">Date Added</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="plugin_dateadded"  name="plugin_dateadded">
            </div>
        </div>
          <button type="submit" class="btn btn-primary mt-4 text-right">Submit</button>
        <?php echo form_close(); ?>
    </div>


    <table class="table table-striped mt-5 pt-5">
    <thead>
      <tr>
        <th scope="col">Plugin Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($posts as $post): ?>  
      <tr>
        <td><?php echo $post['plugin_name']; ?></td>
        <td><a href="list">View Details</a></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
    </table>

</div>
<!-- /.container-fluid -->

