<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("unit/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("unit/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("unit/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("unit/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('unit/document/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" unit/product/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $product->header_document_id?>" />

							<div class="form-group">
								<label for="name">Name*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Product name" value="<?php echo $product->name ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Unit</label>
								<input class="form-control <?php echo form_error('Unit') ? 'is-invalid':'' ?>"
								 type="number" name="type_unit" min="0" placeholder="Unit" value="<?php echo $product->type_unit ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('unit') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("unit/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("unit/_partials/scrolltop.php") ?>

		<?php $this->load->view("unit/_partials/js.php") ?>

</body>

</html>
