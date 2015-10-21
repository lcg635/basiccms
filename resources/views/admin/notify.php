<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/bower_components/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/bower_components/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/bower_components/google-fonts/fonts.css">
    <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
                    page. However, you can choose any other skin. Make sure you
                    apply the skin class to the body tag so the changes take effect.
        -->
    <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php echo view('admin/header_and_menu') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    系统提示
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="box box-default">
                    <div class="box-header">
                        <div class="box-title"></div>
                    </div>
                    <div class="box-body">
                        <div class="<?php echo $error ? 'modal-danger' : 'modal-success' ?>" style="position: relative;top: auto;bottom: auto;right: auto;left: auto;display: block;z-index: 1;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title"><?php echo $error ? '出错了' : '操作成功' ?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <p><?php echo $message ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <?php foreach ($buttons as $text => $url): ?>
                                        <a class="btn btn-outline" href="<?php echo $url ?>"><?php echo $text ?></a>
                                        <?php endforeach ?>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">Anything you want</div>
            <!-- Default to the left --> <strong>Copyright &copy; 2015
                <a href="#">Company</a>
                .</strong> 
            All rights reserved.
        </footer>

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="/bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/bower_components/AdminLTE/dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
                 Both of these plugins are recommended to enhance the
                 user experience. Slimscroll is required when using the
                 fixed layout. -->
</body>
</html>