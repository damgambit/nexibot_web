<?php $__env->startSection('content'); ?>
    <!-- page content -->
    <div class="container">
    	
    	<div class="row col-lg-6">

			<h3>Carica QR</h3>

			<form method="post" action="<?php echo e(route('check_qr_conf')); ?>">
			  

			  <input type="file" name="pic" accept="image/*">

			  <?php echo e(csrf_field()); ?>


			  <br><hr><br>

			  <button type="submit" class="btn btn-primary">Verifica QR</button>
			</form>

		</div>

	</div>
    
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
    <?php echo e(Html::style(mix('assets/admin/css/dashboard.css'))); ?>

<?php $__env->stopSection(); ?>
s
<?php echo $__env->make('client.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>