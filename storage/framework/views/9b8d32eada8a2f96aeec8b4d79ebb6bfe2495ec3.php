<?php $__env->startSection('content'); ?>
    <!-- page content -->
    <div class="container">
    
	    <div class="row">
		    <h1> Prodotti Fissi </h1>

		</div>

		<hr>

		<div class="row col-lg-6">

			<h3>Aggiungi Prodotto fisso</h3>

			<form method="post" action="<?php echo e(route('create_product')); ?>">
			  <div class="form-group">
			    <label for="name">Nome prodotto</label>
			    <input type="text" class="form-control" name="name" aria-describedby="nome" placeholder="Inserire nome prodotto">
			  </div>
			  
			  <div class="form-group">
			    <label for="price">Prezzo prodotto</label>
			    <input type="text" class="form-control" name="price" aria-describedby="prezzo" placeholder="Inserire prezzo prodotto">
			  </div>

			  <input type="hidden" value="1" name="locked" />

			  <?php echo e(csrf_field()); ?>


			  <button type="submit" class="btn btn-primary">Aggiungi</button>
			</form>

		</div>



		<div class="col-lg-8">
			<br><br><br>
			<table class="table table-bordered table-hover table-responsive">

				<thead>

					<th>Nome</th>
					<th>Prezzo</th>
					<th>QR</th>

				</thead>

				<tbody style="font-size: 24px">
					<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($product->name); ?></td>
							<td><?php echo e($product->price); ?></td>
							<td>
								<a href="<?php echo e(route('show_qr', $product->id)); ?>">
									<button class="col-lg-12 btn btn-info"> 
										QR
									</button>
								</a> 
							</td>
	
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