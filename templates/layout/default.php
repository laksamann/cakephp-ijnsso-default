<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo h($cakeDescription) ?>: <?php echo $this->fetch('title') ?></title>
    <?php echo $this->Html->meta('icon') ?>

    <!-- Core Styles -->
    <?php echo $this->Html->css([
    'default/plugins.bundle',
    'default/style.bundle',
    'default/fa.min',
    '../DataTables/datatables',
    '../SummerNote/summernote',
    ]) ?>

    <!-- Scripts -->
    <?php echo $this->Html->script([
        'jquery',
        'default/scripts.bundle',
        'default/plugins.bundle',
        '../DataTables/datatables',
        'default/select2.min',
        '../SummerNote/summernote',
    ]) ?>

    <?php echo $this->fetch('script') ?>

    <!-- Head blocks -->
    <?php echo $this->fetch('meta') ?>
    <?php echo $this->fetch('css') ?>
</head>

<body
    id="kt_app_body"
    class="app-default"
    data-kt-app-header-fixed="true"
    data-kt-app-header-fixed-mobile="true"
    data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="true"
    data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true"
    data-kt-app-aside-enabled="true"
    data-kt-app-aside-fixed="false"
>

<div id="kt_app_root" class="d-flex flex-column flex-root app-root">
<div id="kt_app_page" class="app-page flex-column flex-column-fluid">

    <!-- ================= HEADER ================= -->
    <div id="kt_app_header" class="app-header">
        <div class="app-header-logo d-flex align-items-center ps-lg-10 gap-4">

            <!-- Logo -->
            <img src="/assets/media/logos/default.svg" class="h-40px h-lg-50px" alt="Logo">

            <!-- System Name -->
            <div class="d-flex flex-column">
                <span class="fw-bold fs-6 fs-lg-5 text-gray-900">
                    Cardiovascular Risk Reduction Clinic
                </span>
                <span class="fs-8 text-muted">
                    Management Dashboard
                </span>
            </div>

        </div>


        <div class="app-header-wrapper">
            <div class="app-container container-fluid d-flex align-items-center justify-content-between">

                <div id="kt_header_search" class="header-search w-lg-400px"></div>

                <div class="app-navbar">

                    <!-- User Menu -->
                    <div class="app-navbar-item me-lg-6" id="kt_header_user_menu_toggle">
                        <div
                            class="cursor-pointer symbol symbol-35px symbol-md-40px"
                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-end"
                        >
                            <img src="<?php echo h($userLoggedIn->photo) ?>" class="symbol-circle" alt="user">
                        </div>

                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded py-4 fs-6 w-275px"
                             data-kt-menu="true">

                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3 py-4">

                                    <!-- User Details -->
                                    <div class="d-flex flex-column">

                                        <!-- Name -->
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="fw-bold fs-5 text-gray-800">
                                                <?= h($userLoggedIn->name) ?>
                                            </span>
                                        </div>

                                        <!-- Staff Number -->
                                        <span class="fs-7 text-gray-600 mt-1">
                                            <span class="fw-semibold"><?= h($userLoggedIn->staffno) ?></span>
                                        </span>

                                        <!-- Email -->
                                        <span class="fs-7 text-muted">
                                            <?= h($userLoggedIn->email) ?>
                                        </span>

                                        <!-- Role -->
                                        <div class="pt-2">
                                            <span class="badge badge-light-primary fs-8 fw-semibold"
                                                data-bs-toggle="tooltip"
                                                title="System access level">
                                                <?= match ($userLoggedIn->userData->role_sso_id) {
                                                    1 => 'Administrator',
                                                    2 => 'MIS',
                                                    3 => 'Super User',
                                                    4 => 'Standard User',
                                                    default => 'Unknown Role'
                                                } ?>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="separator my-2"></div>

                            <div class="menu-item px-5">
                                <a href="/logout" class="menu-link px-5">Sign Out</a>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Sidebar Toggle -->
                    <div class="app-navbar-item d-lg-none">
                        <button id="kt_app_sidebar_mobile_toggle" class="btn btn-icon">
                            <i class="ki-outline ki-burger-menu-2 fs-2"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- ================= WRAPPER ================= -->
    <div id="kt_app_wrapper" class="app-wrapper d-flex">

        <!-- Sidebar -->
        <div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true"
            data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
            data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start"
            data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
            <div class="app-sidebar-wrapper hover-scroll-y mx-3 my-2">
                <div id="kt_app_sidebar_menu" class="menu menu-column fw-semibold fs-6 py-4 px-2" data-kt-menu="true">

                    <?php
                        $menus = [
                            1         => [
                                'Home'   => [
                                    ['Dashboard', '/dashboard'],
                                    ['Responses', '/responses'],
                                ],
                                'Manage' => [
                                    ['Equipment Types', '/equipmenttypes'],
                                    ['Equipments', '/equipments'],
                                    ['Departments', '/departments'],
                                    ['Forms', '/forms'],
                                    ['User', '/users'],
                                ],
                            ],
                            3         => [
                                'Home'   => [
                                    ['Dashboard', '/dashboard'],
                                    ['Responses', '/responses'],
                                ],
                                'Manage' => [
                                    ['Equipment Types', '/equipmenttypes'],
                                    ['Equipments', '/equipments'],
                                    ['Forms', '/forms'],
                                ],
                            ],
                            'default' => [
                                'Home' => [['Dashboard', '/dashboard']],
                            ],
                        ];

                        $roleMenus = $menus[$userLoggedIn->userData->role_sso_id] ?? $menus['default'];

                        foreach ($roleMenus as $section => $items):
                    ?>
                        <div class="menu-content ps-1 py-1 fw-bolder fs-5"><?php echo h($section) ?></div>

                        <?php foreach ($items as [$title, $link]): ?>
                            <div class="menu-item">
                                <a href="<?php echo $link ?>" class="menu-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title"><?php echo h($title) ?></span>
                                </a>
                            </div>
                        <?php endforeach; ?>

                        <div class="separator my-2"></div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>

        <!-- Main -->
        <div id="kt_app_main" class="app-main flex-column flex-row-fluid">
            <div class="app-content">
                <?php echo $this->Flash->render() ?>
                <?php echo $this->fetch('content') ?>
            </div>
        </div>

    </div>
</div>
</div>

<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-outline ki-arrow-up"></i>
</div>

<script>
    const currentPath = window.location.pathname;
    document.querySelectorAll('.menu-link').forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });
</script>

</body>
</html>
