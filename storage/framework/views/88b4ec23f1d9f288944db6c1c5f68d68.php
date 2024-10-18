<?php $__env->startSection('title'); ?>
    Server — <?php echo e($server->name); ?>: Delete
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
    <h1><?php echo e($server->name); ?><small>Delete this server from the panel.</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('admin.index')); ?>">Admin</a></li>
        <li><a href="<?php echo e(route('admin.servers')); ?>">Servers</a></li>
        <li><a href="<?php echo e(route('admin.servers.view', $server->id)); ?>"><?php echo e($server->name); ?></a></li>
        <li class="active">Delete</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.servers.partials.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Safely Delete Server</h3>
            </div>
            <div class="box-body">
                <p>This action will attempt to delete the server from both the panel and daemon. If either one reports an error the action will be cancelled.</p>
                <p class="text-danger small">Deleting a server is an irreversible action. <strong>All server data</strong> (including files and users) will be removed from the system.</p>
            </div>
            <div class="box-footer">
                <form id="deleteform" action="<?php echo e(route('admin.servers.view.delete', $server->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <button id="deletebtn" class="btn btn-danger">Safely Delete This Server</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Force Delete Server</h3>
            </div>
            <div class="box-body">
                <p>This action will attempt to delete the server from both the panel and daemon. If the daemon does not respond, or reports an error the deletion will continue.</p>
                <p class="text-danger small">Deleting a server is an irreversible action. <strong>All server data</strong> (including files and users) will be removed from the system. This method may leave dangling files on your daemon if it reports an error.</p>
            </div>
            <div class="box-footer">
                <form id="forcedeleteform" action="<?php echo e(route('admin.servers.view.delete', $server->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="force_delete" value="1" />
                    <button id="forcedeletebtn"" class="btn btn-danger">Forcibly Delete This Server</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer-scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer-scripts'); ?>
    <script>
    $('#deletebtn').click(function (event) {
        event.preventDefault();
        swal({
            title: '',
            type: 'warning',
            text: 'Are you sure that you want to delete this server? There is no going back, all data will immediately be removed.',
            showCancelButton: true,
            confirmButtonText: 'Delete',
            confirmButtonColor: '#d9534f',
            closeOnConfirm: false
        }, function () {
            $('#deleteform').submit()
        });
    });

    $('#forcedeletebtn').click(function (event) {
        event.preventDefault();
        swal({
            title: '',
            type: 'warning',
            text: 'Are you sure that you want to delete this server? There is no going back, all data will immediately be removed.',
            showCancelButton: true,
            confirmButtonText: 'Delete',
            confirmButtonColor: '#d9534f',
            closeOnConfirm: false
        }, function () {
            $('#forcedeleteform').submit()
        });
    });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pterodactyl/resources/views/admin/servers/view/delete.blade.php ENDPATH**/ ?>