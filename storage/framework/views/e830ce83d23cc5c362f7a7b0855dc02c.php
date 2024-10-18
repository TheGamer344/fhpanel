<?php if(isset($EXTENSION_ID)): ?>
  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="padding-left: 0px; padding-right: 20px;">
    <a href="<?php echo e(route('admin.extensions.'.$EXTENSION_ID.'.index')); ?>">
      <button class="btn extension-btn" style="width:100%;margin-bottom:17px;">
        <div class="extension-btn-overlay"></div>
        <img src="<?php echo e($EXTENSION_ICON); ?>" alt="<?php echo e($EXTENSION_ID); ?>" class="extension-btn-image2"/>
        <img src="<?php echo e($EXTENSION_ICON); ?>" alt="" class="extension-btn-image"/>
        <p class="extension-btn-text"><?php echo e($EXTENSION_NAME); ?></p>
        <p class="extension-btn-version"><?php echo e($EXTENSION_VERSION); ?></p>
        <i class="bi bi-arrow-right-short" style="font-size: 34px;position: absolute;top: 15px;right: 35px;"></i>
      </button>
    </a>
  </div>
<?php endif; ?><?php /**PATH /var/www/pterodactyl/resources/views/blueprint/admin/entry.blade.php ENDPATH**/ ?>