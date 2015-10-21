<!-- jQuery 2.1.4 -->
<script src="/bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/bower_components/AdminLTE/dist/js/app.min.js"></script>

<script type="text/javascript">
$(function() {
    $('.sidebar-menu li[data-menu=<?php echo $menu ?>]').addClass('active');
    $('.sidebar-menu li[data-menu=<?php echo $menu ?>] li[data-menu=<?php echo $submenu ?>]').addClass('active');
});
</script>