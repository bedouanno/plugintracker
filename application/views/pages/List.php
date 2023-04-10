<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= ucwords($title); ?></h1>

    </div>

    <div class="row">
        <table class="table table-striped mt-5 pt-5">
            <thead>
            <tr>
                <th scope="col">Plugin Name</th>
                <th scope="col">Author</th>
                <th scope="col">Tested Up to (WordPress Version)</th>
                <th scope="col">Compatible WordPress Version</th>
                <th scope="col">Last Updated</th>
                <th scope="col">Security Notes</th>
                <th scope="col">Conclusion</th>
                <th scope="col">REQUESTED BY</th>
                <th scope="col">Standard Protocol</th>
                <th scope="col">Date Added</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($posts as $post): ?>  
            <tr>
                <td><?php echo $post['plugin_name']; ?></td>
                <td><?php echo $post['plugin_author']; ?></td>
                <td><?php echo $post['plugin_version']; ?></td>
                <td><?php echo $post['plugin_wptest']; ?></td>
                <td><?php echo $post['plugin_compatwp']; ?></td>
                <td><?php echo $post['plugin_lastupdate']; ?></td>
                <td><?php echo $post['plugin_notes']; ?></td>
                <td><?php echo $post['plugin_conclusion']; ?></td>
                <td><?php echo $post['plugin_requestedby']; ?></td>
                <td><?php echo $post['plugin_dateadded']; ?></td>
                <td><a href="<?php echo base_url(); ?>research/delete/<?php echo $post['plugin_id'] ?>">DELETE</a></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
    </div>

</div>
<!-- /.container-fluid -->