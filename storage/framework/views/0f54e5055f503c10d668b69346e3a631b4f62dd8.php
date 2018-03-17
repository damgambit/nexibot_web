<?php $__env->startSection('content'); ?>
    <!-- page content -->
    <div class="container">
    

	</div>
    
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
    <?php echo e(Html::style(mix('assets/admin/css/dashboard.css'))); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>