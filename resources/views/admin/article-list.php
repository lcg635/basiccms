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
                    文章管理
                    <small>Optional description</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#"> <i class="fa fa-dashboard"></i>
                            Level
                        </a>
                    </li>
                    <li class="active">文章管理</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div>
                    <div>
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">文章列表</h3>
                                <div class="box-tools">
                                    <a class="btn btn-sm btn-default pull-right " href="<?php echo url('admin/articles/edit/0') ?>">
                                        <i class="fa fa-plus"></i> 添加文章
                                    </a>
                                    <form action="" method="get" class="pull-right">
                                        <div class="input-group" style="width: 250px;">
                                            <input type="text" name="keyword" class="form-control input-sm pull-right" placeholder="Search" value="<?php echo $keyword ?>">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="col-xs-1">#id</th>
                                            <th>标题</th>
                                            <th>标签</th>
                                            <th class="col-xs-3">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($articles as $article): ?>
                                        <tr>
                                            <td><?php echo $article->id ?></td>
                                            <td><?php echo $article->title ?></td>
                                            <td><?php echo $article->tags ?></td>
                                            <td>
                                                <a href="<?php echo url('admin/articles/edit/'.$article->id) ?>" class="btn btn-warning btn-xs">编辑</a>
                                                <a href="<?php echo url('admin/articles/delete/'.$article->id) ?>" onclick="return confirm('确认删除？')" class="btn btn-danger btn-xs">删除</a>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#id</th>
                                            <th>标题</th>
                                            <th>标签</th>
                                            <th>操作</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <!-- Main Footer -->
        <?php echo view('admin/footer') ?>

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <?php echo view('admin/scripts') ?>
    
</body>
</html>