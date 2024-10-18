<?php $__env->startSection('title'); ?>
    Mounts &rarr; View &rarr; <?php echo e($mount->id); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
    <h1><?php echo e($mount->name); ?><small><?php echo e(str_limit($mount->description, 75)); ?></small></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('admin.index')); ?>">Admin</a></li>
        <li><a href="<?php echo e(route('admin.mounts')); ?>">Mounts</a></li>
        <li class="active"><?php echo e($mount->name); ?></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Mount Details</h3>
                </div>

                <form action="<?php echo e(route('admin.mounts.view', $mount->id)); ?>" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="PUniqueID" class="form-label">Unique ID</label>
                            <input type="text" id="PUniqueID" class="form-control" value="<?php echo e($mount->uuid); ?>" disabled />
                        </div>

                        <div class="form-group">
                            <label for="pName" class="form-label">Name</label>
                            <input type="text" id="pName" name="name" class="form-control" value="<?php echo e($mount->name); ?>" />
                        </div>

                        <div class="form-group">
                            <label for="pDescription" class="form-label">Description</label>
                            <textarea id="pDescription" name="description" class="form-control" rows="4"><?php echo e($mount->description); ?></textarea>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="pSource" class="form-label">Source</label>
                                <input type="text" id="pSource" name="source" class="form-control" value="<?php echo e($mount->source); ?>" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="pTarget" class="form-label">Target</label>
                                <input type="text" id="pTarget" name="target" class="form-control" value="<?php echo e($mount->target); ?>" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label">Read Only</label>

                                <div>
                                    <div class="radio radio-success radio-inline">
                                        <input type="radio" id="pReadOnlyFalse" name="read_only" value="0" <?php if(!$mount->read_only): ?> checked <?php endif; ?>>
                                        <label for="pReadOnlyFalse">False</label>
                                    </div>

                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="pReadOnly" name="read_only" value="1" <?php if($mount->read_only): ?> checked <?php endif; ?>>
                                        <label for="pReadOnly">True</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="form-label">User Mountable</label>

                                <div>
                                    <div class="radio radio-success radio-inline">
                                        <input type="radio" id="pUserMountableFalse" name="user_mountable" value="0" <?php if(!$mount->user_mountable): ?> checked <?php endif; ?>>
                                        <label for="pUserMountableFalse">False</label>
                                    </div>

                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="pUserMountable" name="user_mountable" value="1" <?php if($mount->user_mountable): ?> checked <?php endif; ?>>
                                        <label for="pUserMountable">True</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-footer">
                        <?php echo csrf_field(); ?>

                        <?php echo method_field('PATCH'); ?>


                        <button name="action" value="edit" class="btn btn-sm btn-primary pull-right">Save</button>
                        <button name="action" value="delete" class="btn btn-sm btn-danger pull-left muted muted-hover"><i class="fa fa-trash-o"></i></button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Eggs</h3>

                    <div class="box-tools">
                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addEggsModal">Add Eggs</button>
                    </div>
                </div>

                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th></th>
                        </tr>

                        <?php $__currentLoopData = $mount->eggs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $egg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="col-sm-2 middle"><code><?php echo e($egg->id); ?></code></td>
                                <td class="middle"><a href="<?php echo e(route('admin.nests.egg.view', $egg->id)); ?>"><?php echo e($egg->name); ?></a></td>
                                <td class="col-sm-1 middle">
                                    <button data-action="detach-egg" data-id="<?php echo e($egg->id); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Nodes</h3>

                    <div class="box-tools">
                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addNodesModal">Add Nodes</button>
                    </div>
                </div>

                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>FQDN</th>
                            <th></th>
                        </tr>

                        <?php $__currentLoopData = $mount->nodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $node): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="col-sm-2 middle"><code><?php echo e($node->id); ?></code></td>
                                <td class="middle"><a href="<?php echo e(route('admin.nodes.view', $node->id)); ?>"><?php echo e($node->name); ?></a></td>
                                <td class="middle"><code><?php echo e($node->fqdn); ?></code></td>
                                <td class="col-sm-1 middle">
                                    <button data-action="detach-node" data-id="<?php echo e($node->id); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addEggsModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?php echo e(route('admin.mounts.eggs', $mount->id)); ?>" method="POST">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color: #FFFFFF">&times;</span>
                        </button>

                        <h4 class="modal-title">Add Eggs</h4>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="pEggs">Eggs</label>
                                <select id="pEggs" name="eggs[]" class="form-control" multiple>
                                    <?php $__currentLoopData = $nests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <optgroup label="<?php echo e($nest->name); ?>">
                                            <?php $__currentLoopData = $nest->eggs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $egg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <?php if(! in_array($egg->id, $mount->eggs->pluck('id')->toArray())): ?>
                                                    <option value="<?php echo e($egg->id); ?>"><?php echo e($egg->name); ?></option>
                                                <?php endif; ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </optgroup>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <?php echo csrf_field(); ?>


                        <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addNodesModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?php echo e(route('admin.mounts.nodes', $mount->id)); ?>" method="POST">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color: #FFFFFF">&times;</span>
                        </button>

                        <h4 class="modal-title">Add Nodes</h4>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="pNodes">Nodes</label>
                                <select id="pNodes" name="nodes[]" class="form-control" multiple>
                                    <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <optgroup label="<?php echo e($location->long); ?> (<?php echo e($location->short); ?>)">
                                            <?php $__currentLoopData = $location->nodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $node): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <?php if(! in_array($node->id, $mount->nodes->pluck('id')->toArray())): ?>
                                                    <option value="<?php echo e($node->id); ?>"><?php echo e($node->name); ?></option>
                                                <?php endif; ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </optgroup>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <?php echo csrf_field(); ?>


                        <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer-scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer-scripts'); ?>

    <script>
        $(document).ready(function() {
            $('#pEggs').select2({
                placeholder: 'Select eggs..',
            });

            $('#pNodes').select2({
                placeholder: 'Select nodes..',
            });

            $('button[data-action="detach-egg"]').click(function (event) {
                event.preventDefault();

                const element = $(this);
                const eggId = $(this).data('id');

                $.ajax({
                    method: 'DELETE',
                    url: '/admin/mounts/' + <?php echo e($mount->id); ?> + '/eggs/' + eggId,
                    headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                }).done(function () {
                    element.parent().parent().addClass('warning').delay(100).fadeOut();
                    swal({ type: 'success', title: 'Egg detached.' });
                }).fail(function (jqXHR) {
                    console.error(jqXHR);
                    swal({
                        title: 'Whoops!',
                        text: jqXHR.responseJSON.error,
                        type: 'error'
                    });
                });
            });

            $('button[data-action="detach-node"]').click(function (event) {
                event.preventDefault();

                const element = $(this);
                const nodeId = $(this).data('id');

                $.ajax({
                    method: 'DELETE',
                    url: '/admin/mounts/' + <?php echo e($mount->id); ?> + '/nodes/' + nodeId,
                    headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                }).done(function () {
                    element.parent().parent().addClass('warning').delay(100).fadeOut();
                    swal({ type: 'success', title: 'Node detached.' });
                }).fail(function (jqXHR) {
                    console.error(jqXHR);
                    swal({
                        title: 'Whoops!',
                        text: jqXHR.responseJSON.error,
                        type: 'error'
                    });
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pterodactyl/resources/views/admin/mounts/view.blade.php ENDPATH**/ ?>