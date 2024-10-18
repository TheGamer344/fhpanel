<?php $__env->startSection('tasks::chain-template'); ?>
<div class="box-footer with-border task-list-item" data-target="task-clone">
    <div class="row">
        <div class="form-group col-md-3">
            <label class="control-label"><?php echo app('translator')->get('server.schedule.task.time'); ?></label>
            <div class="row">
                <div class="col-xs-4">
                    <select name="tasks[time_value][]" class="form-control">
                        <?php $__currentLoopData = range(0, 59); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($number); ?>"><?php echo e($number); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-xs-8">
                    <select name="tasks[time_interval][]" class="form-control">
                        <option value="s"><?php echo app('translator')->get('strings.seconds'); ?></option>
                        <option value="m"><?php echo app('translator')->get('strings.minutes'); ?></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label class="control-label"><?php echo app('translator')->get('server.schedule.task.action'); ?></label>
            <div>
                <select name="tasks[action][]" class="form-control">
                    <option value="command"><?php echo app('translator')->get('server.schedule.actions.command'); ?></option>
                    <option value="power"><?php echo app('translator')->get('server.schedule.actions.power'); ?></option>
                </select>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label class="control-label"><?php echo app('translator')->get('server.schedule.task.payload'); ?></label>
            <div data-attribute="remove-task-element">
                <input type="text" name="tasks[payload][]" class="form-control">
                <div class="input-group-btn hidden">
                    <button type="button" class="btn btn-danger" data-action="remove-task"><i class="fa fa-close"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->yieldSection(); ?>
<?php /**PATH /var/www/pterodactyl/resources/views/partials/schedules/task-template.blade.php ENDPATH**/ ?>