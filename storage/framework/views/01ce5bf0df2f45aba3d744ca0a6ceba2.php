<?php if($n_website_links == "1" && Auth::check()): ?>
  <!-- Weblinks -->
  <div class="nebula-weblinks">
    <div class="weblink-container">
      <!-- Websites -->
      <?php if($n_weblink_support != ""): ?><a href="<?php echo e($n_weblink_support); ?>" target="_blank"><button class="weblink" to="support"><i class="bi bi-life-preserver"></i> Support</button></a><?php endif; ?>
      <?php if($n_weblink_billing != ""): ?><a href="<?php echo e($n_weblink_billing); ?>" target="_blank"><button class="weblink" to="billing"><i class="bi bi-currency-exchange"></i> Billing</button></a><?php endif; ?>
      <?php if($n_weblink_status != ""): ?><a href="<?php echo e($n_weblink_status); ?>" target="_blank"><button class="weblink" to="status"><i class="bi bi-bar-chart-fill"></i> Status</button></a><?php endif; ?>
      <!-- Social -->
      <?php if($n_weblink_social_discord != ""): ?>
        <a href="https://discord.com/invite/<?php echo e($n_weblink_social_discord); ?>" target="_blank"><button class="weblink-social" to="discord"><i class="bi bi-discord"></i> Discord</button></a><?php endif; ?>
      <?php if($n_weblink_social_github != ""): ?><a href="https://github.com/<?php echo e($n_weblink_social_github); ?>" target="_blank"><button class="weblink-social" to="github"><i class="bi bi-github"></i> GitHub</button></a><?php endif; ?>
    </div>
  </div>
  <style>
    .weblink-social, .weblink {
      <?php if($n_website_links_align == "0"): ?> --weblink_float: left; --weblink_mleft: 0px; --weblink_mright: 10px; --weblinkalt_float: right; --weblinkalt_mleft: 10px; --weblinkalt_mright: 0px;
      <?php else: ?> --weblink_float: right; --weblink_mleft: 10px; --weblink_mright: 0px; --weblinkalt_float: left; --weblinkalt_mleft: 0px; --weblinkalt_mright: 10px; <?php endif; ?>
    }
  </style>
<?php endif; ?><?php /**PATH /var/www/pterodactyl/resources/views/blueprint/extensions/nebula/wrapper/links.blade.php ENDPATH**/ ?>