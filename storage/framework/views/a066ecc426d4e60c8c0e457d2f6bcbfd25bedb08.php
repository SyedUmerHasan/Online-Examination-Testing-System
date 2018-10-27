
<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Admin Panel')); ?></title>
  <?php echo $__env->make('admin.admin_include.ad_style', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Styles -->
</head>
<body class="menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">
  <!-- fixed-top-->

    <?php echo $__env->yieldContent('content'); ?>
  
  <?php echo $__env->make('admin.admin_include.ad_script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>