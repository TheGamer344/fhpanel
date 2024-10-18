

<?php $__env->startSection('title'); ?>
    Free Servers
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
    <h1>Free Servers <small>Manage free server packages, edit times.</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('admin.index')); ?>">Admin</a></li>
        <li class="active">Free Servers</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xs-12 col-lg-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Server Packages</h3>
                    <div class="box-tools">
                        <a class="btn btn-success btn-sm" href="<?php echo e(route('admin.freeservers.create')); ?>">New</a>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Egg(s)</th>
                                <th>Node(s)</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($package->id); ?></td>
                                    <td><?php echo e($package->name); ?></td>
                                    <td><a href="javascript:;" title="<?php echo e($package->egg_names); ?>" data-toggle="tooltip" data-placement="top">Show</a></td>
                                    <td><a href="javascript:;" title="<?php echo e($package->node_names); ?>" data-toggle="tooltip" data-placement="top">Show</a></td>
                                    <td>
                                        <a class="btn btn-primary btn-xs" href="<?php echo e(route('admin.freeservers.view', $package->id)); ?>"><i class="fa fa-pencil"></i> Edit</a>
                                        <button class="btn btn-danger btn-xs" data-action="delete" data-id="<?php echo e($package->id); ?>"><i class="fa fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-lg-4">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Settings</h3>
                </div>
                <form method="post" action="<?php echo e(route('admin.freeservers.settings')); ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="limit">Free Server Limit</label>
                            <input type="number" id="limit" name="limit" class="form-control" placeholder="1" value="<?php echo e(old('limit', $limit)); ?>">
                        </div>
                        <div class="form-group">
                            <label for="time">Renew Time</label>
                            <div class="input-group">
                                <input type="number" id="time" name="time" class="form-control" placeholder="24" value="<?php echo e(old('time', $time)); ?>">
                                <span class="input-group-addon">hour(s)</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="delete">Delete Time (after the server suspended)</label>
                            <div class="input-group">
                                <input type="number" id="delete" name="delete" class="form-control" placeholder="24" value="<?php echo e(old('delete', $delete)); ?>">
                                <span class="input-group-addon">hour(s)</span>
                            </div>
                            <span class="text-muted small">If you set it to <code>0</code>, the server will be deleted immediately when it's suspended.</span>
                        </div>
                    </div>
                    <div class="box-footer">
                        <?php echo csrf_field(); ?>

                        <button class="btn btn-success pull-right" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer-scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer-scripts'); ?>

    <script>
        $('[data-action="delete"]').click(function (event) {
            event.preventDefault();
            let self = $(this);
            swal({
                title: '',
                type: 'warning',
                text: 'Are you sure you want to delete this package?',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                confirmButtonColor: '#d9534f',
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
                cancelButtonText: 'Cancel',
            }, function () {
                $.ajax({
                    method: 'DELETE',
                    url: '<?php echo e(route('admin.freeservers.delete')); ?>',
                    headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
                    data: {
                        id: self.data('id')
                    }
                }).done((data) => {
                    swal({
                        type: 'success',
                        title: 'Success!',
                        text: 'You have successfully deleted this package.'
                    });

                    self.parent().parent().slideUp();
                }).fail(() => {
                    swal({
                        type: 'error',
                        title: 'Ooops!',
                        text: 'A system error has occurred! Please try again later...'
                    });
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pterodactyl/resources/views/admin/freeservers/list.blade.php ENDPATH**/ ?>