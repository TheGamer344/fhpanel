<?php if($n_alert == "1" && Auth::check()): ?>
  <?php if($n_website_links != '1'): ?> <div class="alert-spacer"></div> <?php endif; ?>
  <!-- Alert -->
  <div class="nebula-alert" style="--position: <?php echo e($n_alert_position); ?>">
    <div class="alert-container">
      <div class="alert-icon">
        <i class="bi bi-<?php echo e($n_alert_icon); ?>"></i>
      </div>
      <div class="alert-text"></div>
      <div class="alert-text-value" style="display:none"><?php echo e(nl2br(e($n_alert_text))); ?> </div>
      <?php if($n_alert_dismiss): ?>
        <div class="alert-close" onclick="DismissNebulaAlert()">
          <i class="bi bi-x"></i>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <script>
    document.querySelector('div.alert-text').innerHTML = marked.parse(document.querySelector('div.alert-text-value').innerText+" ");
  </script>
<?php endif; ?>

<?php if($n_alert_dismiss): ?>
  <script>
    function DismissNebulaAlert() {
      <?php if($n_website_links != '1'): ?> let alertSpacer = document.querySelector(".alert-spacer");
      <?php else: ?> let alertSpacer = document.querySelector(".nebula-weblinks"); <?php endif; ?>
      let alert = document.querySelector(".nebula-alert")
      alert.style.opacity = 0;
      alert.style.height = alert.offsetHeight+'px';
      setInterval(() => {
        alert.style.height = 0;
        alert.style.marginTop = 0;
        <?php if($n_website_links != '1'): ?>
          alertSpacer.style.marginBottom = 0
        <?php else: ?>
          alertSpacer.style.marginBottom = 10+'px'
        <?php endif; ?>
      }, 100);
      setInterval(() => {
        alert.style.display = "none";
      }, 750)
    }
  </script>
<?php endif; ?><?php /**PATH /var/www/pterodactyl/resources/views/blueprint/extensions/nebula/wrapper/alerts.blade.php ENDPATH**/ ?>