    
	
	<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>DINESHKUMMARC</b> RequirementAnalysis | Version 2.0
        </div>
        <strong>Copyright &copy; <strong><?php echo @date('Y'); ?></strong> <a href="<?php echo base_url(); ?>dashboard">DINESHKUMMARC</a>.</strong> All rights reserved.
        <p class="footer">Page time: <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter: V<strong>' . CI_VERSION . '</strong>' : '' ?></p>
    </footer>
    
    <!-- jQuery UI 1.11.2 -->
    <!-- <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script> -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script type="text/javascript" src="<?php echo base_url().PLUGINS_FULL."tinymce/tinymce.min.js?".VER;?>"></script>
    <script src="<?php echo base_url()."assets/js/plugins.min.js?".VER; ?>" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/js/custom.min.js?".VER; ?>" type="text/javascript"></script>
  </body>
</html>