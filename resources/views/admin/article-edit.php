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

    <link rel="stylesheet" href="/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
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
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $id > 0 ? '编辑文章' : '添加文章' ?></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="<?php echo url('admin/articles/edit/'.$id) ?>" method="post">
                        <input type="hidden" name="id" value="<?php echo $id ?>" />
                        <div class="box-body pad">
                            <div class="form-group <?php if ($errors->has('title')) echo 'has-error' ?>">
                                <label>标题<?php if ($errors->has('title')) echo ': '.$errors->first('title') ?></label>
                                <input name="title" class="form-control" placeholder="文章标题" value="<?php echo $old['title'] ?>"/>
                            </div>
                            <div class="form-group">
                                <label>栏目</label>
                                <select name="category_id" class="form-control">
                                    <?php foreach ($categories as $category) : ?>
                                    <option value="<?php echo $category->id ?>" <?php if ($old['category_id'] == $category->id) echo 'selected' ?>>
                                        <?php echo $category->name ?>
                                    </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>标签</label>
                                <input name="tags" class="form-control" placeholder="文章标题，逗号分隔" value="<?php echo $old['tags'] ?>" />
                            </div>
                            <div class="form-group <?php if ($errors->has('content')) echo 'has-error' ?>">
                                <textarea class="textarea" name="content" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    <?php echo $old['content'] ?>
                                </textarea>
                                <label><?php if ($errors->has('content')) echo $errors->first('content') ?></label>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <!-- Main Footer -->
        <?php echo view('admin/footer') ?>

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <?php echo view('admin/scripts') ?>

    <script src="/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>$(function () { $(".textarea").wysihtml5(); });</script>

</body>
</html>