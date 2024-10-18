<?php $__env->startSection("blueprint.lib"); ?>
  <?php
    use Pterodactyl\BlueprintFramework\Libraries\ExtensionLibrary\Admin\BlueprintAdminLibrary as BlueprintExtensionLibrary;
    use Pterodactyl\BlueprintFramework\Services\PlaceholderService\BlueprintPlaceholderService;

    $settings = app()->make('Pterodactyl\Contracts\Repository\SettingsRepositoryInterface');
    $blueprint = app()->make(BlueprintExtensionLibrary::class, ['settings' => $settings]);
    $PlaceholderService = app()->make(BlueprintPlaceholderService::class);
  ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("blueprint.import"); ?>
  <?php echo $blueprint->importStylesheet('https://unpkg.com/boxicons@latest/css/boxicons.min.css'); ?>

  <?php echo $blueprint->importStylesheet('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css'); ?>

  <?php echo $blueprint->importStylesheet('/assets/extensions/blueprint/admin.extensions.css'); ?>

  <?php echo $blueprint->importStylesheet('/assets/extensions/blueprint/blueprint.style.css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("blueprint.navigation"); ?>
  <?php
    $extensionsIcon="fa fa-puzzle-piece";
    if($blueprint->fileRead($PlaceholderService->folder()."/.blueprint/extensions/blueprint/private/db/onboarding") == "true"){
      $extensionsIcon="fa fa-puzzle-piece bx-flashing";
    }
  ?>

  <li>
    <li>
      <a href="<?php echo e(route('admin.extensions')); ?>" data-toggle="tooltip" data-placement="bottom" title="Extensions">
        <i class='<?php echo e($extensionsIcon); ?>'></i>
      </a>
    </li>
  </li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("blueprint.notifications"); ?>
  <?php
    if($blueprint->fileRead($PlaceholderService->folder()."/.blueprint/extensions/blueprint/private/db/onboarding") == "true") {
      $blueprint->fileWipe($PlaceholderService->folder()."/.blueprint/extensions/blueprint/private/db/onboarding");
    }
    $notification = $blueprint->dbGet("blueprint", "notification:text");
    if($notification != null) {
      echo "<div class=\"notification\">
      <p>".$notification."</p>
      </div>
      ";

      $blueprint->dbSet("blueprint", "notification:text", "");
    }
  ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("blueprint.wrappers"); ?>
  <?php $__currentLoopData = File::allFiles($PlaceholderService->folder().'/resources/views/blueprint/admin/wrappers'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($partial->getExtension() == 'php'): ?>
      <?php if($blueprint->dbGet('blueprint', 'extensionconfig_'.str_replace('.blade.php','',basename($partial->getPathname())).'_adminwrapper') != '0'): ?>
        <?php echo $__env->make('blueprint.admin.wrappers.'.str_replace('.blade.php','',basename($partial->getPathname())), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?><?php /**PATH /var/www/pterodactyl/resources/views/blueprint/admin/admin.blade.php ENDPATH**/ ?>