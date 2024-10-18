

<?php $__env->startSection('title'); ?>
    Free Servers
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
    <h1>Free Servers <small>Edit free server package.</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('admin.index')); ?>">Admin</a></li>
        <li><a href="<?php echo e(route('admin.freeservers')); ?>">Free Servers</a></li>
        <li class="active">View</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Edit Package</h3>
                    <div class="box-tools">
                        <a href="<?php echo e(route('admin.freeservers')); ?>" class="btn btn-sm btn-warning">Go Back</a>
                    </div>
                </div>
                <form method="post" action="<?php echo e(route('admin.freeservers.view', $package->id)); ?>">
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group col-xs-12 col-lg-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Package Name" value="<?php echo e(old('name', $package->name)); ?>">
                            </div>
                            <div class="form-group col-xs-12 col-lg-6">
                                <label for="image">Image</label>
                                <input type="text" class="form-control" id="image" name="image" placeholder="Image URL" value="<?php echo e(old('image', $package->image)); ?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group col-xs-12 col-lg-6">
                                <label for="node_ids">Node(s)</label>
                                <select class="form-control" id="node_ids" name="node_ids[]" multiple>
                                    <?php $__currentLoopData = $nodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $node): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($node->id); ?>" <?php echo e(in_array($node->id, old('node_ids', explode(',', $package->node_ids))) ? 'selected' : ''); ?>><?php echo e($node->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group col-xs-12 col-lg-6">
                                <label for="egg_ids">Egg(s)</label>
                                <select class="form-control" id="egg_ids" name="egg_ids[]" multiple>
                                    <?php $__currentLoopData = $eggs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $egg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($egg->id); ?>" <?php echo e(in_array($egg->id, old('egg_ids', explode(',', $package->egg_ids))) ? 'selected' : ''); ?>><?php echo e($egg->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group col-xs-12 col-lg-6">
                                <label for="memory">Memory</label>
                                <div class="input-group">
                                    <input type="number" id="memory" name="memory" class="form-control" placeholder="1024" value="<?php echo e(old('memory', $package->memory)); ?>">
                                    <span class="input-group-addon">MB</span>
                                </div>
                            </div>
                            <div class="form-group col-xs-12 col-lg-6">
                                <label for="disk">Disk</label>
                                <div class="input-group">
                                    <input type="number" id="disk" name="disk" class="form-control" placeholder="1024" value="<?php echo e(old('disk', $package->disk)); ?>">
                                    <span class="input-group-addon">MB</span>
                                </div>
                            </div>
                            <div class="form-group col-xs-12 col-lg-6">
                                <label for="cpu">CPU</label>
                                <div class="input-group">
                                    <input type="number" id="cpu" name="cpu" class="form-control" placeholder="100" value="<?php echo e(old('cpu', $package->cpu)); ?>">
                                    <span class="input-group-addon">%</span>
                                </div>
                            </div>
                            <div class="form-group col-xs-12 col-lg-6">
                                <label for="swap">Swap</label>
                                <div class="input-group">
                                    <input type="number" id="swap" name="swap" class="form-control" placeholder="0" value="<?php echo e(old('swap', $package->swap)); ?>">
                                    <span class="input-group-addon">MB</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group col-xs-12 col-lg-4">
                                <label for="database_limit">Database Limit</label>
                                <input type="number" id="database_limit" name="database_limit" class="form-control" placeholder="0" value="<?php echo e(old('database_limit', $package->database_limit)); ?>">
                            </div>
                            <div class="form-group col-xs-12 col-lg-4">
                                <label for="allocation_limit">Allocation Limit</label>
                                <input type="number" id="allocation_limit" name="allocation_limit" class="form-control" placeholder="0" value="<?php echo e(old('allocation_limit', $package->allocation_limit)); ?>">
                            </div>
                            <div class="form-group col-xs-12 col-lg-4">
                                <label for="backup_limit">Backup Limit</label>
                                <input type="number" id="backup_limit" name="backup_limit" class="form-control" placeholder="0" value="<?php echo e(old('backup_limit', $package->backup_limit)); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <?php echo csrf_field(); ?>

                        <button type="submit" class="btn btn-success pull-right">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer-scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer-scripts'); ?>

    <script>
        $('#node_ids').select2({
            placeholder: '- Select Node(s) -',
        });

        $('#egg_ids').select2({
            placeholder: '- Select Egg(s) -',
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pterodactyl/resources/views/admin/freeservers/view.blade.php ENDPATH**/ ?>