<footer>
    <center>&copy; Copyright <?php echo date('Y'); ?></center>
</footer>

<!-- jQuery -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>

<!-- Materialize JavaScript -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>

<!-- DataTables -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tablesscript.js"></script>

<!-- Plugins JavaScript - Some Specific JS codes for Plugin Settings -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>

<!-- Initialization Script -->
<script type="text/javascript">
    $(".button-collapse").sideNav();

    $('#alert_close').click(function() {
        $("#alert_box").fadeOut("slow");
    });
</script>
</body>
</html>
