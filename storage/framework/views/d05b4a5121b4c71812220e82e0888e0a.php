<?php $__env->startSection("extension.header"); ?>
  <img src="<?php echo e($EXTENSION_ICON); ?>" alt="<?php echo e($EXTENSION_ID); ?>" style="float:left;width:30px;height:30px;border-radius:3px;margin-right:5px;"/>

  <button class="btn btn-gray-alt pull-right" style="padding: 5px 10px; margin-left: 7px" data-toggle="modal" data-target="#extensionConfigModal">
    <i class="bx bx-slider"></i>
  </button>

  <?php if($EXTENSION_WEBSITE != "[website]"): ?> 
    <a href="<?php echo e($EXTENSION_WEBSITE); ?>" target="_blank">
      <button class="btn btn-gray-alt pull-right" style="padding: 5px 10px">
        <i class="<?php echo e($EXTENSION_WEBICON); ?>"></i>
      </button>
    </a>
  <?php endif; ?>

  <h1 ext-title><?php echo e($EXTENSION_NAME); ?><tag mg-left blue><?php echo e($EXTENSION_VERSION); ?></tag></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("extension.description"); ?>
  <p class="ext-description"><?php echo e($EXTENSION_DESCRIPTION); ?></p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("extension.config"); ?>
  <?php
    use Pterodactyl\Models\Egg;
    $eggs = Egg::all();
  ?>
  <div class="modal fade" id="extensionConfigModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background-color:transparent">
        <form action="/admin/extensions/blueprint/config" method="POST" autocomplete="off">
          <div class="modal-header" style="border-color:transparent; border-radius:7px; margin-bottom: 15px">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff;box-shadow:none"><span aria-hidden="true"><i class="bi bi-x"></i></span></button>
            <h3 class="modal-title">
              <img src="<?php echo e($EXTENSION_ICON); ?>" alt="logo" height="34" width="34" class="pull-left" style="border-radius:3px;margin-right:10px"/>
              Configure <b><?php echo e($EXTENSION_NAME); ?></b>
            </h3>
          </div>

          <div class="modal-body" style="border-color:transparent; border-radius:7px; margin-bottom: 15px">
            <h4><b>Permissions</b></h4>
            <p class="text-muted text-left">Configure what elements this extension can or can't edit/extend on your Pterodactyl panel.</p><br>

            <div class="row">
              <div class="col-xs-6">
                <label class="control-label">Admin layouts</label>
                <select class="form-control" name="<?php echo e($EXTENSION_ID); ?>_adminlayouts" style="border-radius:6px">
                  <option value="1" <?php if($blueprint->dbGet('blueprint', 'extensionconfig_'.$EXTENSION_ID.'_adminlayouts') != "0"): ?> selected <?php endif; ?>>Allowed</option>
                  <option value="0" <?php if($blueprint->dbGet('blueprint', 'extensionconfig_'.$EXTENSION_ID.'_adminlayouts') == "0"): ?> selected <?php endif; ?>>Blocked</option>
                </select>
                <p class="text-muted small">Allow this extension to extend the admin panel layouts.</p>
              </div>
              <div class="col-xs-6">
                <label class="control-label">Dashboard wrapper</label>
                <select class="form-control" name="<?php echo e($EXTENSION_ID); ?>_dashboardwrapper" style="border-radius:6px">
                  <option value="1" <?php if($blueprint->dbGet('blueprint', 'extensionconfig_'.$EXTENSION_ID.'_dashboardwrapper') != "0"): ?> selected <?php endif; ?>>Allowed</option>
                  <option value="0" <?php if($blueprint->dbGet('blueprint', 'extensionconfig_'.$EXTENSION_ID.'_dashboardwrapper') == "0"): ?> selected <?php endif; ?>>Blocked</option>
                </select>
                <p class="text-muted small">Allow this extension to extend the dashboard's blade wrapper.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <label class="control-label">Route eggs</label>
                <select multiple class="pOptions form-control" name="<?php echo e($EXTENSION_ID); ?>_eggs[]">
                  <option value="-1" <?php if(in_array('-1', json_decode($blueprint->dbGet('blueprint', 'extensionconfig_'.$EXTENSION_ID.'_eggs') ?: '["-1"]'))): ?> selected <?php endif; ?>>Show on all eggs</option>
                  <?php $__currentLoopData = $eggs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $egg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($egg->id); ?>" <?php if(in_array(strval($egg->id), json_decode($blueprint->dbGet('blueprint', 'extensionconfig_'.$EXTENSION_ID.'_eggs') ?: '["-1"]'))): ?> selected <?php endif; ?>><?php echo e($egg->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <p class="text-muted small">Choose on which Pterodactyl eggs this extension should be able to add new pages on.</p>
              </div>
            </div>
          </div>

          <div class="modal-footer" style="border-color:transparent; border-radius:7px">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="_identifier" value="<?php echo e($EXTENSION_ID); ?>">
            <input type="hidden" name="_method" value="PATCH">
            <div class="row">
              <div class="col-sm-10">
                <p class="text-muted small text-left">This settings dialog was automatically generated by Blueprint. Unsaved changes will be lost when updating this extension's configuration.</p>
              </div>
              <div class="col-sm-2">
                <button type="submit" class="btn btn-primary btn-sm" style="width:100%; margin-top:10px; margin-bottom:10px; border-radius:6px">Save</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer-scripts'); ?>
  <?php echo \Illuminate\View\Factory::parentPlaceholder('footer-scripts'); ?>
  <script>
    $('.pOptions').select2();
  </script>
  <style>
    .select2-selection {
      border-radius: 6px !important;
    }
    .select2-container--open .select2-selection {
      border-bottom-left-radius: 0px !important;
      border-bottom-right-radius: 0px !important;
    }

    section.content { padding-top: 7px !important; }
    section.content-header > h1 { margin-top: 3px !important; }
    .ext-description { padding-bottom: 10px; }
  </style>
<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/pterodactyl/resources/views/blueprint/admin/template.blade.php ENDPATH**/ ?>