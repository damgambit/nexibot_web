<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="site_title">
                <span><?php echo e(config('app.name')); ?></span>
            </a>
        </div>

        <div class="clearfix"></div>


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
                    <li>
                        <a href="<?php echo e(route('locked_products')); ?>">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            Prodotti fissi
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('dynamic_products')); ?>">
                            <i class="fa fa-unlock" aria-hidden="true"></i>
                            Prodotti dinamici
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('validate_confirmation')); ?>">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                            Verifica pagamento
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('transactions')); ?>">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            Transazioni
                        </a>
                    </li>
                </ul>
            </div>
            
            
        </div>
        <!-- /sidebar menu -->
    </div>
</div>
