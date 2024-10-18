
<?php 
    // Define extension information.
    $EXTENSION_ID = "nebula";
    $EXTENSION_NAME = "Nebula";
    $EXTENSION_VERSION = "2.0-1";
    $EXTENSION_DESCRIPTION = "Pterodactyl takes flight.";
    $EXTENSION_ICON = "/assets/extensions/nebula/icon.jpg";
    $EXTENSION_WEBSITE = "[website]";
    $EXTENSION_WEBICON = "[webicon]";
?>
<?php echo $__env->make('blueprint.admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title'); ?>
    <?php echo e($EXTENSION_NAME); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
    <?php echo $__env->yieldContent('extension.header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->yieldContent('extension.config'); ?>
    <?php echo $__env->yieldContent('extension.description'); ?><!--
  =================================
  DEPRECATED IN FAVOR OF NEW EDITOR
  =================================
-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pterodactyl/resources/views/admin/extensions/nebula/index.blade.php ENDPATH**/ ?>