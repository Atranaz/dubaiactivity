

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>UAEACTIVITY</b> CMS | Version 1.0
        </div>
        <strong>Copyright &copy; 2017 <a href="<?php echo base_url(); ?>">UAEACTIVITY.ae</a>.</strong> All rights reserved.
    </footer>
    
    <!-- jQuery UI 1.11.2 -->
    <!-- <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script> -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>assets/cms/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/cms/dist/js/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/cms/dist/js/daterangepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/cms/dist/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/cms/js/jquery.validate.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/cms/js/validation.js" type="text/javascript"></script>
    <script type="text/javascript">
        var windowURL = window.location.href;
        pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
        var x= $('a[href="'+pageURL+'"]');
            x.addClass('active');
            x.parent().addClass('active');
        var y= $('a[href="'+windowURL+'"]');
            y.addClass('active');
            y.parent().addClass('active');
    </script>
    <script type="text/javascript">
        $(function() {
            $('input[name="expireOn"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                 locale: {
      format: 'YYYY-MM-DD'
    }
            });
        });
</script>
  </body>
</html>