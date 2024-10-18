<?php $__env->startSection('title'); ?>
    Updater
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
    <h1>Updater<small>Update your panel with ease.</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('admin.index')); ?>">Admin</a></li>
        <li class="active">Updater</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xs-12">
            <form action="<?php echo e(route('admin.updater')); ?>" enctype="multipart/form-data" method="POST" class="box">
                <div class="box-header">
                    <h3 class="box-title">Update your panel</h3>
                </div>
                <div class="box-body">
                    <div class="row my-row">
                        <div class="col-xs-12 col-sm-5">
                            <label for="url" class="control-label">Archive URL</label>
                            <div>
                                <input id="url" type="text" class="form-control" name="url" />
                                <p class="text-muted">
                                    <small>This is usually a "panel.zip" or a "panel.tar.gz" file. Supported types are: <code>.zip</code>, <code>.tar.gz</code>.</small>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-2 text-center" style="display: flex; justify-content: center; align-items: center;">
                            <i>or...</i>
                        </div>
                        <div class="col-xs-12 col-sm-5">
                            <label for="file" class="control-label">Upload an archive</label>
                            <input id="file" type="file" name="archive_file" accept="application/zip,application/gzip" />
                            <p class="text-muted">
                                <small>This is usually a "panel.zip" or a "panel.tar.gz" file. Supported types are: <code>.zip</code>, <code>.tar.gz</code>.</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <?php echo csrf_field(); ?>

                    <button type="submit" class="btn btn-sm btn-primary pull-right">Update</button>
                </div>
            </form>
            <?php if($canRestore): ?>
                <form action="<?php echo e(route('admin.updater.restore')); ?>" method="post" class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Rollback your panel</h3>
                    </div>
                    <div class="box-body">
                        <p>A backup of the previous version of the panel is available. You can restore that backup with the updater.</p>
                        <p>The restore process will <b>not</b> backup the panel. If you want to go back to this version, you'll need to update again.</p>
                        <p class="no-margin">
                            <label for="rollback">
                                <input type="checkbox" name="rollback" id="rollback">
                                Rollback previous database migrations. <span class="text-danger">May result in data loss. Use with caution.</span>
                            </label>
                        </p>
                    </div>
                    <div class="box-footer">
                    <?php echo csrf_field(); ?>

                    <button type="submit" class="btn btn-sm btn-danger pull-right">Restore</button>
                </div>
                </form>
            <?php endif; ?>
            <p class="text-muted">Copyright &copy; <?php echo e(date('Y')); ?> <a href="https://itsvic.dev">it's vic!</a> All Rights Reserved.</p>
        </div>
    </div>

    <style>
        .my-row {
            display: flex;
            flex-direction: column;
        }

        @media (min-width: 768px) {
            .my-row {
                flex-direction: row;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pterodactyl/resources/views/admin/updater/index.blade.php ENDPATH**/ ?>