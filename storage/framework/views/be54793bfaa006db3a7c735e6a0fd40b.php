<div class="sidebarContentContainer">
  <div class="sidebarContent">

    <?php if($n_sidebar_full == "1" && $n_sidebar_customlogo != ""): ?>
      <img class="customlogo" src="<?php echo e($n_sidebar_customlogo); ?>" onclick="sidebarRefresh();sidebarButtonEvent('home')"></img>
    
      <!-- Item: Spacer -->
      <div class="sidebarSpacer"></div>
    <?php endif; ?>

    <!-- Item: Home -->
    <div class="tooltip-toggle">
      <span class="tooltip">Home</span>
      <button data-tippy-content="Home" oncontextmenu="showContextMenu(event, `/`)" onclick="sidebarRefresh();sidebarButtonEvent('home')" id="sidebarMainHome" class="sidebarButton">
        <?php if($n_sidebar_home == "" || $n_sidebar_full == "1"): ?>
        <i class="sidebarIcon <?php echo e($__home); ?>"></i>
        <?php else: ?>
        <img class="customicon" src="<?php echo e($n_sidebar_home); ?>"></img>
        <?php endif; ?>
        <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">Home</span><?php endif; ?>
      </button>
    </div>

    <!-- Item: Spacer -->
    <div class="sidebarSpacer"></div>
    
    <!-- Category: Server Management -->
    <div id="sidebarCategoryServer" class="sidebarCategory">

      <div id="sidebarServerLoader" style="display: none">
        <button class="sidebar-placeholder-animated sidebarButton"> </button>
        <button class="sidebar-placeholder-animated sidebarButton"> </button>
        <button class="sidebar-placeholder-animated sidebarButton"> </button>
        <button class="sidebar-placeholder-animated sidebarButton"> </button>
        <button class="sidebar-placeholder-animated sidebarButton"> </button>
        <button class="sidebar-placeholder-animated sidebarButton"> </button>
        <button class="sidebar-placeholder-animated sidebarButton"> </button>
        <button class="sidebar-placeholder-animated sidebarButton"> </button>
        <button class="sidebar-placeholder-animated sidebarButton"> </button>
        <button class="sidebar-placeholder-animated sidebarButton"> </button>
      </div>

      <!-- Item: Terminal -->
      <div class="tooltip-toggle">
        <span class="tooltip">Terminal</span>
        <button data-tippy-content="Terminal" oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}`)" onclick="sidebarRefresh();sidebarButtonEvent('serverTerminal')" id="sidebarServerTerminal" class="sidebarButton">
          <?php if($n_sidebar_server_terminal == "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__server_terminal); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_server_terminal); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">Terminal</span><?php endif; ?>
        </button>
      </div>
      
      <!-- Item: File Manager -->
      <div class="tooltip-toggle">
        <span class="tooltip">Files</span>
        <button data-tippy-content="Files" oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/files`)" onclick="sidebarRefresh();sidebarButtonEvent('serverFiles')" id="sidebarServerFilemanager" class="sidebarButton">
          <?php if($n_sidebar_server_files == "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__server_files); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_server_files); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">Files</span><?php endif; ?>
        </button>
      </div>
      
      <!-- Item: Databases -->
      <div class="tooltip-toggle">
        <span class="tooltip">Databases</span>
        <button data-tippy-content="Databases" oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/databases`)" onclick="sidebarRefresh();sidebarButtonEvent('serverDatabases')" id="sidebarServerDatabases" class="sidebarButton">
          <?php if($n_sidebar_server_databases == "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__server_databases); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_server_databases); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">Databases</span><?php endif; ?>
        </button>
      </div>
      
      <!-- Item: Schedules -->
      <div class="tooltip-toggle">
        <span class="tooltip">Schedules</span>
        <button data-tippy-content="Schedules" oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/schedules`)" onclick="sidebarRefresh();sidebarButtonEvent('serverSchedules')" id="sidebarServerSchedules" class="sidebarButton">
          <?php if($n_sidebar_server_schedules== "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__server_schedules); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_server_schedules); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">Schedules</span><?php endif; ?>
        </button>
      </div>
      
      <!-- Item: Users -->
      <div class="tooltip-toggle">
        <span class="tooltip">Users</span>
        <button data-tippy-content="Users" oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/users`)" onclick="sidebarRefresh();sidebarButtonEvent('serverUsers')" id="sidebarServerUsers" class="sidebarButton">
          <?php if($n_sidebar_server_users== "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__server_users); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_server_users); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">Users</span><?php endif; ?>
        </button>
      </div>
      
      <!-- Item: Backups -->
      <div class="tooltip-toggle">
        <span class="tooltip">Backups</span>
        <button data-tippy-content="Backups" oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/backups`)" onclick="sidebarRefresh();sidebarButtonEvent('serverBackups')" id="sidebarServerBackups" class="sidebarButton">
          <?php if($n_sidebar_server_backups== "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__server_backups); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_server_backups); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">Backups</span><?php endif; ?>
        </button>
      </div>
      
      <!-- Item: Network -->
      <div class="tooltip-toggle">
        <span class="tooltip">Network</span>
        <button data-tippy-content="Network" oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/network`)" onclick="sidebarRefresh();sidebarButtonEvent('serverNetwork')" id="sidebarServerNetwork" class="sidebarButton">
          <?php if($n_sidebar_server_network== "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__server_network); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_server_network); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">Network</span><?php endif; ?>
        </button>
      </div>
      
      <!-- Item: Startup -->
      <div class="tooltip-toggle">
        <span class="tooltip">Startup</span>
        <button data-tippy-content="Startup" oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/startup`)" onclick="sidebarRefresh();sidebarButtonEvent('serverStartup')" id="sidebarServerStartup" class="sidebarButton">
          <?php if($n_sidebar_server_startup== "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__server_startup); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_server_startup); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">Startup</span><?php endif; ?>
        </button>
      </div>
      
      <!-- Item: Settings -->
      <div class="tooltip-toggle">
        <span class="tooltip">Settings</span>
        <button data-tippy-content="Settings" oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/settings`)" onclick="sidebarRefresh();sidebarButtonEvent('serverSettings')" id="sidebarServerSettings" class="sidebarButton">
          <?php if($n_sidebar_server_settings== "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__server_settings); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_server_settings); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">Settings</span><?php endif; ?>
        </button>
      </div>
      
      <!-- Item: Activity -->
      <div class="tooltip-toggle">
        <span class="tooltip">Activity</span>
        <button data-tippy-content="Activity" oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/activity`)" onclick="sidebarRefresh();sidebarButtonEvent('serverActivity')" id="sidebarServerActivity" class="sidebarButton">
          <?php if($n_sidebar_server_activity== "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__server_activity); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_server_activity); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">Activity</span><?php endif; ?>
        </button>
      </div>

      <?php if($n_page_indexing == "1"): ?>
      <!-- Item: More -->
      <div class="tooltip-toggle">
        <span class="tooltip">More</span>
        <button data-tippy-content="More" style="display:none" id="sidebarServerMore" class="sidebarButton">
          <?php if($n_sidebar_server_more== "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__server_more); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_server_more); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">More</span><?php endif; ?>
        </button>
      </div>
      <?php endif; ?>
      
      <?php if($n_sidebar_always_visible_buttons == "1"): ?>
      <!-- Item: Spacer -->
      <div class="sidebarSpacer"></div>
      <?php endif; ?>
      
    </div>
    
    <!-- Category: Account -->
    <div id="sidebarCategoryAccount" class="sidebarCategory">
      
      <!-- Item: Account -->
      <div class="tooltip-toggle">
        <span class="tooltip">Account</span>
        <button data-tippy-content="Account" oncontextmenu="showContextMenu(event, `/account`)" onclick="sidebarRefresh();sidebarButtonEvent('accountAccount')" id="sidebarAccountAccount" class="sidebarButton">
          <?php if($n_sidebar_account_account== "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__account_account); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_account_account); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">Account</span><?php endif; ?>
        </button>
      </div>
      
      <!-- Item: API Credentials -->
      <div class="tooltip-toggle">
        <span class="tooltip">API</span>
        <button data-tippy-content="API" oncontextmenu="showContextMenu(event, `/account/api`)" onclick="sidebarRefresh();sidebarButtonEvent('accountApi')" id="sidebarAccountApi" class="sidebarButton">
          <?php if($n_sidebar_account_api== "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__account_api); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_account_api); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">API</span><?php endif; ?>
        </button>
      </div>
      
      <!-- Item: SSH Keys -->
      <div class="tooltip-toggle">
        <span class="tooltip">SSH</span>
        <button data-tippy-content="SSH" oncontextmenu="showContextMenu(event, `/account/ssh`)" onclick="sidebarRefresh();sidebarButtonEvent('accountSsh')" id="sidebarAccountSsh" class="sidebarButton">
          <?php if($n_sidebar_account_ssh== "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__account_ssh); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_account_ssh); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">SSH Keys</span><?php endif; ?>
        </button>
      </div>
      
      <!-- Item: Activity -->
      <div class="tooltip-toggle">
        <span class="tooltip">Activity</span>
        <button data-tippy-content="Activity" oncontextmenu="showContextMenu(event, `/account/activity`)" onclick="sidebarRefresh();sidebarButtonEvent('accountActivity')" id="sidebarAccountActivity" class="sidebarButton">
          <?php if($n_sidebar_account_activity== "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__account_activity); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_account_activity); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">Activity</span><?php endif; ?>
        </button>
      </div>

      <?php if($n_page_indexing == "1"): ?>
      <!-- Item: More -->
      <div class="tooltip-toggle">
        <span class="tooltip">More</span>
        <button data-tippy-content="More" style="display:none" id="sidebarAccountMore" class="sidebarButton">
          <?php if($n_sidebar_account_more== "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__account_more); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_account_more); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">More</span><?php endif; ?>
        </button>
      </div>
      <?php endif; ?>
      
      <?php if($n_sidebar_always_visible_buttons == "1"): ?>
      <!-- Item: Spacer -->
      <div class="sidebarSpacer"></div>
      <?php endif; ?>
      
    </div>

    <!-- Category: General -->
    <div id="sidebarCategoryGeneral">

      <?php if(Auth::user()->root_admin == 1): ?>
      <!-- Item: Configuration -->
      <a href="/admin">
        <div class="tooltip-toggle">
          <span class="tooltip">Admin</span>
          <button data-tippy-content="Admin" oncontextmenu="showContextMenu(event, `/admin`)" onclick="sidebarRefresh();sidebarButtonEvent('admin')" id="sidebarMainConfiguration" class="sidebarButton">
            <?php if($n_sidebar_admin== "" || $n_sidebar_full == "1"): ?>
            <i class="sidebarIcon <?php echo e($__admin); ?>"></i>
            <?php else: ?>
            <img class="customicon" src="<?php echo e($n_sidebar_admin); ?>"></img>
            <?php endif; ?>
            <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">Admin</span><?php endif; ?>
          </button>
        </div>
      </a>
      <?php endif; ?>
      
      <!-- Item: Account -->
      <div class="tooltip-toggle">
        <span class="tooltip">Account</span>
        <button data-tippy-content="Account" oncontextmenu="showContextMenu(event, `/account`)" onclick="sidebarRefresh();sidebarButtonEvent('accountAccount')" id="sidebarMainAccount" class="sidebarButton">
          <?php if($n_sidebar_account== "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__account); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_account); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">Account</span><?php endif; ?>
        </button>
      </div>
      
      <!-- Item: Log out -->
      <div class="tooltip-toggle">
        <span class="tooltip">Logout</span>
        <button data-tippy-content="Logout" oncontextmenu="return false;" onclick="sidebarRefresh();sidebarButtonEvent('logout')" id="sidebarMainLogout" class="sidebarButton">
          <?php if($n_sidebar_logout== "" || $n_sidebar_full == "1"): ?>
          <i class="sidebarIcon <?php echo e($__logout); ?>"></i>
          <?php else: ?>
          <img class="customicon" src="<?php echo e($n_sidebar_logout); ?>"></img>
          <?php endif; ?>
          <?php if($n_sidebar_full == "1"): ?><span class="wideSidebarSpan" style="color: var(--sidebarPrimary)">Logout</span><?php endif; ?>
        </button>
      </div>
    
    </div> 
    
  </div>
</div>

<?php if($n_sidebar_hover_tooltip == "2" && $n_sidebar_full == "0"): ?>
  <style>.tippy-box[data-animation=shift-away][data-state=hidden]{opacity:0}.tippy-box[data-animation=shift-away][data-state=hidden][data-placement^=top]{transform:translateY(10px)}.tippy-box[data-animation=shift-away][data-state=hidden][data-placement^=bottom]{transform:translateY(-10px)}.tippy-box[data-animation=shift-away][data-state=hidden][data-placement^=left]{transform:translateX(10px)}.tippy-box[data-animation=shift-away][data-state=hidden][data-placement^=right]{transform:translateX(-10px)}</style>
  <script>tippy('.sidebarButton', {placement: 'right', animation: 'shift-away', arrow: false});</script>
  <style>
    .tippy-box {
      background-color: var(--sidebarSecondaryActive);
      color: var(--sidebarPrimary);
      border-radius: var(--borderRadiusSidebar);
      <?php if($n_sidebar_hover == "popout"): ?>
        margin-left: 7px;
      <?php endif; ?>
    }
  </style>
<?php endif; ?><?php /**PATH /var/www/pterodactyl/resources/views/blueprint/extensions/nebula/wrapper/sidebar/content.blade.php ENDPATH**/ ?>