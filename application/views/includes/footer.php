

     </main>
    

      
      
   
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assetsv2/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assetsv2/js/core/popper.min.js" ></script>
<script src="<?php echo base_url(); ?>assetsv2/js/core/bootstrap.min.js" ></script>
<script src="<?php echo base_url(); ?>assetsv2/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="<?php echo base_url(); ?>assetsv2/js/plugins/smooth-scrollbar.min.js" ></script>






<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url(); ?>assetsv2/js/material-dashboard.min.js?v=3.1.0"></script>



  <script src="<?php echo base_url(); ?>assetsv2/sweet-modal/jquery.sweet-modal.min.js"></script>

   <?php if($this->session->flashdata('msg')): ?>
    <script>
    $.sweetModal({
    content: "<strong style='color:#000'><?php echo $this->session->flashdata('msg'); ?></strong>",
    icon: $.sweetModal.ICON_SUCCESS});
    </script>
   <?php endif; ?> 


<script src="https://cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>


<script>
    CKEDITOR.addCss('.cke_editable p { margin: 0 !important; }');
    CKEDITOR.ENTER_BR = 1;
    CKEDITOR.config.autoParagraph = false;
    CKEDITOR.replace( 'security_notes' );
    CKEDITOR.replace( 'conclusion' );
</script>

<script>
    $(function () {

  $('[data-toggle="tooltip"]').tooltip();


})
</script>

  </body>

</html>
