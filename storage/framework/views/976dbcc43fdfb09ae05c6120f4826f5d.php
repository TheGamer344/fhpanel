<style id="nebula-variables">
  <?php
    $__transparency="";
    if($n_dashboard_transparency == "1") { $__transparency="BB"; }
    elseif($n_dashboard_transparency == "2") { $__transparency="99"; }
    elseif($n_dashboard_transparency == "3") { $__transparency="60"; }
  ?>

  /* Variables */
  :root {
    --sidebarPrimary: <?php echo e($n_palette_sidebar_1); ?>;
    --sidebarPrimaryHover: <?php echo e($n_palette_sidebar_2); ?>;
    --sidebarSecondary: <?php echo e($n_palette_sidebar_3); ?>;
    --sidebarSecondaryHover: <?php echo e($n_palette_sidebar_4); ?>;
    --sidebarSecondaryActive: <?php echo e($n_palette_sidebar_5); ?>;
    --sidebarSecondarySelected: <?php echo e($n_palette_sidebar_6); ?>;
    --sidebarButtonActive: <?php echo e($n_palette_sidebar_8); ?>;

    --pagePrimary: <?php echo e($n_palette_dashboard_1); ?>;
    --pagePrimaryHover: <?php echo e($n_palette_dashboard_2); ?>;
    --pageSecondary: <?php echo e($n_palette_dashboard_3); ?><?php echo e($__transparency); ?>;
    --pageSecondaryHover: <?php echo e($n_palette_dashboard_4); ?><?php echo e($__transparency); ?>;
    --pageSecondaryActive: <?php echo e($n_palette_dashboard_5); ?><?php echo e($__transparency); ?>;
    --pageSecondarySelected: <?php echo e($n_palette_dashboard_6); ?><?php echo e($__transparency); ?>;
    --pageButtonDefault: <?php echo e($n_palette_dashboard_8); ?>;
    --pageButtonHover: <?php echo e($n_palette_dashboard_9); ?>;

    --statusOffline: <?php echo e($n_palette_status_offline); ?>;
    --statusError: <?php echo e($n_palette_status_error); ?>;
    --statusStarting: <?php echo e($n_palette_status_starting); ?>;
    --statusOnline: <?php echo e($n_palette_status_online); ?>;

    --authA: <?php echo e($n_palette_auth_1); ?>;
    --authB: <?php echo e($n_palette_auth_2); ?>;
    --authC: <?php echo e($n_palette_auth_3); ?>;
    --authD: <?php echo e($n_palette_auth_4); ?>;
    --authE: <?php echo e($n_palette_auth_5); ?>;
    --authF: <?php echo e($n_palette_auth_6); ?>;
    --authG: <?php echo e($n_palette_auth_7); ?>;
    --authH: <?php echo e($n_palette_auth_8); ?>;
    
    --sidebarBackground: <?php echo e($n_palette_sidebar_7); ?>;
    --pageBackground: <?php echo e($n_palette_dashboard_7); ?>;

    --borderRadius: <?php echo e($n_border_radius); ?>px;
    --borderRadiusSidebar: <?php echo e($n_sidebar_border_radius); ?>px;
    --borderRadiusAuth: 10px;

    --patternSizeAuth: <?php echo e($n_auth_background_magicsize); ?>px;
    --patternSizeDashboard: <?php echo e($n_background_magicsize); ?>px;
  }

</style><?php /**PATH /var/www/pterodactyl/resources/views/blueprint/extensions/nebula/wrapper/theme/variables.blade.php ENDPATH**/ ?>