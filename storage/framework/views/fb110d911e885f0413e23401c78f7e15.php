<?php $__env->startSection('title'); ?>
    Database Hosts &rarr; View &rarr; <?php echo e($host->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
    <h1><?php echo e($host->name); ?><small>Viewing associated databases and details for this database host.</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('admin.index')); ?>">Admin</a></li>
        <li><a href="<?php echo e(route('admin.databases')); ?>">Database Hosts</a></li>
        <li class="active"><?php echo e($host->name); ?></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('admin.databases.view', $host->id)); ?>" method="POST">
    <div class="row">
        <div class="col-sm-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Host Details</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="pName" class="form-label">Name</label>
                        <input type="text" id="pName" name="name" class="form-control" value="<?php echo e(old('name', $host->name)); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="pHost" class="form-label">Host</label>
                        <input type="text" id="pHost" name="host" class="form-control" value="<?php echo e(old('host', $host->host)); ?>" />
                        <p class="text-muted small">The IP address or FQDN that should be used when attempting to connect to this MySQL host <em>from the panel</em> to add new databases.</p>
                    </div>
                    <div class="form-group">
                        <label for="pPort" class="form-label">Port</label>
                        <input type="text" id="pPort" name="port" class="form-control" value="<?php echo e(old('port', $host->port)); ?>" />
                        <p class="text-muted small">The port that MySQL is running on for this host.</p>
                    </div>
                    <div class="form-group">
                        <label for="pNodeId" class="form-label">Linked Node</label>
                        <select name="node_id" id="pNodeId" class="form-control">
                            <option value="">None</option>
                            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <optgroup label="<?php echo e($location->short); ?>">
                                    <?php $__currentLoopData = $location->nodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $node): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($node->id); ?>" <?php echo e($host->node_id !== $node->id ?: 'selected'); ?>><?php echo e($node->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </optgroup>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <p class="text-muted small">This setting does nothing other than default to this database host when adding a database to a server on the selected node.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">User Details</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="pUsername" class="form-label">Username</label>
                        <input type="text" name="username" id="pUsername" class="form-control" value="<?php echo e(old('username', $host->username)); ?>" />
                        <p class="text-muted small">The username of an account that has enough permissions to create new users and databases on the system.</p>
                    </div>
                    <div class="form-group">
                        <label for="pPassword" class="form-label">Password</label>
                        <input type="password" name="password" id="pPassword" class="form-control" />
                        <p class="text-muted small">The password to the account defined. Leave blank to continue using the assigned password.</p>
                    </div>
                    <hr />
                    <p class="text-danger small text-left">The account defined for this database host <strong>must</strong> have the <code>WITH GRANT OPTION</code> permission. If the defined account does not have this permission requests to create databases <em>will</em> fail. <strong>Do not use the same account details for MySQL that you have defined for this panel.</strong></p>
                </div>
                <div class="box-footer">
                    <?php echo csrf_field(); ?>

                    <button name="_method" value="PATCH" class="btn btn-sm btn-primary pull-right">Save</button>
                    <button name="_method" value="DELETE" class="btn btn-sm btn-danger pull-left muted muted-hover"><i class="fa fa-trash-o"></i></button>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Databases</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>Server</th>
                        <th>Database Name</th>
                        <th>Username</th>
                        <th>Connections From</th>
                        <th>Max Connections</th>
                        <th></th>
                    </tr>
                    <?php $__currentLoopData = $databases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $database): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="middle"><a href="<?php echo e(route('admin.servers.view', $database->getRelation('server')->id)); ?>"><?php echo e($database->getRelation('server')->name); ?></a></td>
                            <td class="middle"><?php echo e($database->database); ?></td>
                            <td class="middle"><?php echo e($database->username); ?></td>
                            <td class="middle"><?php echo e($database->remote); ?></td>
                            <?php if($database->max_connections != null): ?>
                                <td class="middle"><?php echo e($database->max_connections); ?></td>
                            <?php else: ?>
                                <td class="middle">Unlimited</td>
                            <?php endif; ?>
                            <td class="text-center">
                                <a href="<?php echo e(route('admin.servers.view.database', $database->getRelation('server')->id)); ?>">
                                    <button class="btn btn-xs btn-primary">Manage</button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
            <?php if($databases->hasPages()): ?>
                <div class="box-footer with-border">
                    <div class="col-md-12 text-center"><?php echo $databases->render(); ?></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer-scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer-scripts'); ?>
    <script>
        $('#pNodeId').select2();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pterodactyl/resources/views/admin/databases/view.blade.php ENDPATH**/ ?>