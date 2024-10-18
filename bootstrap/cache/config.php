<?php return array (
  'ExtensionFS' => 
  array (
    'disks' => 
    array (
      'blueprint:versionchanger' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/pterodactyl/storage/extensions/versionchanger',
        'url' => 'http://panel.flaminghosting.net/fs/extensions/versionchanger',
        'visibility' => 'public',
        'throw' => false,
      ),
      'blueprint:nebula' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/pterodactyl/storage/extensions/nebula',
        'url' => 'http://panel.flaminghosting.net/fs/extensions/nebula',
        'visibility' => 'public',
        'throw' => false,
      ),
      'blueprint:slate' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/pterodactyl/storage/extensions/slate',
        'url' => 'http://panel.flaminghosting.net/fs/extensions/slate',
        'visibility' => 'public',
        'throw' => false,
      ),
    ),
  ),
  'activity' => 
  array (
    'prune_days' => 90,
    'hide_admin_activity' => false,
  ),
  'app' => 
  array (
    'version' => '1.11.7',
    'name' => 'Flaming Hosting',
    'env' => 'production',
    'debug' => false,
    'url' => 'http://panel.flaminghosting.net',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'base64:wSD2Wv/gHdIdOYqgqUfRF+iB/H9SKuZ+zAUaY205r3Q=',
    'cipher' => 'AES-256-CBC',
    'exceptions' => 
    array (
      'report_all' => false,
    ),
    'maintenance' => 
    array (
      'driver' => 'file',
    ),
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Pterodactyl\\Providers\\ActivityLogServiceProvider',
      23 => 'Pterodactyl\\Providers\\AppServiceProvider',
      24 => 'Pterodactyl\\Providers\\AuthServiceProvider',
      25 => 'Pterodactyl\\Providers\\BackupsServiceProvider',
      26 => 'Pterodactyl\\Providers\\BladeServiceProvider',
      27 => 'Pterodactyl\\Providers\\EventServiceProvider',
      28 => 'Pterodactyl\\Providers\\HashidsServiceProvider',
      29 => 'Pterodactyl\\Providers\\RouteServiceProvider',
      30 => 'Pterodactyl\\Providers\\RepositoryServiceProvider',
      31 => 'Pterodactyl\\Providers\\ViewComposerServiceProvider',
      32 => 'Prologue\\Alerts\\AlertsServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Process' => 'Illuminate\\Support\\Facades\\Process',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Vite' => 'Illuminate\\Support\\Facades\\Vite',
      'Alert' => 'Prologue\\Alerts\\Facades\\Alert',
      'Carbon' => 'Carbon\\Carbon',
      'JavaScript' => 'Laracasts\\Utilities\\JavaScript\\JavaScriptFacade',
      'Theme' => 'Pterodactyl\\Extensions\\Facades\\Theme',
      'Activity' => 'Pterodactyl\\Facades\\Activity',
      'LogBatch' => 'Pterodactyl\\Facades\\LogBatch',
      'LogTarget' => 'Pterodactyl\\Facades\\LogTarget',
    ),
  ),
  'auth' => 
  array (
    'lockout' => 
    array (
      'time' => 2,
      'attempts' => 3,
    ),
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'Pterodactyl\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'backups' => 
  array (
    'default' => 'wings',
    'presigned_url_lifespan' => 60,
    'max_part_size' => 5368709120,
    'prune_age' => 360,
    'throttles' => 
    array (
      'limit' => 2,
      'period' => 600,
    ),
    'disks' => 
    array (
      'wings' => 
      array (
        'adapter' => 'wings',
      ),
      's3' => 
      array (
        'adapter' => 's3',
        'region' => NULL,
        'key' => NULL,
        'secret' => NULL,
        'bucket' => NULL,
        'prefix' => '',
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'use_accelerate_endpoint' => false,
        'storage_class' => NULL,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'null',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'host' => 'api-mt1.pusher.com',
          'port' => 443,
          'scheme' => 'https',
          'encrypted' => true,
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/var/www/pterodactyl/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'lock_connection' => 'default',
      ),
      'sessions' => 
      array (
        'driver' => 'file',
        'table' => 'sessions',
        'connection' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
    ),
    'prefix' => 'pterodactyl_cache_',
  ),
  'compile' => 
  array (
    'files' => 
    array (
    ),
    'providers' => 
    array (
    ),
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => '/api/client',
      1 => '/api/application',
      2 => '/api/client/*',
      3 => '/api/application/*',
    ),
    'allowed_methods' => 
    array (
      0 => 'GET',
      1 => 'POST',
      2 => 'PUT',
      3 => 'PATCH',
      4 => 'DELETE',
      5 => 'HEAD',
    ),
    'allowed_origins' => 
    array (
      0 => '',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => true,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '192.168.30.28',
        'port' => '3306',
        'database' => 'ptdb',
        'username' => 'root',
        'password' => 'CG_dDlPMtz@vKH6A',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'timezone' => '+00:00',
        'sslmode' => 'prefer',
        'options' => 
        array (
          1014 => true,
        ),
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'pterodactyl_database_',
      ),
      'default' => 
      array (
        'scheme' => 'tcp',
        'path' => '/run/redis/redis.sock',
        'host' => '192.168.30.28',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
        'context' => 
        array (
        ),
      ),
      'sessions' => 
      array (
        'scheme' => 'tcp',
        'path' => '/run/redis/redis.sock',
        'host' => '192.168.30.28',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => 1,
        'context' => 
        array (
        ),
      ),
    ),
  ),
  'egg_features' => 
  array (
    'eula' => 
    array (
    ),
  ),
  'filesystems' => 
  array (
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/pterodactyl/storage/app',
        'throw' => false,
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/pterodactyl/storage/app/public',
        'url' => 'http://panel.flaminghosting.net/storage',
        'visibility' => 'public',
        'throw' => false,
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => false,
      ),
    ),
    'default' => 'local',
    'links' => 
    array (
      '/var/www/pterodactyl/public/storage' => '/var/www/pterodactyl/storage/app/public',
    ),
  ),
  'fractal' => 
  array (
    'default_serializer' => 'League\\Fractal\\Serializer\\JsonApiSerializer',
    'default_paginator' => '',
    'base_url' => NULL,
    'fractal_class' => 'Spatie\\Fractal\\Fractal',
    'auto_includes' => 
    array (
      'enabled' => true,
      'request_key' => 'include',
    ),
  ),
  'hashids' => 
  array (
    'salt' => '',
    'length' => '8',
    'alphabet' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
    ),
  ),
  'http' => 
  array (
    'rate_limit' => 
    array (
      'client_period' => 1,
      'client' => 720,
      'application_period' => 1,
      'application' => 240,
    ),
  ),
  'javascript' => 
  array (
    'bind_js_vars_to_this_view' => 
    array (
      0 => 'layouts.scripts',
    ),
    'js_namespace' => 'Pterodactyl',
  ),
  'logging' => 
  array (
    'default' => 'daily',
    'deprecations' => 
    array (
      'channel' => NULL,
      'trace' => false,
    ),
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/var/www/pterodactyl/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/var/www/pterodactyl/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 7,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
          'connectionString' => 'tls://:',
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '/var/www/pterodactyl/storage/logs/laravel.log',
      ),
      'deprecations' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'mail.flaminghosting.net',
        'port' => '587',
        'encryption' => 'tls',
        'username' => 'no-reply@flaminghosting.net',
        'password' => 'Loveboat1973!',
        'timeout' => NULL,
        'local_domain' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs -i',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
      ),
    ),
    'from' => 
    array (
      'address' => 'no-reply@flaminghosting.net',
      'name' => 'Panel - Flaming Hosting',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/var/www/pterodactyl/resources/views/vendor/mail',
      ),
    ),
  ),
  'prologue' => 
  array (
    'alerts' => 
    array (
      'levels' => 
      array (
        0 => 'info',
        1 => 'warning',
        2 => 'danger',
        3 => 'success',
      ),
      'session_key' => 'alert_messages',
    ),
  ),
  'pterodactyl' => 
  array (
    'load_environment_only' => false,
    'service' => 
    array (
      'author' => 'unknown@unknown.com',
    ),
    'auth' => 
    array (
      '2fa_required' => '1',
      '2fa' => 
      array (
        'bytes' => 32,
        'window' => 4,
        'verify_newer' => true,
      ),
    ),
    'paginate' => 
    array (
      'frontend' => 
      array (
        'servers' => 15,
      ),
      'admin' => 
      array (
        'servers' => 25,
        'users' => 25,
      ),
      'api' => 
      array (
        'nodes' => 25,
        'servers' => 25,
        'users' => 25,
      ),
    ),
    'guzzle' => 
    array (
      'timeout' => '15',
      'connect_timeout' => '5',
    ),
    'cdn' => 
    array (
      'cache_time' => 60,
      'url' => 'https://cdn.pterodactyl.io/releases/latest.json',
    ),
    'client_features' => 
    array (
      'databases' => 
      array (
        'enabled' => true,
        'allow_random' => true,
      ),
      'schedules' => 
      array (
        'per_schedule_task_limit' => 10,
      ),
      'allocations' => 
      array (
        'enabled' => true,
        'range_start' => '2550',
        'range_end' => '2880',
      ),
    ),
    'files' => 
    array (
      'max_edit_size' => 4194304,
    ),
    'environment_variables' => 
    array (
      'P_SERVER_ALLOCATION_LIMIT' => 'allocation_limit',
    ),
    'assets' => 
    array (
      'use_hash' => false,
    ),
    'email' => 
    array (
      'send_install_notification' => true,
      'send_reinstall_notification' => true,
    ),
    'telemetry' => 
    array (
      'enabled' => true,
    ),
    'console' => 
    array (
      'count' => NULL,
      'frequency' => NULL,
    ),
  ),
  'queue' => 
  array (
    'default' => 'redis',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'standard',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => NULL,
        'secret' => NULL,
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'standard',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'standard',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'recaptcha' => 
  array (
    'enabled' => true,
    'domain' => 'https://www.google.com/recaptcha/api/siteverify',
    'secret_key' => '6LcJcjwUAAAAALOcDJqAEYKTDhwELCkzUkNDQ0J5',
    '_shipped_secret_key' => '6LcJcjwUAAAAALOcDJqAEYKTDhwELCkzUkNDQ0J5',
    'website_key' => '6LcJcjwUAAAAAO_Xqjrtj9wWufUpYRnK6BW8lnfn',
    '_shipped_website_key' => '6LcJcjwUAAAAAO_Xqjrtj9wWufUpYRnK6BW8lnfn',
    'verify_domain' => true,
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => 'panel.flaminghosting.net',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'middleware' => 
    array (
      'verify_csrf_token' => 'Pterodactyl\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'Pterodactyl\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
      'scheme' => 'https',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 720,
    'expire_on_close' => false,
    'encrypt' => true,
    'files' => '/var/www/pterodactyl/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'pterodactyl_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'trustedproxy' => 
  array (
    'proxies' => 
    array (
      0 => '',
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/var/www/pterodactyl/resources/views',
    ),
    'compiled' => '/var/www/pterodactyl/storage/framework/views',
  ),
  'query-builder' => 
  array (
    'parameters' => 
    array (
      'include' => 'include',
      'filter' => 'filter',
      'sort' => 'sort',
      'fields' => 'fields',
      'append' => 'append',
    ),
    'count_suffix' => 'Count',
    'disable_invalid_filter_query_exception' => false,
    'request_data_source' => 'query_string',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
