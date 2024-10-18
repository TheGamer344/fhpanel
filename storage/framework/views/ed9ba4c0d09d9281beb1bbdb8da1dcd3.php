<!--Global-->
<p class="keybinds-content-text-bold">Global</p>
<div class="keybinds-content-text-box">

  <!-- View Keybinds -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">View Keybinds</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> <?php echo $KEY_SLASH; ?>

      </code><code class="keybinds-shortcut">
        <?php echo $KEY_ALT; ?> <?php echo $KEY_SLASH; ?>

      </code>
    </p></div>
  </div>

  <!-- Home -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Home</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> <?php echo $KEY_ESCAPE; ?>

      </code>
    </p></div>
  </div>

  <!-- Account -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Account</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> .
      </code>
    </p></div>
  </div>

  <!-- Search -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Search</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> K
      </code><code class="keybinds-shortcut">
        <?php echo $KEY_ALT; ?> F
      </code>
    </p></div>
  </div>
  
  <?php if(Auth::user()->root_admin == 1): ?>
  <!-- Admin -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Admin</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> ,
      </code>
    </p></div>

    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">Create new server</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-subcategory-shortcut">
        <?php echo $KEY_ALT; ?> N
      </code>
    </p></div>

    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">Edit current server</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-subcategory-shortcut">
        <?php echo $KEY_ALT; ?> E
      </code>
    </p></div>

    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">Open Nebula Designer</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-subcategory-shortcut">
        <?php echo $KEY_CTRL; ?> D
      </code>
    </p></div>
  </div>
  <?php endif; ?>

  <p style="opacity: 0; font-size: 0px;">.</p>
</div><br>

<!--Server management-->
<p class="keybinds-content-text-bold">Server management</p>
<div class="keybinds-content-text-box">

  <!-- Terminal -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Terminal</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> <?php echo $KEY_1; ?>

      </code><code class="keybinds-shortcut">
        <?php echo $KEY_ALT; ?> .
      </code>
    </p></div>

    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">Start</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-subcategory-shortcut">
        <?php echo $KEY_ALT; ?> Z
      </code>
    </p></div>

    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">Stop</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-subcategory-shortcut">
        <?php echo $KEY_ALT; ?> X
      </code>
    </p></div>

    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">Restart</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-subcategory-shortcut">
        <?php echo $KEY_ALT; ?> C
      </code>
    </p></div>

    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">Copy IP Address</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-subcategory-shortcut">
        <?php echo $KEY_ALT; ?> A
      </code>
    </p></div>
  </div>

  <!-- Files -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Files</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> <?php echo $KEY_2; ?>

      </code><code class="keybinds-shortcut">
        <?php echo $KEY_ALT; ?> ,
      </code>
    </p></div>

    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">Switch layout</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-subcategory-shortcut">
        <?php echo $KEY_ALT; ?> Z
      </code>
    </p></div>

    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">New File</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-subcategory-shortcut">
        <?php echo $KEY_ALT; ?> [
      </code>
    </p></div>

    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">New Directory</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-subcategory-shortcut">
        <?php echo $KEY_ALT; ?> ]
      </code>
    </p></div>
  </div>

  <!-- Databases -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Databases</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> <?php echo $KEY_3; ?>

      </code>
    </p></div>

    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">New Database</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-subcategory-shortcut">
        <?php echo $KEY_ALT; ?> [
      </code>
    </p></div>
  </div>

  <!-- Schedules -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Schedules</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> <?php echo $KEY_4; ?>

      </code>
    </p></div>

    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">New Schedule</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-subcategory-shortcut">
        <?php echo $KEY_ALT; ?> [
      </code>
    </p></div>
  </div>

  <!-- Users -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Users</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> <?php echo $KEY_5; ?>

      </code>
    </p></div>

    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">New User</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-subcategory-shortcut">
        <?php echo $KEY_ALT; ?> [
      </code>
    </p></div>
  </div>

  <!-- Backups -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Backups</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> <?php echo $KEY_6; ?>

      </code>
    </p></div>

    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">New Backup</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-subcategory-shortcut">
        <?php echo $KEY_ALT; ?> [
      </code>
    </p></div>
  </div>

  <!-- Network -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Network</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> <?php echo $KEY_7; ?>

      </code>
    </p></div>

    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">New Allocation</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-subcategory-shortcut">
        <?php echo $KEY_ALT; ?> [
      </code>
    </p></div>
  </div>

  <!-- Startup -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Startup</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> <?php echo $KEY_8; ?>

      </code><code class="keybinds-shortcut">
        <?php echo $KEY_ALT; ?> M
      </code>
    </p></div>
  </div>

  <!-- Settings -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Settings</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> <?php echo $KEY_9; ?>

      </code><code class="keybinds-shortcut">
        <?php echo $KEY_ALT; ?> L
      </code>
    </p></div>

    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">Launch SFTP</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-subcategory-shortcut">
        <?php echo $KEY_ALT; ?> A
      </code>
    </p></div>
  </div>

  <!-- Activity -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Activity</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> <?php echo $KEY_0; ?>

      </code><code class="keybinds-shortcut">
        <?php echo $KEY_ALT; ?> -
      </code>
    </p></div>
  </div>

  <p style="opacity: 0; font-size: 0px;">.</p>
</div><br>

<!--Account management-->
<p class="keybinds-content-text-bold">Account management</p>
<div class="keybinds-content-text-box">

  <!-- Account -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Account</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> <?php echo $KEY_1; ?>

      </code><code class="keybinds-shortcut">
        <?php echo $KEY_ALT; ?> .
      </code>
    </p></div>
  </div>

  <!-- API -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">API</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> <?php echo $KEY_2; ?>

      </code><code class="keybinds-shortcut">
        <?php echo $KEY_ALT; ?> ,
      </code>
    </p></div>
  </div>

  <!-- SSH -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">SSH</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> <?php echo $KEY_3; ?>

      </code>
    </p></div>
  </div>

  <!-- Activity -->
  <div class="row">
    <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Activity</p></div>
    <div class="keybinds-column"><p class="keybinds-content-text-dim">
      <code class="keybinds-shortcut">
        <?php echo $KEY_CTRL; ?> <?php echo $KEY_4; ?>

      </code><code class="keybinds-shortcut">
        <?php echo $KEY_ALT; ?> -
      </code>
    </p></div>
  </div>

  <p style="opacity: 0; font-size: 0px;">.</p>
</div><?php /**PATH /var/www/pterodactyl/resources/views/blueprint/extensions/nebula/wrapper/keybinds/binds.blade.php ENDPATH**/ ?>