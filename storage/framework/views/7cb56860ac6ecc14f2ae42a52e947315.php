<?php echo $__env->make("blueprint.admin.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('blueprint.lib'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo e(config('app.name', 'Pterodactyl')); ?> - <?php echo $__env->yieldContent('title'); ?></title>
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

        <?php echo $__env->yieldContent("blueprint.import"); ?>
    </head>
    <body class="hold-transition skin-blue fixed sidebar-mini">
        <?php echo $__env->yieldContent('blueprint.cache'); ?>
        <div class="wrapper">
            <header class="main-header">
                <a href="<?php echo e(route('index')); ?>" class="logo">
                    <span><?php echo e(config('app.name', 'Pterodactyl')); ?></span>
                </a>
                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="user-menu">
                                <a href="<?php echo e(route('account')); ?>">
                                    <img src="https://www.gravatar.com/avatar/<?php echo e(md5(strtolower(Auth::user()->email))); ?>?s=160" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo e(Auth::user()->name_first); ?> <?php echo e(Auth::user()->name_last); ?></span>
                                </a>
                            </li>
                            <?php echo $__env->yieldContent("blueprint.navigation"); ?>
                            <li>
                                <li><a href="<?php echo e(route('index')); ?>" data-toggle="tooltip" data-placement="bottom" title="Exit Admin Control"><i class="fa fa-server"></i></a></li>
                            </li>
                            <li>
                                <li><a href="<?php echo e(route('auth.logout')); ?>" id="logoutButton" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="fa fa-sign-out"></i></a></li>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="main-sidebar">
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="header">BASIC ADMINISTRATION</li>
                        <li class="<?php echo e(Route::currentRouteName() !== 'admin.index' ?: 'active'); ?>">
                            <a href="<?php echo e(route('admin.index')); ?>">
                                <i class="fa fa-home"></i> <span>Overview</span>
                            </a>
                        </li>
                        <li class="<?php echo e(! starts_with(Route::currentRouteName(), 'admin.settings') ?: 'active'); ?>">
                            <a href="<?php echo e(route('admin.settings')); ?>">
                                <i class="fa fa-wrench"></i> <span>Settings</span>
                            </a>
                        </li>
                        <li class="<?php echo e(! starts_with(Route::currentRouteName(), 'admin.api') ?: 'active'); ?>">
                            <a href="<?php echo e(route('admin.api.index')); ?>">
                                <i class="fa fa-gamepad"></i> <span>Application API</span>
                            </a>
                        </li>
                        <li class="header">MANAGEMENT</li>
                        <li class="<?php echo e(! starts_with(Route::currentRouteName(), 'admin.databases') ?: 'active'); ?>">
                            <a href="<?php echo e(route('admin.databases')); ?>">
                                <i class="fa fa-database"></i> <span>Databases</span>
                            </a>
                        </li>
                        <li class="<?php echo e(! starts_with(Route::currentRouteName(), 'admin.locations') ?: 'active'); ?>">
                            <a href="<?php echo e(route('admin.locations')); ?>">
                                <i class="fa fa-globe"></i> <span>Locations</span>
                            </a>
                        </li>
                        <li class="<?php echo e(! starts_with(Route::currentRouteName(), 'admin.nodes') ?: 'active'); ?>">
                            <a href="<?php echo e(route('admin.nodes')); ?>">
                                <i class="fa fa-sitemap"></i> <span>Nodes</span>
                            </a>
                        </li>
                        <li class="<?php echo e(! starts_with(Route::currentRouteName(), 'admin.servers') ?: 'active'); ?>">
                            <a href="<?php echo e(route('admin.servers')); ?>">
                                <i class="fa fa-server"></i> <span>Servers</span>
                            </a>
                        </li>
                        <li class="<?php echo e(! starts_with(Route::currentRouteName(), 'admin.users') ?: 'active'); ?>">
                            <a href="<?php echo e(route('admin.users')); ?>">
                                <i class="fa fa-users"></i> <span>Users</span>
                            </a>
                        </li>
                        <li class="header">SERVICE MANAGEMENT</li>
                        <li class="<?php echo e(! starts_with(Route::currentRouteName(), 'admin.mounts') ?: 'active'); ?>">
                            <a href="<?php echo e(route('admin.mounts')); ?>">
                                <i class="fa fa-magic"></i> <span>Mounts</span>
                            </a>
                        </li>
                        <li class="<?php echo e(! starts_with(Route::currentRouteName(), 'admin.nests') ?: 'active'); ?>">
                            <a href="<?php echo e(route('admin.nests')); ?>">
                                <i class="fa fa-th-large"></i> <span>Nests</span>
                            </a>
                        </li>
                    </ul>
                </section>
            </aside>
            <div class="content-wrapper">
                <section class="content-header">
                    <?php echo $__env->yieldContent('content-header'); ?>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <?php if(count($errors) > 0): ?>
                                <div class="alert alert-danger">
                                    There was an error validating the data provided.<br><br>
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <?php $__currentLoopData = Alert::getMessages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type => $messages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="alert alert-<?php echo e($type); ?> alert-dismissable" role="alert">
                                        <?php echo $message; ?>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php echo $__env->yieldContent('content'); ?>
                </section>
            </div>
            <footer class="main-footer">
                <div class="pull-right small text-gray" style="margin-right:10px;margin-top:-7px;">
                    <strong><i class="fa fa-fw <?php echo e($appIsGit ? 'fa-git-square' : 'fa-code-fork'); ?>"></i></strong> <?php echo e($appVersion); ?><br />
                    <strong><i class="fa fa-fw fa-clock-o"></i></strong> <?php echo e(round(microtime(true) - LARAVEL_START, 3)); ?>s
                </div>
                Copyright &copy; 2015 - <?php echo e(date('Y')); ?> <a href="https://pterodactyl.io/">Pterodactyl Software</a>.
            </footer>
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

            <?php if(Auth::user()->root_admin): ?>
                <script>
                    $('#logoutButton').on('click', function (event) {
                        event.preventDefault();

                        var that = this;
                        swal({
                            title: 'Do you want to log out?',
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d9534f',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Log out'
                        }, function () {
                             $.ajax({
                                type: 'POST',
                                url: '<?php echo e(route('auth.logout')); ?>',
                                data: {
                                    _token: '<?php echo e(csrf_token()); ?>'
                                },complete: function () {
                                    window.location.href = '<?php echo e(route('auth.login')); ?>';
                                }
                        });
                    });
                });
                </script>
            <?php endif; ?>

            <script>
                $(function () {
                    $('[data-toggle="tooltip"]').tooltip();
                })
            </script>
        <?php echo $__env->yieldSection(); ?>
        <?php echo $__env->yieldContent('blueprint.notifications'); ?>
        <?php echo $__env->yieldContent('blueprint.wrappers'); ?>
    </body>
</html>
<?php /**PATH /var/www/pterodactyl/resources/views/layouts/admin.blade.php ENDPATH**/ ?>