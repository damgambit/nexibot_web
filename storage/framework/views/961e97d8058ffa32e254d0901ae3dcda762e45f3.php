<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="site_title">
                <span><?php echo e(config('app.name')); ?></span>
            </a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?php echo e(auth()->user()->avatar); ?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <h2><?php echo e(auth()->user()->name); ?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3><?php echo e(__('views.backend.section.navigation.sub_header_0')); ?></h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo e(route('admin.dashboard')); ?>">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <?php echo e(__('views.backend.section.navigation.menu_0_1')); ?>

                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3><?php echo e(__('views.backend.section.navigation.sub_header_1')); ?></h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo e(route('admin.users')); ?>">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <?php echo e(__('views.backend.section.navigation.menu_1_1')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.permissions')); ?>">
                            <i class="fa fa-key" aria-hidden="true"></i>
                            <?php echo e(__('views.backend.section.navigation.menu_1_2')); ?>

                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3><?php echo e(__('views.backend.section.navigation.sub_header_2')); ?></h3>

                <ul class="nav side-menu">
                    <li>
                        <a>
                            <i class="fa fa-list"></i>
                            <?php echo e(__('views.backend.section.navigation.menu_2_1')); ?>

                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="<?php echo e(route('log-viewer::dashboard')); ?>">
                                    <?php echo e(__('views.backend.section.navigation.menu_2_2')); ?>

                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('log-viewer::logs.list')); ?>">
                                    <?php echo e(__('views.backend.section.navigation.menu_2_3')); ?>

                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            
        </div>
        <!-- /sidebar menu -->
    </div>
</div>
