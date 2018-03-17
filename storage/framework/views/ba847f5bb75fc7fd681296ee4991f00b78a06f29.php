<?php $__env->startSection('content'); ?>
    <!-- page content -->
    <div class="container">
    	<div class="row">
		    <h1> transactions </h1>

		</div>

		<div class="col-lg-8">
			<table class="table table-bordered table-hover table-responsive">

				<thead>
					<th>id</th>
					<th>telegram_user_id</th>
					<th>amount</th>
					<th>currency</th>
					<th>status</th>
					<th>product_id</th>

				</thead>

				<tbody>
					<?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($transaction->id); ?></td>
							<td><?php echo e($transaction->telegram_user_id); ?></td>
							<td><?php echo e($transaction->amount); ?></td>
							<td><?php echo e($transaction->currency); ?></td>
							<td><?php echo e($transaction->status); ?></td>
							<td><?php echo e($transaction->product_id); ?></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>

			</table>
		</div>
	</div>
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
    <?php echo e(Html::style(mix('assets/admin/css/dashboard.css'))); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>