<?php $__env->startSection("blueprint.lib"); ?>
  <?php
    use Pterodactyl\BlueprintFramework\Libraries\ExtensionLibrary\Client\BlueprintClientLibrary as BlueprintExtensionLibrary;
    use Pterodactyl\BlueprintFramework\Services\PlaceholderService\BlueprintPlaceholderService;

    $settings = app()->make('Pterodactyl\Contracts\Repository\SettingsRepositoryInterface');
    $blueprint = app()->make(BlueprintExtensionLibrary::class, ['settings' => $settings]);
    $PlaceholderService = app()->make(BlueprintPlaceholderService::class);
  ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("blueprint.wrappers"); ?>
  <?php $__currentLoopData = File::allFiles($PlaceholderService->folder().'/resources/views/blueprint/dashboard/wrappers'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($partial->getExtension() == 'php'): ?>
      <?php if($blueprint->dbGet('blueprint', 'extensionconfig_'.str_replace('.blade.php','',basename($partial->getPathname())).'_dashboardwrapper') != '0'): ?>
        <?php echo $__env->make('blueprint.dashboard.wrappers.'.str_replace('.blade.php','',basename($partial->getPathname())), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?><?php /**PATH /var/www/pterodactyl/resources/views/blueprint/dashboard/dashboard.blade.php ENDPATH**/ ?>