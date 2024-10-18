<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo e(config('app.name', 'Pterodactyl')); ?> - Updating...</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="_token" content="<?php echo e(csrf_token()); ?>">

        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/favicons/manifest.json">
        <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#bc6e3c">
        <link rel="shortcut icon" href="/favicons/favicon.ico">
        <meta name="msapplication-config" content="/favicons/browserconfig.xml">
        <meta name="theme-color" content="#0e4688">

        <?php echo $__env->make('layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php $__env->startSection('scripts'); ?>
            <?php echo Theme::css('vendor/select2/select2.min.css?t={cache-version}'); ?>

            <?php echo Theme::css('vendor/bootstrap/bootstrap.min.css?t={cache-version}'); ?>

            <?php echo Theme::css('vendor/adminlte/admin.min.css?t={cache-version}'); ?>

            <?php echo Theme::css('vendor/adminlte/colors/skin-blue.min.css?t={cache-version}'); ?>

            <?php echo Theme::css('vendor/sweetalert/sweetalert.min.css?t={cache-version}'); ?>

            <?php echo Theme::css('vendor/animate/animate.min.css?t={cache-version}'); ?>

            <?php echo Theme::css('css/pterodactyl.css?t={cache-version}'); ?>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        <?php echo $__env->yieldSection(); ?>
    </head>
    <body class="skin-blue fixed sidebar-mini">
        <div class="wrapper">
            <div style="min-height: 100vh; margin: auto; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 1rem;">
                <h1 style="text-align: center">The panel is updating.</h1>
                <p style="text-align: center; margin-bottom: 2rem;">It is safe to use the panel and close this tab during the update procedure.</p>

                <p class="text-muted"><small>Update logs</small></p>
                <pre class="no-margin" style="white-space: pre-wrap; max-width: 768px;"><?php echo e($logData); ?></pre>
            </div>
        </div>
        <?php $__env->startSection('footer-scripts'); ?>
            <script src="/js/keyboard.polyfill.js" type="application/javascript"></script>
            <script>keyboardeventKeyPolyfill.polyfill();</script>

            <?php echo Theme::js('vendor/jquery/jquery.min.js?t={cache-version}'); ?>

            <?php echo Theme::js('vendor/sweetalert/sweetalert.min.js?t={cache-version}'); ?>

            <?php echo Theme::js('vendor/bootstrap/bootstrap.min.js?t={cache-version}'); ?>

            <?php echo Theme::js('vendor/slimscroll/jquery.slimscroll.min.js?t={cache-version}'); ?>

            <?php echo Theme::js('vendor/adminlte/app.min.js?t={cache-version}'); ?>

            <?php echo Theme::js('vendor/bootstrap-notify/bootstrap-notify.min.js?t={cache-version}'); ?>

            <?php echo Theme::js('vendor/select2/select2.full.min.js?t={cache-version}'); ?>

            <?php echo Theme::js('js/admin/functions.js?t={cache-version}'); ?>

            <script src="/js/autocomplete.js" type="application/javascript"></script>

            <script>
                setTimeout(() => location.reload(), 1000);
            </script>
        <?php echo $__env->yieldSection(); ?>
    </body>
</html>
<?php /**PATH /var/www/pterodactyl/resources/views/admin/updater/log.blade.php ENDPATH**/ ?>