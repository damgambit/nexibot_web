<?php $__env->startSection('content'); ?>
    <!-- page content -->
    <div class="container">
    
	    <div class="row">
		    <h1> Prodotti Fissi </h1>

		</div>

		<hr>

		<div class="row col-lg-6">

			<h3>Genera QR Prodotto dinamico</h3>

			<form method="post" action="<?php echo e(route('show_dynamic_qr')); ?>">
			  <div class="form-group">
			    <label for="name">Nome prodotto</label>
			    <input type="text" class="form-control" name="name" aria-describedby="nome" placeholder="Inserire nome prodotto">
			  </div>
			  
			  <div class="form-group">
			    <label for="price">Prezzo prodotto</label>
			    <input type="text" class="form-control" name="price" aria-describedby="prezzo" placeholder="Inserire prezzo prodotto">
			  </div>

			  <input type="hidden" value="0" name="locked" />

			  <?php echo e(csrf_field()); ?>


			  <button type="submit" class="btn btn-primary">Genera QR</button>
			</form>

		</div>



		

	</div>
    
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
    <?php echo e(Html::style(mix('assets/admin/css/dashboard.css'))); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>